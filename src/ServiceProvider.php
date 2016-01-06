<?php

namespace arleslie\DreamObjects;

use Storage;
use League\Flysystem\Filesystem;
use League\Flysystem\AwsS3v3\AwsS3Adapter;

class ServiceProvider extends Illuminate\Support\ServiceProvider
{
	public function boot()
	{
		Storage::extend('dreamobjects', function($app, $config) {
			$client = new DreamObjectsClient(
				$config['key'],
				$config['secret'],
				$config['bucket']
			);

			return new FileSystem(new AwsS3Adapter($client));
		});
	}
}