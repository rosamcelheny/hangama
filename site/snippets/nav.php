<nav class='header'>
  <a href="<?= $site->url() ?>" class="menu_item">
    <div><?= $site->title(); ?></div>
  </a>
  <a href="<?= $pages->find('about')->url() ?>" class="menu_item">
    <div>About</div>
  </a>
</nav>