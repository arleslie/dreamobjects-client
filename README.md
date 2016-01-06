# arleslie\DreamObjects
Client for DreamObjects to work with AWS S3 API (for Laravel)

# Installation
`composer require arleslie/dreamobjects-client`

In `config\filesystems.php` add the following under `'disks' => [`
```
        'dreamobjects' => [
            'driver' => 'dreamobjects',
            'key'    => '<key>',
            'secret' => '<secret>',
            'bucket' => '<bucket name>'
        ],
```

Add the ServiceProvider: `arleslie\DreamObjects\ServiceProvider` to your `app.php`.

# Notes
This uses `league/flysystem-aws-s3-v2` and is not compatible with `league/flysystem-aws-s3-v3`.
A requirement of `league/flysystem-aws-s3-v3` will install the newest version of `aws/aws-sdk-php` which will cause this to package to fail.
