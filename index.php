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
        <header id="site-header">
          <a class="home-title" href="<?php echo $Site->url(); ?>">
            <h1 class="intro-lead"><?php echo $Site->title(); ?></h1>
          </a>
          <p class="slogan"><?php echo $Site->slogan(); ?></p>
          <p class="description"><?php echo $Site->description(); ?></p>
        </header>
        <nav class="navbar navbar-default navbar-fixed-side">
          <?php include(THEME_DIR_PHP.'sidebar.php'); ?>
        </nav>
      </div>
      <div id="site-content" class="col-md-8">
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

  <?php Theme::plugins('siteBodyEnd'); ?>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
