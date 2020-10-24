<?php snippet('header') ?>

<?php snippet('nav_open') ?>
  <a href="<?= $page->children()->first()->url() ?>" class="menu_item center">Curriculum Vitae</a>
<?php snippet('nav_close') ?>

<?php if($page->bio()): ?>
  <div class="description bio">
    <?= html($page->bio()) ?>
  </div>
<?php endif ?>

<?php snippet('footer') ?>