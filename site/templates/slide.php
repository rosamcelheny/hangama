<?php snippet('header') ?>
<nav class='header'>
  <a href="<?= $site->url() ?>" class="menu_item home">
    <h1><?= $site->title(); ?></h1>
  </a>
  <div class="menu_item work">
    <h1 class="work-label">Work</h1>
    <div class="project-list">
      <?php
        $projects = $pages->template("project");
        foreach($projects as $project): 
      ?>
        <div class="project--title">
          <a href="<?= $project->children()->first()->url() ?>" data-color="<?= $project->color() ?>" class="project-link">
            <h2>
              <?= html($project->year()) ?>
              <?= html($project->title()) ?>
            </h2>
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
      <h1>
        <?= $page->parent()->title() ?>
      </h1>
    </a>
  </div>
  <a href="<?= $pages->find('about')->url() ?>" class="menu_item about">
    <h1>About</h1>
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