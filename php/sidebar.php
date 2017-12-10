
        <nav class="navbar navbar-default navbar-fixed-side">
          <header id="site-header" class="navbar-header">
            <div class="clearfix">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $Site->url(); ?>"><h1 class="intro-lead"><?php echo $Site->title(); ?></h1></a>
            </div>
            <p class="slogan hidden-xs hidden-sm"><?php echo $Site->slogan(); ?></p>
            <p class="description hidden-xs hidden-sm"><?php echo $Site->description(); ?></p>
          </header>
          <div class="collapse navbar-collapse">
            <?php Theme::plugins('siteSidebar') ?>
          </div>
        </nav>
