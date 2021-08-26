<?php

use App\Listeners\AddLicense;
use App\Listeners\GenerateSitemap;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

$events->beforeBuild(AddLicense::class);

$events->afterBuild(GenerateSitemap::class);

