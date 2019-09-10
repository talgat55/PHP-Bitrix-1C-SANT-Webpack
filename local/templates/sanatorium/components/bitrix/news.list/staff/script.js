jQuery(document).ready(function () {
    "use strict";

    //
    // change position popup for last item on hover
    //
    if (jQuery(window).width() > 1024) {
        jQuery('.staff-list .staff-item').hover(
            function () {
                var $this = jQuery(this);
                var widthWindow = jQuery(window).width();
                var widthPopUp = $this.find('.tooltip_templates').width();
                var offset = $this.offset();

                if (offset.left + widthPopUp > widthWindow) {
                    $this.find('.tooltip_templates').css({'right': '0', 'left': '-100%'});
                }
            }, function () {
            }
        );
    }

    // end redy function
});
