<?php

return function ($page) {

  // get project
  $project = $page->parent();

  // get total number of slides
  $total_slides = $page->siblings()->count();

  // get slide number
  $slide_num = $page->num();

  // next + previous links
  $url_previous;
  $url_next;
  if ($page->hasPrevListed()) {
    $url_previous = $page->prevListed()->url();
  } else {
    $url_previous = $page->parent()->url();
  }
  
  if ($page->hasNextListed()) {
    $url_next =  $page->nextListed()->url();
  } else {
    $url_next =  $page->parent()->url();
  }
  
  // pass variables to the template
  return [
    'project' => $project,
    'total_slides' => $total_slides,
    'slide_num' => $slide_num,
    'url_next' => $url_next,
    'url_previous' => $url_previous
  ];

};