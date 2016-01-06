<?php

namespace arleslie\DreamObjects;

use Storage;
use League\Flysystem\Filesystem;
use League\Flysystem\AwsS3v3\AwsS3Adapter;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
	public function boot()
	{
		Storage::extend('dreamobjects', function($app, $config) {
			return new FileSystem(new Adapter(
				$config['key'],
				$config['secret'],
				$config['bucket']
			));
		});
	}

	public function register() {}
}