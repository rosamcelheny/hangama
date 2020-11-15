<?php snippet('header') ?>
<?php snippet('nav_open') ?>
<?php snippet('nav_close') ?>

<div class="homepage-wrapper">
  <div class="project-wrapper">
    <div class="slide__image">
    <!-- <div class="hp-image"> -->
    <?php if($image = $page->bg_image()->toFile()->resize(1500)): ?>
      <img src="<?= $image->url() ?>" alt="">
    <?php endif ?>
    </div>
  </div>


  <div class="hp-left">
    <?php if($caption = $page->caption()): ?>
      <?= $page->caption()->kirbytext() ?>
    <?php endif ?>
  </div>
  <div class="column col-right hp-right">
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

<?php snippet('footer') ?>