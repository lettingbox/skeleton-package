<?php

namespace Lettingbox\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lettingbox\Skeleton\SkeletonClass
 */
class SkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
