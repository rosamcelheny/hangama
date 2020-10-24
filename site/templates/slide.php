<?php snippet('header') ?>
<?php snippet('nav_open') ?>
   <div class="menu_item center">
    <span class='slide__counter'>
      <?= $slide_num ?> / <?= $total_slides ?>
    </span>
    <?= $project->title() ?>
  </div>
<?php snippet('nav_close') ?>

<div class="slide__image">
  <?php if($image = $page->image()): ?>
    <img src="<?= $image->url() ?>" alt="">
  <?php endif ?>

  <?php if ($page->hasPrevListed()): ?>
    <a href="<?= $page->prevListed()->url() ?>">
      <div class="page left"></div>
    </a>
  <?php else: ?>
    <a href="<?= $page->parent()->url() ?>">
      <div class="page left"></div>
    </a>
  <?php endif ?>

  <?php if ($page->hasNextListed()): ?>
    <a href="<?= $page->nextListed()->url() ?>">
      <div class="page right"></div>
    </a>
  <?php else: ?>
    <a href="<?= $page->parent()->url() ?>">
      <div class="page right"></div>
    </a>
  <?php endif ?>
</div>

<?php if($page->slide_description()): ?>
  <div class="description">
    <?= html($page->slide_description()) ?>
  </div>
<?php endif ?>

<?php snippet('footer') ?>