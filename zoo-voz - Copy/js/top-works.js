(function($) {
    "use strict";
    var $win;

    function init(){
      setColorArchive();
    }


    function setColorArchive() {
      var $wrap_box = $('.box_lworks');

      $wrap_box.each(function(index, obj){
          var cat_color = $(this).data('cat-color'),
              rgb_code = hexToRgb(cat_color),
              cat_color = cat_color.replace('#','');

          var selected_title = '.service-' + cat_color + ' .cate_works',
              cover_bg = '.service-' + cat_color + ' .box_lworks_on';

          var $title_service = $(selected_title),
              $cover_service = $(cover_bg);

              // add inline CSS
              $title_service.css('color', cat_color);
              $cover_service.css('background',rgb_code);

          var $str_override = "<style>.service-"+ cat_color + " .title_lworks:before { background-color: " + cat_color + "!important; }</style>";
          var $border_override= "<style>.service-"+ cat_color + " .cate_works:after { border-top-color: " + cat_color + "!important }</style>";

              $('head').append($str_override);
              $('head').append($border_override);
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
