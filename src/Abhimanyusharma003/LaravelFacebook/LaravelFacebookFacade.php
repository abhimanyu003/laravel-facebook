<?php namespace Abhimanyusharma003\LaravelFacebook;

use Illuminate\Support\Facades\Facade;

class LaravelFacebookFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'facebook'; }

}