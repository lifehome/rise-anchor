<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

  <meta name="description" content="<?php echo site_description(); ?>">

  <link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">

  <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
  <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Load Google Webfont Lato -->
  <script type="text/javascript">
    WebFontConfig = {
    google: { families: [ 'Lato:300,400,700,400italic:latin' ] }
    };
    (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script src="<?php echo theme_url('/js/main.js'); ?>"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo current_url(); ?>">
    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">

  <?php if(customised()): ?>
    <!-- Custom CSS -->
    <style><?php echo article_css(); ?></style>

    <!--  Custom Javascript -->
    <script><?php echo article_js(); ?></script>
  <?php endif; ?>
  </head>
  <body class="<?php echo body_class(); ?>">

  <header>
    <nav class="primary wrap">
    <h3><a href="<?php echo base_url(); ?>" class="logo"><?php echo site_name(); ?><span class="vdivider"> | </span><small><?php echo site_description(); ?></small></a></h3>
    <a href="#" class="trigger"><img src="<?php echo theme_url('/img/navicon.png'); ?>" alt="" height="30" width="30"> </a>

    <?php if(has_menu_items()): ?>
    <ul id="sitemenu">
      <?php while(menu_items()): ?>
      <li <?php echo (menu_active() ? 'class="active"' : ''); ?>><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>
    </nav>
  </header>