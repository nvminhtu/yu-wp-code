(function($) {
    "use strict";
    var $win;

    function init(){
      setColor();
    }

  function setColor() {
      var $cat_text = $('.cate_works'),
          $cover_bg = $('.box_lworks_on'),
          $wrap_color = $('.single_service'),
          $service_title = $('.single_service .title_03 .lf'),
          $service_title_sub = $('.single_service .title_serde_sub');

      var
         cat_color = $wrap_color.data('cat-color'),
         cat_wrap_color = $wrap_color.data('cat-color');

      console.log(cat_wrap_color);
      console.log(cat_color);
      var rgb_code = hexToRgb(cat_color);
      //add inline CSS
      $cat_text.css('color', cat_color);
      $cover_bg.css('background',rgb_code);
      $service_title.css('color',cat_wrap_color);
      $service_title_sub.css('color',cat_wrap_color);

      var $str_override = "<style>.title_lworks:before { background-color: " + cat_color + "!important; }</style>",
          $border_override= "<style>.cate_works:after { border-top-color: " + cat_color + "!important }</style>",
          $title_border_override= "<style>.title_03:before { background: " + cat_color + "!important }</style>",
          $title_info_list = "<style>.info_serde li:before { background: " + cat_color + "!important }</style>";

      $('head').append($str_override);
      $('head').append($border_override);
      $('head').append($title_border_override);
      $('head').append($title_info_list);
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
