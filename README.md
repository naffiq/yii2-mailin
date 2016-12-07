# Yii2 Mailin
[SendinBlue Mailin](https://github.com/mailin-api/mailin-api-php) wrapper for Yii2 framework.

## Installation

Preferred way to install is through [composer](http://getcomposer.org)

```bash
$ composer require naffiq/yii2-mailin
```

## Configuring

Get your API key from [SendinBlue account page](https://account.sendinblue.com/advanced/api)
and insert it your config file as follows:

```php
<?php

return [
    // Your config 
    'components' => [
        // ...
        'mailin' => [
            'class' => 'naffiq\Mailin\Mailin',
            'apiKey' => SENDINBLUE_API_KEY,
            // 'apiUrl' => ''
        ]
    ]
]

?>
```

## Usage

To get [official SendinBlue library](https://github.com/mailin-api/mailin-api-php) 
Mailin object instance, use `getClient()` method of component

```php
<?php 
$mailin = \Yii::$app->mailin->getClient();

// Use $mailin object 
?>
```

Refer to [API DOCS](https://apidocs.sendinblue.com) (PHP section) for further usage.