<?php

namespace Alohajaycee\LaravelAzureSso;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alohajaycee\LaravelAzureSso\Skeleton\SkeletonClass
 */
class LaravelAzureSsoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-azure-sso';
    }
}
