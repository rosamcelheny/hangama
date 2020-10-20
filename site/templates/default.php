<?php snippet('header') ?>
<?php snippet('nav') ?>

<div class="row">
  <div class="column right">
    <?php
      $projects = $pages->template("project");
      foreach($projects as $project): 
    ?>
      <div>
        <a href="<?= $project->children()->first()->url() ?>" data-color="<?= $project->color() ?>" class="project-link">
          <?= html($project->year()) ?>
          <?= html($project->title()) ?>
        </a>
      </div>
    <?php endforeach ?>
  </div>
</div>
<?php snippet('footer') ?>