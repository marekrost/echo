<footer id="site-footer">
  <div class="row">
    <div class="col-md-12">
      <p><?php echo $site->footer(); ?><br />
         <?php if ($plugins['all']['pluginRSS']->installed()):?><a href="<?php echo Theme::rssUrl(); ?>">RSS Feed</a> &#124; <?php endif ?>
         Powered by <img class="mini-logo" src="<?php echo DOMAIN_THEME_IMG.'favicon.png'; ?>"/><a target="_blank" href="https://www.bludit.com">Bludit</a>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">

      <!-- Social Networks -->
      <?php foreach (Theme::socialNetworks() as $key=>$label): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $site->{$key}(); ?>" target="_blank">
          <img class="d-none d-sm-block nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/'.$key.'.svg' ?>" alt="<?php echo $label ?>" />
          <span class="d-inline d-sm-none"><?php echo $label; ?></span>
        </a>
      </li>
      <?php endforeach; ?>

    </div>
  </div>
</footer>
