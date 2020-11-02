<?php snippet('header') ?>

<?php snippet('nav_open') ?>
<?php snippet('nav_close') ?>

<div class='about-container'>
  <div class="cv-left">
    <div class="cv-top">
      <div class="bio">
        <a href="mailto:<?= html($page->email()) ?>">Email</a>
        <a href="<?= html($page->twitter()) ?>">Twitter</a>
        <a href="<?= html($page->instagram()) ?>">Instagram</a>
      </div>
      <?php if($page->bio()): ?>
        <div class="bio">
          <?= html($page->bio()) ?>
        </div>
      <?php endif ?>
    </div>
    <a href="<?= $page->file()->url() ?>" target="blank" class="download">Download</a>
  </div>
  <?php if($page->cv_text()): ?>
    <div class="cv-right">
      <?= $page->cv_text()->kirbytext() ?>
    </div>
  <?php endif ?>
</div>

<?php snippet('footer') ?>