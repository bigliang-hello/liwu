<?php

return [

    // Mail Notification
    'mail_notification' => env('MAIL_NOTIFICATION') ?: false,

    // Super Admin
    'super_admin' => env('APP_SUPER_ADMIN') ?: 1,

    // Default Avatar
    'default_avatar' => env('DEFAULT_AVATAR') ?: '/images/default.png',

    // Default Icon
    'default_icon' => env('DEFAULT_ICON') ?: '/images/favicon.ico',

    // Color Theme
    'color_theme' => 'gray-theme',

    // Meta
    'meta' => [
        'keywords' => 'JC Blog,blog,laravel,vuejs',
        'description' => '把事情变复杂很简单，把事情变简单很复杂。'
    ],

    // Social Share
    'social_share' => [
        'article_share'    => env('ARTICLE_SHARE') ?: true,
        'discussion_share' => env('DISCUSSION_SHARE') ?: true,
        'sites'            => env('SOCIAL_SHARE_SITES') ?: 'google,twitter,weibo',
        'mobile_sites'     => env('SOCIAL_SHARE_MOBILE_SITES') ?: 'google,twitter,weibo,qq,wechat',
    ],

    // Google Analytics
    'google' => [
        'id'   => env('GOOGLE_ANALYTICS_ID', 'Google-Analytics-ID'),
        'open' => env('GOOGLE_OPEN', false)
    ],

    // Article Page
    'article' => [
        'title'       => '把事情变复杂很简单，把事情变简单很复杂。',
        'description' => '巨成博客',
        'number'      => 15,
        'sort'        => 'desc',
        'sortColumn'  => 'published_at',
    ],

    // Discussion Page
    'discussion' => [
        'number' => 20,
        'sort'   => 'desc',
        'sortColumn' => 'created_at',
    ],

    // Discussion Page
    'program' => [
        'number' => 5,
        'sort'   => 'desc',
        'sortColumn' => 'created_at',
    ],

    // Footer
    'footer' => [
        'github' => [
            'open' => false,
            'url'  => 'https://github.com/jcc',
        ],
        'twitter' => [
            'open' => false,
            'url'  => 'https://twitter.com/pigjian'
        ],
        'meta' => '© JC Blog 2019. Powered By JuCheng',
    ],

];
