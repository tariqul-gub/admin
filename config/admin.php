<?php

return [
    'css' => [
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css',
        config('app.url', "https:://127.0.0.1:8000") . '/vendor/tariqul-gub/admin/public/admin/scss/main.css',
    ],
    'js' => [
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js',
        'https://code.jquery.com/jquery-3.6.0.min.js',
        config('app.url', "https:://127.0.0.1:8000") . '/vendor/tariqul-gub/admin/public/admin/js/admin.js',
    ],
    'logo' => asset('img/logo.svg'),

];
