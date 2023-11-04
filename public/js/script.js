$(document).ready(function() {
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
});
