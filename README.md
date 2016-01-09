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