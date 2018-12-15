<?php if (empty($content)): ?>
  <div class="mt-4">
  <?php $language->p('No pages found') ?>
  </div>
<?php endif ?>
<?php foreach ($content as $page): ?>

  <!-- Post -->
  <article class="page">

    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin'); ?>

    <!-- Post header -->
    <header>
      <a href="<?php echo $page->permalink() ?>">
        <h2><?php echo $page->title() ?></h2>
      </a>
      <?php if( $page->coverImage() ) { ?>
        <img src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->slug() ?>">
      <?php } ?>
      <div class="publish-date">
        <span class="month"><?php echo $page->date("M"); ?></span>
        <span class="day"><?php echo $page->date("d"); ?></span>
        <span class="year"><?php echo $page->date("Y"); ?></span>
      </div>
    </header>

    <!-- Post body -->
    <?php echo $page->contentBreak(); ?>

    <!-- "Read more" button -->
    <?php if ($page->readMore()): ?>
    <a href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?></a>
    <?php endif ?>

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
<?php endforeach ?>

<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1): ?>
<nav class="paginator">
  <ul class="pagination flex-wrap">

    <!-- Previous button -->
    <?php if (Paginator::showPrev()): ?>
    <li class="page-item mr-2">
      <a class="page-link" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#8592; <?php echo $L->get('Previous'); ?></a>
    </li>
    <?php endif ?>

    <!-- Home button -->
    <li class="page-item <?php if (Paginator::currentPage()==1) echo 'disabled' ?>">
      <a class="page-link" href="<?php echo Theme::siteUrl() ?>">Home</a>
    </li>

    <!-- Next button -->
    <?php if (Paginator::showNext()): ?>
    <li class="page-item ml-2">
      <a class="page-link" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> &#8594;</a>
    </li>
    <?php endif ?>

  </ul>
</nav>
<?php endif ?>
