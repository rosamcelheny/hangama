<?php snippet('header') ?>
<?php snippet('nav') ?>

<div class="project__header row">
  <div class="column left">
    <span class='slide__counter'>
      <?= $slide_num ?> / <?= $total_slides ?>
    </span>
    <?= $project->title() ?>
  </div>
</div>

<div class="slide__image">
  <?php if($image = $page->image()): ?>
    <!-- TO DO: Get thumbnails working here, not full-size images -->
    <img src="<?= $image->url() ?>" alt="">
  <?php endif ?>
</div>

<?php snippet('footer') ?>