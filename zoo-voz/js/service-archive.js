(function($) {
    "use strict";
    var $win;

    function init(){
      setColorArchive();
    }


    function setColorArchive() {
      var $wrap_box = $('.service_box');

      $wrap_box.each(function(index, obj){
          var cat_color = $(this).data('cat-color'),
              rgb_code = hexToRgb(cat_color),
              cat_color = cat_color.replace('#','');

          var selected_title = '.service-' + cat_color + ' .title_service',
              selected_button = '.service-'+ cat_color + ' .info_ser';

          var $title_service = $(selected_title),
              $button_service = $(selected_button);

              // add inline CSS
              $title_service.css('color', cat_color);
              $button_service.css('background',rgb_code);
      });

    }

    function hexToRgb(h) {
      var
        r = parseInt((cutHex(h)).substring(0,2),16),
        g = parseInt((cutHex(h)).substring(2,4),16),
        b = parseInt((cutHex(h)).substring(4,6),16),
        o = 0.9;

      return 'rgba('+ r +','+ g+','+ b + ',' + o + ')';
    }

    function cutHex(h) {
      return (h.charAt(0)=="#") ? h.substring(1,7):h
    }

    //running
    $(function() {
      init();
    });

})(jQuery);
