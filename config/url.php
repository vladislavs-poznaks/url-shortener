<?php

return [
    'hash' => [
        'length' => env('HASH_LENGTH', 6),
    ],

    'url' => [
        'max_length' => env('URL_MAX_LENGTH', 500),
    ],
];
