<!DOCTYPE html>
<html class="no-js" lang="<?php echo $Site->language() ?>">
<head>
  <?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>
  <?php Theme::plugins('siteBodyBegin') ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <header id="site-header">
          <h1 class="intro-lead"><a class="home-title" href="<?php echo $Site->url(); ?>"><?php echo $Site->title(); ?></a></h1>
          <p class=""><?php echo $Site->description(); ?></p>
        </header>
        <?php include(THEME_DIR_PHP.'sidebar.php'); ?>
      </div>
      <div class="col-md-9 col-lg-8">
        <?php
          if ($WHERE_AM_I=='page') {
            include(THEME_DIR_PHP.'page.php');
          } else {
            include(THEME_DIR_PHP.'home.php');
          }
        ?>
        <footer id="site-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1 text-center">
                <p><?php echo $Site->footer(); ?><br>Powered by <a href="https://www.bludit.com" target="_blank">BLUDIT</a></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <?php Theme::plugins('siteBodyEnd'); ?>
</body>
</html>
