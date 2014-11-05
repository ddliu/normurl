# normurl

Normalize URL.

## Features

- Resolve relative URL
- Remove anchor
- Remove dot segment
- Convert scheme and host name to lower case (TODO)

## Installation

```
composer require ddliu\normurl
```

## Usage

```php
use ddliu\normurl\Url;

echo Url::normalize('../hello/world.html', 'http://example.com/about/index.html');
// http://example.com/hello/world.html
```

## License

MIT

This project is based on [url_to_absolute](http://nadeausoftware.com/node/79) by [David R. Nadeau](http://nadeausoftware.com/).