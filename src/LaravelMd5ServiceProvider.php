<?php

namespace Mazecode\LaravelMd5;

use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelMd5ServiceProvider
 *
 * @package Mazecode\LaravelMd5
 */
class LaravelMd5ServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
	
	/**
	 * Boot any application services.
	 */
	public function boot()
	{
		app('hash')->extend('md5', function () {
			return new Md5Hash();
		});
	}
}
