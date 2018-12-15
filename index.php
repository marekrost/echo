<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
  <?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>

  <!-- Load Bludit Plugins: Site Body Begin -->
  <?php Theme::plugins('siteBodyBegin'); ?>

  <!-- Content -->
  <div class="container-fluid">
    <div class="row">

      <!-- Left Sidebar -->
      <div id="site-sidebar" class="col-md-4 col-lg-3 pr-md-4">
        <?php include(THEME_DIR_PHP.'sidebar.php'); ?>
      </div>

      <!-- Blog Posts -->
      <div id="site-content" class="col-md-8 col-lg-9 px-5 pt-4">
      <?php
        if ($WHERE_AM_I == 'page') {
          include(THEME_DIR_PHP.'page.php');
        } else {
          include(THEME_DIR_PHP.'home.php');
        }
      ?>

      <!-- Footer -->
      <?php include(THEME_DIR_PHP.'footer.php'); ?>

      </div>

    </div>
  </div>

  <!-- Javascript -->
  <?php
    // Include Jquery file from Bludit Core
    echo Theme::jquery();

    // Include javascript Bootstrap file from Bludit Core
    echo Theme::jsBootstrap();
  ?>

  <!-- Load Bludit Plugins: Site Body End -->
  <?php Theme::plugins('siteBodyEnd'); ?>

</body>
</html>
