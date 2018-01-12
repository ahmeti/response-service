<?php 

namespace Ahmeti\ResponseService\Providers;

use Illuminate\Support\ServiceProvider;
use Ahmeti\ResponseService\ResponseService;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ahmeti-response-service', function () {
            return new ResponseService();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['ahmeti-response-service'];
    }
}