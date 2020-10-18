<?php

return [
    'languages' => true,
];

return [


];

return [
  'routes' => [

    'pattern' => '(:project)',
    'language' => '*',
    'action'  => function($language, $id) {
      $page = page($id);

      if ($page->hasListedChildren()) {
        if ($firstChild = $page->children()->listed()->first()) {
          return site()->visit($firstChild, $language);
        }
      }

      $this->next();
    }
  ]
];