/*
 * Replace all SVG images with inline SVG
 */
jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');
    var imgAlt = $img.attr('alt');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(!!imgID) {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(!!imgClass) {
            $svg = $svg.attr('class', imgClass);
        }

        if(!!imgAlt) {
            $svg = $svg.attr('aria-label', imgAlt);
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        $svg.attr({width: 'auto', height: 'auto', role: 'img'});

        // Replace image with new SVG
        $img.replaceWith($svg);

        setTimeout(function () {
            $svg.show();
        }, 100);

    }, 'xml');

});