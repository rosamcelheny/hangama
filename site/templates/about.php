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
      <a href="<?= $page->file()->url() ?>" target="blank" class="download">Download</a>
    </div>
  </div>
  <div class="cv-right">
    <?= $page->cv_text()->kirbytext() ?>
    <div class='credit'>
      Website designed by <a href="https://orysiazabeida.com/" target="_blank">Orysia Zabeida</a>. Programmed by <a href="https://rosamcelheny.com/" target="_blank">Rosa McElheny</a>.
    </div>
  </div>
</div>

<?php snippet('footer') ?>