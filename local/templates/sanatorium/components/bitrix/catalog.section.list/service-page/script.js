
jQuery(document).ready(function () {
    "use strict";

    var clickClass = jQuery('.swtich-cat-services li a');
    var listServicesCats = jQuery('.swtich-cat-services li');
    var listServciesItems = jQuery('.list-service-cats  .item');
    var activeClass = 'active';



    jQuery(clickClass).click(function (e) {
        e.preventDefault();
        var $this  = jQuery(this);
        listServicesCats.removeClass(activeClass);
        $this.parent().addClass(activeClass);
        var idService = $this.attr('data-id');
        listServciesItems.removeClass(activeClass);
        jQuery('.list-service-cats').find('.'+idService).addClass(activeClass);

    });



    // end redy function
});
