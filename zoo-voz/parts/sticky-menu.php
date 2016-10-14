<?php if(is_home()||is_front_page()) {
    $menu_class = " fixed";
} else {
    $menu_class = '';
} ?>

<div id="sticky_menu_header" class="clearfix<?php echo $menu_class; ?>">
  <div class="inner clearfix">
    <div class="sticky_menu_top">
      <p id="stiky_logo"><a href="<?php bloginfo('siteurl'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo_sticky.png" alt="" /></a></p>
      <div id="btn_menu"><a href="javascript:void(0)">
        <div id="nav-icon"> <span></span> <span></span> <span></span> <span></span> </div>
        </a></div>
      <!-- nav for PC -->
      <?php
      $arg_sticky = array (
                        'theme_location' => 'sticky-menu-pc',
                        'menu_id' => 'list_menutop_sticky'
                      );
        wp_nav_menu($arg_sticky);
      ?>
      <!-- nav for blog inner --> 
      
      <div id="blog_menu_top">
        <div class="list_cate_menu clearfix">
          <div class="list_cate_menu_inner clearfix">
            <ul id="list_cate_menu01">
              <li><a class="is-active" href="#" role="#cate01">SEO対策</a></li>
              <li><a href="#" role="#cate02">インターネット広告</a></li>
              <li><a href="#" role="#cate03">SEO対策1</a></li>
              <li><a href="#" role="#cate04">SEO対策2</a></li>
              <li><a href="#" role="#cate05">SEO対策3</a></li>
              <li><a href="#" role="#cate06">SEO対策4</a></li>
            </ul>
          </div>
        </div>
        <div class="list_single_menu clearfix">
          <div class="list_single_menu_inner clearfix"> 
            <!-- cate 01 -->
            <div id="cate01" class="listsgPost clearfix">
              <ul>
                <li> <a href="#" class="header-dropdown-item"> <img class="header-dropdown-image" src="http://www.groovoost.com/wp-content/themes/groovoost/images/dummy220x130.jpg" >
                  <p class="header-dropdown-title">ダミーダミーダミーダミーダミーダミーダミーダミー</p>
                  </a> </li>
                <li> <a href="#" class="header-dropdown-item"> <img class="header-dropdown-image" src="http://www.groovoost.com/wp-content/themes/groovoost/images/dummy220x130.jpg" >
                  <p class="header-dropdown-title">特定の国からのアクセスを除外すスを除外する </p>
                  </a> </li>
                <li> <a href="#" class="header-dropdown-item"> <img class="header-dropdown-image" src="http://www.groovoost.com/wp-content/themes/groovoost/images/dummy220x130.jpg" >
                  <p class="header-dropdown-title">特定の国からのアクセスを除外すスを除外する </p>
                  </a> </li>
                <li> <a href="#" class="header-dropdown-item"> <img class="header-dropdown-image" src="http://www.groovoost.com/wp-content/themes/groovoost/images/dummy220x130.jpg" >
                  <p class="header-dropdown-title">特定の国からのアクセスを除外すスを除外する </p>
                  </a> </li>
                <li> <a href="#" class="header-dropdown-item"> <img class="header-dropdown-image" src="http://www.groovoost.com/wp-content/themes/groovoost/images/dummy220x130.jpg" >
                  <p class="header-dropdown-title">特定の国からのアクセスを除外すスを除外する </p>
                  </a> </li>
                <li>
                  <div class="header-dropdown-more">
                    <p class="btn btn01 btn_hblue"><a href="#"><span>もっと見る</span></a></p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- //cate 01 --> 
            
            <!-- cate 02 -->
            <div id="cate02" class="listsgPost clearfix">
              <ul>
                <li> <a href="#" class="header-dropdown-item"> <img class="header-dropdown-image" src="http://www.groovoost.com/wp-content/themes/groovoost/images/dummy220x130.jpg" >
                  <p class="header-dropdown-title">ダミーダミーダミーダミーダミーダミーダミーダミー</p>
                  </a> </li>
                <li>
                  <div class="header-dropdown-more">
                    <p class="btn btn01 btn_hblue"><a href="#"><span>もっと見る</span></a></p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- //cate 02 --> 
            
            <!-- cate 03 -->
            <div id="cate03" class="listsgPost clearfix">
              <ul>
                <li> <a href="#" class="header-dropdown-item"> <img class="header-dropdown-image" src="http://www.groovoost.com/wp-content/themes/groovoost/images/dummy220x130.jpg" >
                  <p class="header-dropdown-title">ダミーダミーダミーダミーダミーダミーダミーダミー</p>
                  </a> </li>
                <li>
                  <div class="header-dropdown-more">
                    <p class="btn btn01 btn_hblue"><a href="#"><span>もっと見る</span></a></p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- //cate 03 --> 
            <!-- cate 04 -->
            <div id="cate04" class="listsgPost clearfix">
              <ul>
                <li> <a href="#" class="header-dropdown-item"> <img class="header-dropdown-image" src="http://www.groovoost.com/wp-content/themes/groovoost/images/dummy220x130.jpg" >
                  <p class="header-dropdown-title">ダミーダミーダミーダミーダミーダミーダミーダミー</p>
                  </a> </li>
                <li>
                  <div class="header-dropdown-more">
                    <p class="btn btn01 btn_hblue"><a href="#"><span>もっと見る</span></a></p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- //cate 04 --> 
            <!-- cate 05 -->
            <div id="cate05" class="listsgPost clearfix">
              <ul>
                <li> <a href="#" class="header-dropdown-item"> <img class="header-dropdown-image" src="http://www.groovoost.com/wp-content/themes/groovoost/images/dummy220x130.jpg" >
                  <p class="header-dropdown-title">ダミーダミーダミーダミーダミーダミーダミーダミー</p>
                  </a> </li>
                <li>
                  <div class="header-dropdown-more">
                    <p class="btn btn01 btn_hblue"><a href="#"><span>もっと見る</span></a></p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- //cate 05 --> 
            <!-- cate 06 -->
            <div id="cate06" class="listsgPost clearfix">
              <ul>
                <li> <a href="#" class="header-dropdown-item"> <img class="header-dropdown-image" src="http://www.groovoost.com/wp-content/themes/groovoost/images/dummy220x130.jpg" >
                  <p class="header-dropdown-title">ダミーダミーダミーダミーダミーダミーダミーダミー</p>
                  </a> </li>
                <li>
                  <div class="header-dropdown-more">
                    <p class="btn btn01 btn_hblue"><a href="#"><span>もっと見る</span></a></p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- //cate 06 --> 
            
          </div>
        </div>
      </div>
      <!-- //nav for blog inner --> 
      
      <!-- nav for PC --> 
      
      <!-- nav for SP -->
      <?php
       $arg_sticky_2 = array (
                        'theme_location' => 'sticky-menu-sp',
                        'menu_id' => 'nav_menu_sp'
                      );
        wp_nav_menu($arg_sticky_2);

      ?>
      
      <!-- nav for SP --> 
    </div>
  </div>
</div>
