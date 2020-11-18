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
  <a href="<?= $pages->find('about')->url() ?>" class="menu_item about">
    <div>About</div>
  </a>
</nav>