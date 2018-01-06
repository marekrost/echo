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
        <?php $published = strtotime($page->date()); ?>
        <span class="month"><?php echo strftime("%b", $published); ?></span>
        <span class="day"><?php echo strftime("%d", $published); ?></span>
        <span class="year"><?php echo strftime("%Y", $published); ?></span>
      </div>
    </header>
    <?php echo $page->content(); ?>
    <?php Theme::plugins('pageEnd'); ?>
  </article>
</section>
