<?php snippet('header') ?>
<?php snippet('nav') ?>

<div class="homepage-wrapper">
  <div class="project-wrapper">
    <div class="slide__image">
    <!-- <div class="hp-image"> -->
    <?php if($image = $page->bg_image()->toFile()->resize(1500)): ?>
      <img src="<?= $image->url() ?>" alt="">
    <?php endif ?>
    </div>
    <div class="description">
    <?php if($caption = $page->caption()): ?>
      <?= $page->caption()->kirbytext() ?>
    <?php endif ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>