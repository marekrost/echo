<nav>
  <div class="row mr-md-0">
    <div class="col-sm-8 col-md-12 text-md-center mt-3 mb-3 mt-md-5">
      <img src="<?php echo DOMAIN_THEME_IMG.'profile-icon.png'; ?>" alt="<?php echo $site->title() ?>" width="150" class="mb-4 mx-auto d-sm-none d-md-block" />
      <a class="navbar-brand" href="<?php echo Theme::siteUrl() ?>">
        <?php if ($WHERE_AM_I == 'page'): ?>
          <h2><?php echo $site->title() ?></h2>
        <?php else: ?>
          <h1><?php echo $site->title() ?></h1>
        <?php endif ?>
      </a>
      <p class="d-sm-none d-md-block"><?php echo $site->slogan(); ?></p>
      <p class="d-sm-none d-md-block"><?php echo $site->description(); ?></p>
    </div>
    <div class="col-sm-4 d-md-none text-right mt-3 mb-3">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseSidebar" aria-expanded="false" aria-controls="collapseExample">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>

  <div class="collapse d-md-block" id="collapseSidebar">
    <div class="col-md-12">

      <!-- Static pages -->
      <ul class="navbar-nav ml-auto">
        <?php foreach ($staticContent as $staticPage): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
        </li>
        <?php endforeach ?>
      </ul>

      <!-- Load Bludit Plugins: Site Sidebar -->
      <?php Theme::plugins('siteSidebar') ?>

    </div>
  </div>
</nav>
