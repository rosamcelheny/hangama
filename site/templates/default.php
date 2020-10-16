<?php snippet('header') ?>
<?php snippet('nav') ?>

<!-- a list of all projects.
should show year and title
link to project first slide -->
<?php
  $projects = $pages->template("project");
  foreach($projects as $project): 
?>
  <div>
    <a href="<?= $project->url() ?>">
      <?= html($project->title()) ?>
    </a>
  </div>
<?php endforeach ?>

<?php snippet('footer') ?>