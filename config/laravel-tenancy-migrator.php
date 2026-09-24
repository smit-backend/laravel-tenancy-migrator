<?php

return [
    'enabled' => env('LARAVEL_TENANCY_MIGRATOR_ENABLED', true),
    'timeout' => env('LARAVEL_TENANCY_MIGRATOR_TIMEOUT', 30),
    'log_channel' => env('LARAVEL_TENANCY_MIGRATOR_LOG', 'stack'),
];
