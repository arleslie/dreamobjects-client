<?php

namespace arleslie\DreamObjects;

use League\Flysystem\AwsS3v2\AwsS3Adapter;
use Aws\S3\S3Client;

class Adapter extends AwsS3Adapter
{
	protected $client;
	protected $bucket;

	public function __construct($key, $secret, $bucket, UploadBuilder $UploadBuilder = null)
	{
		define('AWS_KEY', $key);
		define('AWS_SECRET_KEY', $secret);
		define('HOST', 'https://objects.dreamhost.com');

		$this->bucket = $bucket;

		$this->client = S3Client::factory([
			'base_url' => HOST,
			'key' => AWS_KEY,
			'secret' => AWS_SECRET_KEY,
			'region' => '',
			'version' => '2006-03-01'
		]);

		$this->setPathPrefix(null);
		$this->uploadBuilder = $UploadBuilder;
	}
}