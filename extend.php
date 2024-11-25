<?php

namespace NielsVanDendries\TypicalFlarum;

use Flarum\Extend;

return [
    (new Extend\Frontend('admin'))
        ->js(__DIR__ . '/js/admin.js')
        ->css(__DIR__ . '/less/admin.less'),
    (new Extend\Frontend('forum'))
        ->js(__DIR__ . '/js/forum.js')
        ->css(__DIR__ . '/less/forum.less'),
];
