Slugify
=======

[![Build Status](https://travis-ci.org/AshleyDawson/Slugify.svg)](https://travis-ci.org/AshleyDawson/Slugify)

Installation
------------

You can install Slugify via Composer. To do that, simply require the package in your composer.json file like so:

```json
{
    "require": {
        "ashleydawson/slugify": "1.0.*"
    }
}
```

Then run composer update to install the package.

Basic Usage
-----------

Using slugify is easy - simply instantiate the slugifier service class and call the slugify method:

```php
require_once __DIR__ . '/vendor/autoload.php';

use AshleyDawson\Slugify\Slugifier;

$slugifier = new Slugifier();

$text = $slugifier->slugify('Hello World');

// The value of $text will be "hello-world"
echo $text;
```

If you'd like to change the delimiter used, simply pass it as the second argument to the slugify method:

```php
require_once __DIR__ . '/vendor/autoload.php';

use AshleyDawson\Slugify\Slugifier;

$slugifier = new Slugifier();

$text = $slugifier->slugify('Hello World', '_');

// The value of $text will be "hello_world"
echo $text;
```
