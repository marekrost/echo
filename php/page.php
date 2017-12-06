<!-- Section -->
<section class="content">
   <article class="page">
     <div class="publish-date">
       <?php $published = strtotime($page->date()); ?>
       <div class="month"><?php echo strftime("%b", $published); ?></div>
       <div class="day"><?php echo strftime("%d", $published); ?></div>
       <div class="year"><?php echo strftime("%Y", $published); ?></div>
     </div>
     <?php Theme::plugins('pageBegin'); ?>
     <header>
       <a href="<?php echo $page->permalink() ?>">
         <h2><?php echo $page->title() ?></h2>
       </a>
       <?php if( $page->coverImage() ) { ?>
         <img src="<?php echo $page->coverImage(); ?>" alt="<?php echo $page->slug(); ?>">
       <?php } ?>
     </header>
    <?php echo $page->content(); ?>
    <?php Theme::plugins('pageEnd'); ?>
  </article>
</section>
