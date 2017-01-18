<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="format-detection" content="telephone=no">

<?php
  //include header for each pages
  if(is_front_page()||is_home()){
    include('header-frontpage.php');
  }
  else if(is_page('thank-you')){
	   include('header-page-nomain.php');
  } else {
    include('header-page.php');
  }
?>
