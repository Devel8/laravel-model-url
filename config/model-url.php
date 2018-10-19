<?php

return [

    /*
     * Model Url Model Class
     */
    'model' => \Devel8\LaravelActionTracker\ModelUrl::class,

    /*
     * Database table where url's are stored
     */
    'table_name' => 'module_urls',

    /*
     * Prefix word used to database columns name
     */
    'prefix' => 'module_url'

    /*
     * Format url
     */
    'url_format' => [
        'hash' => env('APP_KEY'),
        'length' => 20
]

];