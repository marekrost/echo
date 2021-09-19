<?php

// Nette - Latte str length function
function strLength(string $s): int {
  return function_exists('mb_strlen')
      ? mb_strlen($s, 'UTF-8')
      : strlen(utf8_decode($s));
}

// Nette - Latte substring function

function substring($s, int $start, int $length = null): string {
  $s = (string) $s;
  if ($length === null) {
    $length = strLength($s);
  }
  if (function_exists('mb_substr')) {
    return mb_substr($s, $start, $length, 'UTF-8');
  }
  return iconv_substr($s, $start, $length, 'UTF-8');
}

// Nette - Latte truncate filter function
function truncate($s, int $length, string $append = "\u{2026}"): string {
  $s = (string) $s;
  if (strLength($s) > $length) {
    $length -= strLength($append);
    if ($length < 1) {
      return $append;
    } elseif (preg_match('#^.{1,' . $length . '}(?=[\s\x00-/:-@\[-`{-~])#us', $s, $matches)) {
      return $matches[0] . $append;
    } else {
      return substring($s, 0, $length) . $append;
    }
  }
  return $s;
}

?>

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
      <?php if( $page->coverImage()): ?>
        <img src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->slug() ?>">
      <?php endif ?>
      <div class="publish-date">
        <span class="month"><?php echo mb_substr($page->date("M"), 0, 3); ?></span>
        <span class="day"><?php echo $page->date("d"); ?></span>
        <span class="year"><?php echo $page->date("Y"); ?></span>
      </div>
    </header>
    
    <!-- Post body -->
    <?php
      if ($page->readMore() || $WHERE_AM_I === 'home') {
        echo $page->contentBreak();
      } else {
        $page_content = 
            Text::removeLineBreaks(
                    Text::removeHTMLTags($page->content()));
        echo truncate($page_content, 400);
      }
    ?>

    <!-- Post footer -->
    <footer class="mt-3">
      <a class="btn btn-primary" href="<?php echo $page->permalink(); ?>">
        <?php echo $L->get('Read more'); ?> &raquo;
      </a>
    </footer>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>

  </article>
<?php endforeach ?>

<!-- Pagination -->
<?php 
  if (Paginator::numberOfPages()>1) {
    echo Paginator::bootstrap_html(false,false,true);
  }
?>
