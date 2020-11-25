<?php snippet('header') ?>
<?php snippet('nav') ?>

<div class="project-wrapper">
  <div class="slide__image">
  <?php if($image = $page->bg_image()): ?>
    <img class="asyncImage" src="<?= $image->toFile()->resize(50)->url() ?>" data-src="<?= $image->toFile()->resize(1500)->url() ?>">
  <?php endif ?>
  </div>
  <div class="description">
  <?php if($caption = $page->caption()): ?>
    <?= $page->caption()->kirbytext() ?>
  <?php endif ?>
  </div>
</div>

<?php snippet('footer') ?>