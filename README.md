# arleslie\DreamObjects
Client for DreamObjects to work with AWS s3 API

# Installation
In your `composer.json` add:
```
    "repository": [
        {
            "type": "vcs",
            "url": "https://github.com/arleslie/dreamobjects-client"
        }
    ],
```

# Notes
This uses `league/flysystem-aws-s3-v2` and is not compatible with `league/flysystem-aws-s3-v3`.
A requirement of `league/flysystem-aws-s3-v3` will install the newest version of `aws/aws-sdk-php` which will cause this to package to fail.
