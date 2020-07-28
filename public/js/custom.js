(function ($) {
    $.fn.hasScrollBar = function () {
        console.log(this.get(0).clientHeight);
        return this.get(0).scrollHeight > this.get(0).clientHeight;
    }
})(jQuery);

function dynamicFooter() {
    if ($('html').hasScrollBar()) {
        console.log('true');
        $('footer').css({
            padding: '2rem 0',
            msFlexNegative: '0',
            flexShrink: 0
        });

    } else {
        console.log('false');
        $('footer').css({
            position: 'fixed',
            zIndex: '0',
            bottom: '0',
            right: '0',
            left: '0'
        });
    }
}

dynamicFooter();
