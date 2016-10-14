(function($) {
    "use strict";
    function init(){
      setColor();
    }

    function setColor() {
        var $wrap_color = $('.bloglist_box01');

        // var cat_color = $wrap_color.data('service-color');
       $wrap_color.each(function(index, obj){

          var cat_color = $(this).data('color-code'),
              rgb_code = hexToRgb(cat_color),
              cat_color_class = cat_color.replace('#','');

          var border_color_class = '.blog-cat-' + cat_color_class + ' .name_cate_w',
              bg_time = '.blog-cat-' + cat_color_class + ' .blog_time';

          var $border_cat_name = $(border_color_class),
              $bg_time = $(bg_time),
              str_border = '3px solid ' + cat_color ;

          var
              $spec = '.blog-cat-' + cat_color_class,
              hover_override = "<style>"+ $spec +".bloglist_box01:hover:after{ border: 7px solid "+ cat_color + "!important; }</style>",
              blog_list_before = "<style>"+ $spec +".bloglist_box01 .blog_inew:before { background:"+ cat_color + "!important; }</style>",
              blog_list_after = "<style>"+ $spec +".bloglist_box01 .blog_inew:after { background:"+ cat_color + "!important; }</style>";

              $bg_time.css('background', cat_color);
              $($spec).css('border', str_border );
              $border_cat_name.css('color', cat_color );

              $('head').append(hover_override);
              $('head').append(blog_list_before);
              $('head').append(blog_list_after);

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
