<!-- Section -->
<section class="content">
  <article class="page">
    <?php Theme::plugins('pageBegin'); ?>
    <header>
      <a href="<?php echo $page->permalink() ?>">
        <h2><?php echo $page->title() ?></h2>
      </a>
      <?php if( $page->coverImage() ) { ?>
        <img src="<?php echo $page->coverImage(); ?>" alt="<?php echo $page->slug(); ?>">
      <?php } ?>
      <div class="publish-date">
        <span class="month"><?php echo $page->dateRaw("M"); ?></span>
        <span class="day"><?php echo $page->dateRaw("d"); ?></span>
        <span class="year"><?php echo $page->dateRaw("Y"); ?></span>
      </div>
    </header>
    <?php echo $page->content(); ?>
    <?php Theme::plugins('pageEnd'); ?>
  </article>
</section>
