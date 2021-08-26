<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class AddLicense
{
    public function handle(Jigsaw $jigsaw)
    {
        if ($jigsaw->getEnvironment() !== 'production') {
            return;
        }

        $path = __DIR__ . '/../../UNLICENSE';

        if (!file_exists($path)) {
            echo("\nLicense file not exists.\n\n");

            return;
        }

        $contents = '---
title: Unlicense
description: Techno Framework Website Unlicense
extends: _layouts.docs
section: content
---
';

        $contents .= file_get_contents($path);

        $jigsaw->writeSourceFile('unlicense.md', $contents);
    }
}
