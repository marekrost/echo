<!-- Post -->
<article class="page">

  <!-- Load Bludit Plugins: Page Begin -->
  <?php Theme::plugins('pageBegin'); ?>

  <!-- Post header -->
  <header>
    <h1><a href="<?php echo $page->permalink() ?>"><?php echo $page->title() ?></a></h1>
    <?php if( $page->coverImage() ) { ?>
      <img src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->slug() ?>">
    <?php } ?>
    <div class="publish-date">
      <span class="month"><?php echo mb_substr($page->date("M"), 0, 3); ?></span>
      <span class="day"><?php echo $page->date("d"); ?></span>
      <span class="year"><?php echo $page->date("Y"); ?></span>
    </div>
  </header>

  <!-- Post body -->
  <?php echo $page->content(); ?>

  <!-- Post footer -->
  <footer>
    <?php if ($page->readMore() ) { ?>
      <div class="readmore">
        <a href="<?php echo $page->permalink() ?>">
          <i class="icon-arrow-down"></i> <?php echo $Language->get('Read more') ?>
        </a>
      </div>
    <?php } ?>
  </footer>

  <!-- Load Bludit Plugins: Page End -->
  <?php Theme::plugins('pageEnd'); ?>

</article>
