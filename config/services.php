<?php

return [
    'authors' => [
        'base_uri' => env('AUTHOR_SERVICE_BASE_URI'),
        'secret' => env('AUTHOR_SERVICE_SECRET')
    ],

    'books' => [
        'base_uri' => env('BOOK_SERVICE_BASE_URI'),
        'secret' => env('BOOK_SERVICE_SECRET')
    ]
];
