<?php snippet('header') ?>
<?php snippet('nav') ?>
<div class="slide-title">
  Overview <?= $page->title(); ?>
</div>

<div class="project-wrapper">
  <div class="thumbnails">
    <?php foreach($page->children() as $slide): ?>
      <a href="<?= $slide->url() ?>" data-color="<?= $slide->color() ?>" data-number="<?= $slide->num() ?>"class="slide-link">
        <div class="thumbnail">
          <?php if($image = $slide->slide_image()->toFile()->resize(300)): ?>
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
    <?php foreach($page->children() as $slide): ?>
       <div class="description slide-description">
          <?= $slide->slide_description() ?>
        </div>
    <?php endforeach ?>
  <?php endif ?>
</div>

<?php snippet('footer') ?>