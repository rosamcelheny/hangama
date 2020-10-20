<?php snippet('header') ?>
<?php snippet('nav') ?>

<div class="project__header row">
  <div class="column right">
    Overview <?= $page->title(); ?>
  </div>
</div>

<?php foreach($page->children() as $slide): ?>
  <a href="<?= $slide->url() ?>" data-color="<?= $slide->color() ?>" class="slide-link">
    <div class="thumbnail">
      <?php if($image = $slide->image()): ?>
        <!-- TO DO: Get thumbnails working here, not full-size images -->
        <img src="<?= $image->url() ?>" alt="">
      <?php endif ?>
    </div>
   <div class="thumbnail--number">
      <?= $slide->num() ?>
    </div>
  </a>
<?php endforeach ?>

<?php snippet('footer') ?>