$(document).ready(function() {

    // blog reader menu color change
    $(window).on('scroll', function() {
        var scrollPos = $(document).scrollTop();

        $('h2').each(function() {
            var currLink = $(this);
            var refElement = $(currLink).attr("id");
            if (currLink.position().top <= scrollPos && currLink.position().top + currLink.height() > scrollPos) {
                $('.menu-item').removeClass("active");
                $('a[href="#' + refElement + '"]').addClass("active");
            }
        });
    });

    // header sticky when scroll up
    let lastScrollTop = 0;
    const header = $('header');
    let headerHeight = header.outerHeight();

    $(window).on('scroll', function() {
        let currentScroll = $(this).scrollTop();

        if (currentScroll > lastScrollTop) {
            header.removeClass('header-sticky');
        } else {
            header.addClass('header-sticky');
        }
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });
});
