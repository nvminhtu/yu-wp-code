(function($) {
    "use strict";
    function init(){
      setColor();
    }

    function setColor() {
        var $wrap_color = $('.box_w');

        // var service_color = $wrap_color.data('service-color');
       $wrap_color.each(function(index, obj){

          var service_color = $(this).data('service-color'),
              rgb_code = hexToRgb(service_color),
              service_color_class = service_color.replace('#','');

          var border_color_class = '.service-' + service_color_class + ' .name_cate_w',
              bg_hover_work = '.service-' + service_color_class + ' .box_lworks_on';

          var $border_cat_name = $(border_color_class),
              $bg_hover_work = $(bg_hover_work),
              str_border = '3px solid ' + service_color ;

          var $spec = '.service-' + service_color_class,
              hover_override = "<style>"+ $spec +" .btn_site_adv a:hover { border-color: "+ service_color + "!important; color: "+ service_color + "}</style>";
              // blog_list_before = "<style>"+ $spec +".bloglist_box01 .blog_inew:before { background:"+ service_color + "!important; }</style>",
              // blog_list_after = "<style>"+ $spec +".bloglist_box01 .blog_inew:after { background:"+ service_color + "!important; }</style>";
              // .btn_site_adv a:hover
              // border-color: #E7B644; color: #E7B644;

              $bg_hover_work.css('background', rgb_code);
              $border_cat_name.css('border', str_border );
              $border_cat_name.css('color', service_color );

            
              $('head').append(hover_override);
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
