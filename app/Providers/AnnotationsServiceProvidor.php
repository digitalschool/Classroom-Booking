<?php namespace App\Providers;

use Collective\Annotations\AnnotationsServiceProvider as ServiceProvider;

class AnnotationsServiceProvider extends ServiceProvider{


    /**
     * The Classes to scan for event annotations
     *
     * @var array
     */
    protected $scanEvents = [];

    /**
     * The classes to scan for route annotations
     *
     * @var array
     */
    protected $scanRoutes = [];

    /**
     * Do we scan automatically when local?
     *
     * @var bool
     */
    protected $scanWhileLocal = true;

    /**
     * Should we automatically scan the controllers directory
     * (App\Http\Controllers) for routes
     *
     * @var bool
     */
    protected $scanControllers = true;

}
