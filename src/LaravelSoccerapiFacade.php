<?php

namespace Uchup07\LaravelSoccerapi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Uchup07\LaravelSoccerapi\Skeleton\SkeletonClass
 */
class LaravelSoccerapiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-soccerapi';
    }
}
