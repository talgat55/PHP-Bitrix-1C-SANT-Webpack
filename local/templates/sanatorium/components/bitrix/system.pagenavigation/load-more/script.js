jQuery(document).ready(function () {
    "use strict";

    //
    //  Load more
    //

    var clickClass = '.pagination-wrapper .load-more';
    jQuery(clickClass).click(function (e) {
        e.preventDefault();
        var $this = jQuery(this);
        var hrefLink = $this.attr('href');
        var spinClass = 'fa-spin-hover';
        $this.addClass(spinClass);

        jQuery.post(hrefLink, function (data) {

            if (data != '') {
                var products = jQuery(data).find('.list-insert .item-insert');
                jQuery('.list-insert').append(products);
                $this.removeClass(spinClass);

                var link = jQuery(data).find(clickClass);

                if(link.length){
                    $this.attr('href', link.attr('href'));
                }else{
                    jQuery(clickClass).addClass('hide-item');
                }
            }

        });

    });


    // end redy function
});
