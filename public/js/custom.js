let data_tag = '#data',
    valid_text = '.valid-text',
    urlHost = window.location.host,
    urlProtocol = window.location.protocol,
    urlParam = window.location.search,
    curr_location = window.location.href,
    location_split = curr_location.split('/'),

    uname = $(data_tag).data('uname'),
    user_id = $(data_tag).data('user-id'),
    csrf_token = $('meta[name=csrf-token]').attr('content'),
    loggedIn = userIsLoggedIn(),
    valid_text_html = '<div class="d-flex justify-content-between"><span><i class="fa fa-times-circle"></i></span></div>';

/*<=====================/ *** General Functions *** /=====================>*/
// Function to check if am element is hovered upon
jQuery.fn.mouseIsOver = function () {
    return $(this[0]).is(':hover');
};

function formAction(_form) {
    return $(_form).attr('action');
}

function userIsLoggedIn() {
    return user_id !== '' || undefined;
}

// Function to check if an element has a scrollbar
(function ($) {
    $.fn.hasScrollBar = function () {
        console.log(this.get(0).clientHeight);
        return this.get(0).scrollHeight > this.get(0).clientHeight;
    }
})(jQuery);

// Function to remove all validation messages
function clearText() {
    $('.invalid-feedback').html('<strong></strong>');
    $('input, select, textarea').removeClass('is-invalid');
}

function showPasswordText(ele) {
    let x = $(ele).siblings('input');
    // x = $(ele).siblings('input')[0];
    if (x.attr('type') === 'password')
        x.attr('type', 'text');
    else
        x.attr('type', 'password');
}

function formAttr(_form) {
    let ele = $(_form)[0].elements,
        form = '#' + $(_form).attr('id');

    return {
        that: ele,
        form: form
    }
}

// Function to hide form messages on click
function hideMessage(element) {
    element.mouseenter(function (e) {
        e.preventDefault();
        $('.remove', this).on('click', function (e) {
            e.preventDefault();
            $(this).fadeOut();
            dynamicFooter();
        });
    });
}

// Function to hide form messages on click
function hideFeedBack(element, form) {
    let _form = formAttr(form)['form'];
    element.mouseenter(function (e) {
        e.preventDefault();
        $('.remove', this).on('click', function (e) {
            e.preventDefault();
            $(this).fadeOut();
            $('.valid-feedback').fadeOut();
            $(_form + ' input, ' + _form + ' select').removeClass('is-valid').removeClass('is-invalid');
            dynamicFooter();
        });
    });
}

function dynamicFooter() {
    if ($('html').hasScrollBar()) {
        $('footer').css({
            padding: '2rem 0',
            left: $('div#wrapper ul#accordionSidebar.navbar-nav').width(),
            right: '0',
            msFlexNegative: '0',
            flexShrink: 0
        });

    } else {
        $('footer').css({
            position: 'absolute',
            bottom: '0',
            left: $('div#wrapper ul#accordionSidebar.navbar-nav').width(),
            right: '0',
            display: 'flex'
        });
    }
}

// Reposition footer on window resize
$(window).on('resize', function () {
    dynamicFooter();
});
dynamicFooter();
/*<=====================/ *** End of General Functions *** /=====================>*/


$('.nav-tabs a').on('shown.bs.tab', function () {
    dynamicFooter();
});
