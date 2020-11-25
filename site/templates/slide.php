<?php snippet('header') ?>
<nav class='header'>
  <a href="<?= $site->url() ?>" class="menu_item home">
    <div><?= $site->title(); ?></div>
  </a>
  <div class="menu_item work">
    <div class="work-label">Work</div>
    <div class="project-list">
      <?php
        $projects = $pages->template("project");
        foreach($projects as $project): 
      ?>
        <div class="project--title">
          <a href="<?= $project->children()->first()->url() ?>" data-color="<?= $project->color() ?>" class="project-link">
            <?= html($project->year()) ?>
            <?= html($project->title()) ?>
          </a>
        </div>
      <?php endforeach ?>
    </div>
  </div>
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
    <a href="<?= $page->parent()->url() ?>" >
      <?= $page->parent()->title() ?>
    </a>
  </div>
  <a href="<?= $pages->find('about')->url() ?>" class="menu_item about">
    <div>About</div>
  </a>
</nav>



<div class="project-wrapper">
  <div class="slide__image">

    <?php if($image = $page->slide_image()): ?>
      <img class="asyncImage" src="<?= $image->toFile()->resize(50)->url() ?>" data-src="<?= $image->toFile()->resize(1500)->url() ?>">
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