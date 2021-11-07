<?php snippet('header') ?>
<?php snippet('nav') ?>

<div class='about-container'>
  <div class="cv-left">
    <div class="cv-top">
      <?php if($page->bio()): ?>
        <div class="bio">
          <?= html($page->bio()) ?>
        </div>
      <?php endif ?>
    </div>
    <div>
      <a href="mailto:<?= html($page->email()) ?>">Email</a>
      <a href="<?= html($page->twitter()) ?>">Twitter</a>
      <a href="<?= html($page->instagram()) ?>">Instagram</a>
      <?php if ($pdf = $page->cv_pdf()->toFile()): ?>
        <a href="<?= $page->cv_pdf()->toFile()->url() ?>" target="blank" class="download">Download CV</a>
      <?php endif ?>
    </div>
  </div>
  <div class="cv-right">
    <?= $page->cv_text()->kirbytext() ?>
  </div>
</div>

<?php snippet('footer') ?>