<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    // Defines which paths should be subject to CORS. In this case, it's the API routes.
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    // Specifies the HTTP methods that are allowed in cross-origin requests. '*' allows all methods.
    'allowed_methods' => ['*'],

    // Specifies which origins are allowed to access the resources.
    // You can add multiple origins here or use '*' to allow all origins.
    'allowed_origins' => ['http://localhost:3000'],

    // Patterns that match origins to be allowed. Use this if you need more flexible control over the origin.
    'allowed_origins_patterns' => [],

    // Specifies which headers can be included in cross-origin requests. '*' allows all headers.
    'allowed_headers' => ['*'],

    // Specifies which headers should be exposed to the browser in the response.
    'exposed_headers' => [],

    // Sets how long (in seconds) the results of a preflight request can be cached.
    'max_age' => 0,

    // Allows credentials to be included in cross-origin requests. Set to true if the client-side needs credentials.
    'supports_credentials' => false,

];
