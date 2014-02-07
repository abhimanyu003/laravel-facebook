# Laravel Facebook

Facebook PHP SDK for Laravel

## Installation

* Add below line to `composer.json` file to your requires 

    	"abhimanyusharma003/laravel-facebook": "dev-master"
    
* Run `composer update` or `composer install `

* Open `app/config/app.php` and add the service provider to your `providers` array.

    	'providers' => array(
	 		'Abhimanyusharma003\LaravelFacebook\LaravelFacebookServiceProvider',
    	)

* Now add the alias.

    	'aliases' => array(
        	'Facebook' =>   'Abhimanyusharma003\LaravelFacebook\LaravelFacebookFacade',
    	)


## Configuration

- Run `php artisan config:publish abhimanyusharma003/laravel-facebook`
- This will create a `config.php` file in `config\packages\abhimanyusharma003\laravel-facebook` folder
- Customize `config.php` with your information


Setting details are.

- `appid`: Your facebook app id.
- `secret`: Your facebook app secret.
- `redirect`: URL where to redirect after log in.
- `logout`: URL where to redirect after logout.
- `scope`: These are permission you want from your users

    

## Examples

* Get Login Url with your credentials and scope.

    	Route::get('/', function(){
    		return Facebook::loginUrl();
    	});

* Get User Id
	
    	Route::get('/', function(){
    		return Facebook::getUser();
    	});

* Use facebook API

    	Route::get('/', function(){
    		$profile = Facebook::api('/me?fields=id,name,first_name,last_name,username,email,gender,birthday,hometown,location,picture.width(100)');
    	});
    
* Get Logout Url

		Route::get('/', function(){
    		return Facebook::logoutUrl();
    	});`
