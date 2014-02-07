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
        $this->package('abhimanyusharma003/laravelfacebook');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['facebook'] = $this->app->share(function ($app) {
            return new Facebook($app['config']->get('laravelfacebook::secret'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('laravelfacebook');
    }

}