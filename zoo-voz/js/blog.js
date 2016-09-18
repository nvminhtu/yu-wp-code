(function($) {
    "use strict";
    var
      $item,
      itemLen = 0,
      rows = 3;

    function init(){
     /* setHeightBox();
      $(window).resize(function() {
        var winWidth = $(window).width();
        console.log(winWidth);
        if( winWidth > 950 ) {
          rows = 3;
        } else {
          rows = 2;
        }
        setHeightBox();
      });*/
      setColor();
    }

    function setHeightBox(){
      $('.box_archive_blog').each(function(index, el) {
        $item = $(this).find('.bloglist_box01');
        itemLen = $item.length;

        for( var i = -1, len = Math.ceil( itemLen / rows); ++ i < len; ){
          var itemArray = [];
          for(var j = -1; ++ j < rows;){
            itemArray.push( i * rows + j );
          }
          setItemColumn(itemArray);
        }
      });
    }

    function setItemColumn(itemNum){
      var txtMaxHeight = 0,
          txtMaxTagHeight = 0;
      for( var i = 0; i < itemNum.length; i++){
        txtMaxHeight = $item.eq(itemNum[i]).height() > txtMaxHeight ? $item.eq(itemNum[i]).height() : txtMaxHeight;
        txtMaxTagHeight = $item.eq(itemNum[i]).find(".blog_idx_info").height() > txtMaxTagHeight ? $item.eq(itemNum[i]).find(".blog_idx_info").height() : txtMaxTagHeight;
      }
      for(i = 0; i < itemNum.length; i++){
        $item.eq(itemNum[i]).height(txtMaxHeight);
        $item.eq(itemNum[i]).find(".blog_idx_info").height(txtMaxTagHeight);
      }
    }

    function setColor() {
        var $wrap_color = $('.box_link');

        var
           cat_color = $wrap_color.data('color-code');

           $wrap_color.each(function(index, obj){

              var cat_color = $(this).data('color-code'),
                  rgb_code = hexToRgb(cat_color),
                  cat_color_class = cat_color.replace('#','');

              var border_color = '.blog-cat-' + cat_color_class + '.bloglist_box01',
                  bg_time = '.blog-cat-' + cat_color_class + ' .blog_time';

              var $border_blog = $(border_color),
                  $bg_time = $(bg_time),
                  str_border = '3px solid ' + cat_color ;

              var
                  $spec = '.blog-cat-' + cat_color_class,
                  hover_override = "<style>"+ $spec +".bloglist_box01:hover:after{ border: 7px solid "+ cat_color + "!important; }</style>",
                  blog_list_before = "<style>"+ $spec +".bloglist_box01 .blog_inew:before { background:"+ cat_color + "!important; }</style>",
                  blog_list_after = "<style>"+ $spec +".bloglist_box01 .blog_inew:after { background:"+ cat_color + "!important; }</style>";

                  $bg_time.css('background', cat_color);
                  $border_blog.css('border', str_border );

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
