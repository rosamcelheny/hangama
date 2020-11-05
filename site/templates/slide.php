<?php snippet('header') ?>
<?php snippet('nav_open') ?>
   <div class="menu_item center">
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
<?php snippet('nav_close') ?>

<div class="project-wrapper">
  <div class="slide__image">
    <?php if($image = $page->image()): ?>
      <img src="<?= $image->url() ?>" alt="">
    <?php endif ?>
    <a href="<?= $url_previous ?>">
      <div class="page left"></div>
    </a>

    <a href="<?= $url_next ?>">
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