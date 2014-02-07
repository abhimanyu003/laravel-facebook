<?php namespace Abhimanyusharma003\LaravelFacebook;

use Illuminate\Support\ServiceProvider;

class LaravelFacebookServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = FALSE;

    public function boot()
    {
        $this->package('abhimanyusharma003/laravel-facebook');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['facebook'] = $this->app->share(function ($app) {
            return new Facebook($app['config']->get('laravel-facebook::secret'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('laravel-facebook');
    }

}