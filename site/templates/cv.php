<?php snippet('header') ?>
<?php snippet('nav_open') ?>
  <a href="<?= $page->parent()->url() ?>" class="menu_item center">
    <div>Curriculum Vitae</div>
  </a>
<?php snippet('nav_close') ?>


<div class="project__header row">
  <div class="column col-right">
   
  </div>
</div>
<div class="column cv-left">
  <a href="mailto:<?= html($page->email()) ?>">Email</a>
  <a href="<?= html($page->twitter()) ?>">Twitter</a>
  <a href="<?= html($page->instagram()) ?>">Instagram</a>
 <a href="#" class="download">Download</a>
</div>
<?php if($page->cv_text()): ?>
  <div class="column cv-right">
    <?= $page->cv_text()->kirbytext() ?>
  </div>
<?php endif ?>

<?php snippet('footer') ?>