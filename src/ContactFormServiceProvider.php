<?php
// MyVendor\tm81_contactform\src\ContactFormServiceProvider.php
namespace tapanmandal81\tm81_contactform;
use Illuminate\Support\ServiceProvider;
class ContactFormServiceProvider extends ServiceProvider {
	public function boot()
	{
		
		//echo "Hi";
		// MyVendor\contactform\src\ContactFormServiceProvider.php
    	$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/resources/views', 'tm81_contactform');
		$this->loadMigrationsFrom(__DIR__.'/Database/migrations');

	}

	public function register()
	{
		//echo "Hi3";
	}
}
?>