<?php

Kirby::plugin('bu/change-file-template', [
  'hooks' => [
      'file.create:after' => function (Kirby\Cms\File $file) {
          foreach ($this->languages() as $lang) {
            $file = $file->save([
              'template' => 'image',
              'text' => 'test',
              'isVideo' => $file->type()=='video' ? 'true' : 'false' 
            ], $lang->code());
          };
          
      }
  ]
]);