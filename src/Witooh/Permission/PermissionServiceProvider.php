<?php namespace Witooh\Permission;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['permission'] = $this->app->share(
            function () {
                if (Session::has('permission')) {
                    return Session::get('permission');
                } else {
                    $permission = new Permission();
                    Session::put('permission', $permission);
                    return $permission;
                }
            }
        );
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}