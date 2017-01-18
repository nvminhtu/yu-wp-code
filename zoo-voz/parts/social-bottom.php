<div id="social_share" class="clearfix">
  <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6&appId";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
  	   <ul id="so_like">

      <li><div class="fb-share-button" data-href="<?php get_permalink(); ?>" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php get_permalink(); ?>">Share</a></div></li>
        <li>
          <a href="http://twitter.com/share" class="twitter-share-button" data-text="Share post" data-count="horizontal" data-lang="ja" data-url="<?php get_permalink(); ?>">ツイート</a><script type="text/javascript" charset="utf-8" src="http://platform.twitter.com/widgets.js"></script>
          </li>
      
        <li><!-- #twitter -->
          <script type="text/javascript"
                src="//jsoon.digitiminimi.com/js/widgetoon.js"></script>
                <a href="http://twitter.com/share"
           class="twitter-share-buttoon"
           data-url="<?php the_permalink(); ?>"
           data-text="<?php the_title(); ?>"
           data-count="vertical"
           data-lang="ja">ツイート</a>
          <script> widgetoon_main(); </script>
        <!-- end twitter --></li>
        <li><!-- #hatena -->
          <a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" 
          data-hatena-bookmark-title="<?php the_title(); ?>" 
          data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" 
          title="<?php the_title(); ?>">
          <img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="<?php the_title(); ?>" width="20" height="20" style="border: none;" /></a>
          <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
        <!-- end hatena --></li>

        <li><!-- #google plus -->
          <!-- input to head or before body -->
          <script src="https://apis.google.com/js/platform.js" async defer>
            {lang: 'ja'}
          </script>
          <!-- Đặt thẻ này vào nơi bạn muốn nút chia sẻ kết xuất. -->
          <div class="g-plusone" data-size="tall" data-callback="plusone_vote"></div>
        <!-- end google plus --></li>
      </ul>
</div>