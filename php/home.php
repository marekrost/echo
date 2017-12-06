<!-- Section -->
<section class="content">
  <?php foreach ($pages as $page): ?>
  <article class="page">
    <div class="publish-date">
      <?php $published = strtotime($page->date()); ?>
      <div class="month"><?php echo strftime("%b", $published); ?></div>
      <div class="day"><?php echo strftime("%d", $published); ?></div>
      <div class="year"><?php echo strftime("%Y", $published); ?></div>
    </div>
    <?php Theme::plugins('pageBegin') ?>
    <header>
      <a href="<?php echo $page->permalink() ?>">
        <h2><?php echo $page->title() ?></h2>
      </a>
      <?php if( $page->coverImage() ) { ?>
        <img src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->slug() ?>">
      <?php } ?>
    </header>
    <?php echo $page->contentBreak() ?>
    <footer>
      <?php if ($page->readMore() ) { ?>
        <div class="readmore">
          <a href="<?php echo $page->permalink() ?>">
            <i class="icon-arrow-down"></i> <?php echo $Language->get('Read more') ?>
          </a>
        </div>
      <?php } ?>
    </footer>
    <?php Theme::plugins('pageEnd') ?>
  </article>
  <?php endforeach ?>
</section>

<!-- Pagination -->
<ul class="pagination">
<?php
if (Paginator::showPrev()) {
        echo '<li><a href="'.Paginator::prevPageUrl().'">'.$L->get('Previous page').'</a></li>';
}
if (Paginator::showNext()) {
        echo '<li><a href="'.Paginator::nextPageUrl().'" class="float-right">'.$L->get('Next page').'</a></li>';
}
?>
</ul>
