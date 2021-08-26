<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => 'https://technoframework.com',
    'production' => false,
    'siteName' => 'Techno Framework',
    'siteDescription' => 'Async event-oriented PHP Framework',

    // navigation menu
    'navigation' => [
        'About' => '/docs/about/',
        'Concept' => '/docs/concept/',
        'First Steps' => '/docs/first-steps/',
        'Events' => '/docs/events/',
    ],

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];
