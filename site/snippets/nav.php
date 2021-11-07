<nav class='header'>
  <a href="<?= $site->url() ?>" class="menu_item home">
    <h1>
      <?= $site->title(); ?>
        
      </h1>
  </a>
  <div class="menu_item work">
    <h1 class="work-label">Work</h1>
    <div class="project-list">
      <?php
        $projects = $pages->template("project");
        foreach($projects as $project): 
      ?>
        <h1 class="project--title">
          <a href="<?= $project->children()->first()->url() ?>" data-color="<?= $project->color() ?>" class="project-link"><h2>
            <?= html($project->year()) ?>
            <?= html($project->title()) ?>
          </h2>
          </a>
        </h1>
      <?php endforeach ?>
    </div>
  </div>
  <a href="<?= $pages->find('about')->url() ?>" class="menu_item about">
    <h1>About</h1>
  </a>
</nav>