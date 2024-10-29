# NexaMerchant/Cms

[![Build Status](https://github.com/NexaMerchant/cms/workflows/Laravel/badge.svg)](https://github.com/NexaMerchant/cms)
[![Release](https://img.shields.io/github/release/NexaMerchant/cms.svg?style=flat-square)](https://github.com/NexaMerchant/cms/releases)

# How to Install


```
NexaMerchant\Cms\Providers\CmsServiceProvider::class,
```
Add it to config/app.php $providers

# How to Install

```
composer require nexa-merchant/cms
```


# How to Use

```
php artisan vendor:publish --provider="NexaMerchant\Cms\Providers\CmsServiceProvider"
```

```

php artisan migrate

```

```
php artisan db:seed --class="NexaMerchant\Cms\Database\Seeds\CmsSeeder"
```

```
