<?php snippet('header') ?>
<?php snippet('nav') ?>
<div class="slide-title">
  <span class='slide__counter'>
    <a href="<?= $url_previous ?>">
      <?= $slide_num ?>
    </a>
     / 
    <a href="<?= $url_next ?>">
      <?= $total_slides ?>
    </a>
  </span>
  <a href="<?= $project->url() ?>" >
    <?= $project->title() ?>
  </a>
</div>

<div class="project-wrapper">
  <div class="slide__image">
    <?php if($image = $page->slide_image()->toFile()->resize(1500)): ?>
      <img src="<?= $image->url() ?>" alt="">
    <?php endif ?>
    <a class="previous" href="<?= $url_previous ?>">
      <div class="page left"></div>
    </a>

    <a class="next" href="<?= $url_next ?>">
      <div class="page right"></div>
    </a>
  </div>
  <?php if($page->slide_description()): ?>
    <div class="description">
      <?= html($page->slide_description()) ?>
    </div>
  <?php endif ?>
</div>



<?php snippet('footer') ?>