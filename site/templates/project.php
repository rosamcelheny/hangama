<?php snippet('header') ?>
<?php snippet('nav_open') ?>
   <div class="menu_item center">
    Overview <?= $page->title(); ?>
  </div>
<?php snippet('nav_close') ?>

<div class="thumbnails">
  <?php foreach($page->children() as $slide): ?>
    <a href="<?= $slide->url() ?>" data-color="<?= $slide->color() ?>" class="slide-link">
      <div class="thumbnail">
        <?php if($image = $slide->image()): ?>
          <!-- TO DO: Get thumbnails working here, not full-size images -->
          <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
      </div>
     <div class="thumbnail--number">
        <?= $slide->num() ?>
      </div>
    </a>
  <?php endforeach ?>
</div>

<?php if($page->description()): ?>
  <div class="description project-description">
    <?= html($page->description()) ?>
  </div>
<?php endif ?>

<?php snippet('footer') ?>