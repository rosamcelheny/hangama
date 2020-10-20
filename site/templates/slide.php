<?php snippet('header') ?>
<?php snippet('nav') ?>

<div class="project__header row">
  <div class="column right">
    <span class='slide__counter'>
      <?= $slide_num ?> / <?= $total_slides ?>
    </span>
    <?= $project->title() ?>
  </div>
</div>

<div class="slide__image">
  <?php if($image = $page->image()): ?>
    <img src="<?= $image->url() ?>" alt="">
  <?php endif ?>
  <?php if($page->slide_description()): ?>
    <div class="description">
      <?= html($page->slide_description()) ?>
    </div>
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

<?php snippet('footer') ?>