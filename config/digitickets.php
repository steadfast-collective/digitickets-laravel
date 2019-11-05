<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Digitickets Keys
    |--------------------------------------------------------------------------
    |
    | The api key and secret key is used to make authenticated requests without,
    | without sending the main username and password, these are however
    | required to initially request the API key.
    |
    */
    'username' => env('DIGITICKETS_USERNAME'),
    'password' => env('DIGITICKETS_PASSWORD'),
    'key' => env('DIGITICKETS_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Digitickets Path
    |--------------------------------------------------------------------------
    |
    | This is the base URI path where Digiticket's views will be available from.
    | You're free to tweak this path according to your preferences
    | and your application design.
    |
    */
    'path' => env('DIGITICKETS_PATH', 'digitickets'),

    /*
    |--------------------------------------------------------------------------
    | Digitickets API Version
    |--------------------------------------------------------------------------
    |
    | This is the api version which requests to digitickets will be made to.
    |
    */
    'version'=> env('DIGITICKETS_API_VERSION', 'v2'),
];
