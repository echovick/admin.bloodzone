$(function () {
    let requested = false,
        mess_tag = '#mess',
        mess = $(mess_tag).html(),

        fa_check = 'fa-check-double',
        fa_exc = 'fa-exclamation-circle',
        danger_rem_class = 'alert-danger remove w3-small',
        success_rem_class = 'alert-success remove w3-small',
        success_cont_class = 'alert-success continue w3-small';

    // Function to display messages (** Requires html class attribute(s) (eg. alert-danger), fa icon (eg. fa-exclamation), and the error message **)
    function message(class_opt, fa_tag, mess, mess_tag) {
        console.log(true)
        $(mess_tag).html('\n\
            <div class="alert ' + class_opt + '">\
                <i class="fa ' + fa_tag + '"></i> \
                ' + mess + '\
            </div>\
        ');
    }

    // Function to add only the error class (** Requires the instance of the form field, the error array, the single error message, and the message() function **)
    function addReggErr(that, error, mess, mess_tag) {
        for (let i = 0; i < that.length; i++) {
            let element_id = that[i].id;
            if (element_id in error) {
                $('#' + element_id).addClass('regerr').trigger('focus');
            }
        }
        message(danger_rem_class, fa_exc, mess, mess_tag);
    }

    // Display Error message(s) and add the error class (** Requires the instance of the form field, the error array, the single error message (optional), and the addRegErr() & message() functions)
    function displaySuccess(form, that, mess) {
        for (let i = 0; i < that.length; i++) {
            let element_id = that[i].id;
            if (element_id in mess && (mess[element_id] !== '')) {
                $(form + ' #' + element_id)
                    .removeClass('is-invalid')
                    .removeClass('is-valid')
                    .addClass('is-valid');
                $(form + ' #' + element_id + 'Valid')
                    .removeClass('invalid-feedback')
                    .removeClass('valid-feedback')
                    .addClass('valid-feedback');

                $(form + ' #' + element_id + 'Valid > strong').html(mess[element_id]);
            }
        }
    }

    // Display Error message(s) and add the error class (** Requires the instance of the form field, the error array, the single error message (optional), and the addRegErr() & message() functions)
    function displayError(form, that, error, mess, mess_tag) {
        for (let i = 0; i < that.length; i++) {
            let element_id = that[i].id;
            if (element_id in error && (error[element_id] !== '')) {
                $(form + ' #' + element_id)
                    .removeClass('is-valid')
                    .removeClass('is-invalid')
                    .addClass('is-invalid');
                $(form + ' #' + element_id + 'Valid')
                    .removeClass('valid-feedback')
                    .removeClass('invalid-feedback')
                    .addClass('invalid-feedback');

                $(form + ' #' + element_id + 'Valid > strong').html(error[element_id]);
            }
        }
        if (mess) message(danger_rem_class, fa_exc, mess, mess_tag);
    }

    /**** i. Functions for Adding / Creating ****/
    function createCenter(form, that) {
        $(mess_tag).html(mess).fadeIn();
        if (requested) {
            return;
        }
        requested = true;

        setTimeout(function () {
            $(form).ajaxSubmit({
                url: formAction(form),
                method: 'post',
                data: {
                    // action: 'update-account',
                    _token: csrf_token
                },
                dataType: 'json',
                complete: function (xhr) {
                    let resp = xhr.responseJSON,
                        status = xhr.status,
                        error = resp.errors,
                        mess = resp.message;

                    clearText();
                    if (status === 200) {
                        message(success_cont_class, fa_check, 'Center has been added successfully!!!<br /><i class="fa fa-spin fa-spinner"></i> Please Wait...', mess_tag);
                    } else {
                        if (status === 500) {
                            message(danger_rem_class, fa_exc, 'Oops that was from us...Please contact us if this continues<br /><small>Click to dismiss</small>', mess_tag)
                            return;
                        }
                        displayError(formAttr(form)['form'], that, error, mess + '<br /><small>Click to dismiss</small>', mess_tag);
                    }
                    hideFeedBack($(mess_tag), form);
                }
            });
            requested = false;
        }, 800);
    }

    /**** ii. Functions for Editing / Patching ****/
    function editAdminAccount(form, that) {
        $(mess_tag).html(mess).fadeIn();
        if (requested) {
            return;
        }
        requested = true;

        setTimeout(function () {
            $(form).ajaxSubmit({
                url: formAction(form),
                method: 'post',
                data: {
                    action: 'update-account',
                    _method: 'patch',
                    _token: csrf_token
                },
                dataType: 'json',
                complete: function (xhr) {
                    let resp = xhr.responseJSON,
                        status = xhr.status,
                        error = resp.errors,
                        mess = resp.message;

                    clearText();
                    if (status === 200) {
                        displaySuccess(formAttr(form)['form'], that, mess);
                        message(success_rem_class, fa_check, 'Changes Saved Successfully!!!<br /><small>Click to dismiss</small>', mess_tag);
                    } else {
                        if (status === 500) {
                            message(danger_rem_class, fa_exc, 'Oops that was from us...Please contact us if this continues<br /><small>Click to dismiss</small>', mess_tag)
                            return;
                        }
                        displayError(formAttr(form)['form'], that, error, mess + '<br /><small>Click to dismiss</small>', mess_tag);
                    }
                    hideFeedBack($(mess_tag), form);
                }
            });
            requested = false;
        }, 800);
    }

    function editAdminSecurity(form, that, mess_tag) {
        $(mess_tag).html(mess).fadeIn();
        if (requested) {
            return;
        }

        requested = true;

        setTimeout(function () {
            $(form).ajaxSubmit({
                url: formAction(form),
                method: 'post',
                data: {
                    action: 'update-password',
                    _method: 'patch',
                    _token: csrf_token
                },
                dataType: 'json',
                complete: function (xhr) {
                    let resp = xhr.responseJSON,
                        status = xhr.status,
                        error = resp.errors,
                        mess = resp.message;

                    clearText();
                    if (status === 200) {
                        if (resp.status === 300) {
                            displayError(formAttr(form)['form'], that, error, mess + '<br /><small>Click to dismiss</small>', mess_tag);
                            return;
                        }
                        message(success_rem_class, fa_check, 'Password successfully updated!!!<br /><small>Click to dismiss</small>', mess_tag);
                    } else if (status === 500) {
                        message(danger_rem_class, fa_exc, 'Oops that was from us...Please contact us if this continues<br /><small>Click to dismiss</small>', mess_tag)
                        return;
                    }
                    displayError(formAttr(form)['form'], that, error, mess + '<br /><small>Click to dismiss</small>', mess_tag);
                    hideFeedBack($(mess_tag), form);
                }
            });
            requested = false;
        }, 800);
    }


    /**------------------------------------------------**/
    /****************** Function Calls ******************/
    /**------------------------------------------------**/

    /**======== Create ========**/
    $('#create-center-form').on('submit', function (e) {
        e.preventDefault();
        let form = this,
            that = formAttr(this)['that'];
        createCenter(form, that);
    });

    /**======== Edit ========**/
    $('#edit-admin-account').on('submit', function (e) {
        e.preventDefault();
        let form = this,
            that = formAttr(this)['that'];
        editAdminAccount(form, that);
    });

    $('#edit-admin-security').on('submit', function (e) {
        e.preventDefault();
        let form = this,
            that = formAttr(this)['that'],
            mess_tag = formAttr(form)['form'] + ' #mess';
        editAdminSecurity(form, that, mess_tag);
    });

    /**======== Misc. ========**/
    $('.show-password').on('click', function (e) {
        e.preventDefault();
        showPasswordText(this);
    });
});
