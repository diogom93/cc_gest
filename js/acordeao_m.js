$(document).ready(function() {
    function close_accordion_section( $target ) {
        $target.removeClass('active');
        $('.acordeao ' + $target.attr('href')).slideUp(300).removeClass('open');
    }

    $('.acc_seccao_titulo').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');

        if ($(e.target).is('.active')) {
            close_accordion_section($(e.target));
        } else {
            //close_accordion_section();

            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.acordeao ' + currentAttrValue).slideDown(300).addClass('open');
        }

        e.preventDefault();
    });
});