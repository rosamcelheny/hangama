<?php

return function ($page) {

  // get project
  $project = $page->parent();

  // get total number of slides
  $total_slides = $page->siblings()->count();

  // get slide number
  $slide_num = $page->num();

  // pass variables to the template
  return [
    'project' => $project,
    'total_slides' => $total_slides,
    'slide_num' => $slide_num
  ];

};