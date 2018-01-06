<!DOCTYPE html>
<html lang="<?php echo $Site->language(); ?>">
<head>
  <?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>
  <?php Theme::plugins('siteBodyBegin') ?>

  <div class="container-fluid">
    <div class="row">
      <div id="site-sidebar" class="col-md-4 col-lg-3">
        <?php include(THEME_DIR_PHP.'sidebar.php'); ?>
      </div>
      <div id="site-content" class="col-md-8 col-lg-9">
        <?php
          if ($WHERE_AM_I=='page') {
            include(THEME_DIR_PHP.'page.php');
          } else {
            include(THEME_DIR_PHP.'home.php');
          }
        ?>
        <footer id="site-footer">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
              <p><?php echo $Site->footer(); ?><br>Powered by <a href="https://www.bludit.com" target="_blank">BLUDIT</a></p>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <?php
    Theme::plugins('siteBodyEnd');

    echo Theme::js('js/jquery-3.2.1/jquery.min.js');
    echo Theme::js('css/bootstrap-3.3.7/js/bootstrap.min.js');
  ?>

</body>
</html>
