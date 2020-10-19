<?php

return [
    'debug' => true
];

return [
    'languages' => true,
];

// return [


// ];

// return [
//   'routes' => [

//     'pattern' => '(:project)',
//     'language' => '*',
//     'action'  => function($language, $id) {
//       $page = page($id);

//       if ($page->hasListedChildren()) {
//         if ($firstChild = $page->children()->listed()->first()) {
//           return site()->visit($firstChild, $language);
//         }
//       }

//       $this->next();
//     }
//   ]
// ];

return [
  'thumbs' => [
    'presets' => [
      'default' => ['width' => 250, 'quality' => 80],
    ]
  ]
];