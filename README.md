# CloudFlare-API

This PHP source code helps you to use Cloudflare in your projects and access the panel through the API. With this code, you can: * Easily manage your Cloudflare DNS records * Purge your Cloudflare cache * Get information about your Cloudflare account * And much more!


This PHP source code helps you to use [Cloudflare](https://cloudflare.com) in your projects and access the panel through the API.

With this code, you can:

* Easily manage your Cloudflare DNS records
* Purge your Cloudflare cache
* Get information about your Cloudflare account
* And much more!

To use this code, simply include it in your PHP project and then use the provided functions to interact with Cloudflare.

For more information, please see the Examples.

## Use

```php
require_once('cloudflare-api.php');

$CloudFlare = new CloudFlare("{X-Auth-Key}", "{X-Auth-Email}");
```
