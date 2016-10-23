<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Logo Url
    |--------------------------------------------------------------------------
    |
    | The logo image at the top left of your site, should be a wide rectangle
    | shape. If left blank site title text will be shown.
    | The small logo image at the top left of your site, should be a square
    | shape, seen when scrolling down. If left blank a home glyph will be shown.
    */

    'logo_url' => [
        'default' => env('LOGO_URL_DEFAULT', null),
        'small' => env('LOGO_URL_SMALL', null),
    ],

];
