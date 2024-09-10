<?php

// config for ChrisReedIO/SecureMeilisearch
return [
    /**
     * Whether to register the Scout Indexing commands for use via web.
     */
    'register_commands' => true,


    'key' => [
        /**
         * The number of minutes a search key should be valid for.
         */
        'lifetime' => env('MEILISEARCH_KEY_EXPIRATION', 60 * 12),
    ],
];
