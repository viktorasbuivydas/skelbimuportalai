<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Active Theme
    |--------------------------------------------------------------------------
    |
    | The currently active directory theme. Components inside
    | resources/views/themes/{active}/components/ are resolved first,
    | falling back to shared components in resources/views/components/.
    |
    | Swap this value to switch the entire frontend in one step.
    |
    */

    'active' => env('THEME', 'rental'),

];
