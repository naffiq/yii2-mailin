# Yii2 Mailin
[![Build Status](https://travis-ci.org/naffiq/yii2-mailin.svg?branch=master)](https://travis-ci.org/naffiq/yii2-mailin)
[![Test Coverage](https://codeclimate.com/github/naffiq/yii2-mailin/badges/coverage.svg)](https://codeclimate.com/github/naffiq/yii2-mailin/coverage)
[![Code Climate](https://codeclimate.com/github/naffiq/yii2-mailin/badges/gpa.svg)](https://codeclimate.com/github/naffiq/yii2-mailin)

[SendinBlue Mailin](https://github.com/mailin-api/mailin-api-php) wrapper for Yii2 framework.

## Installation

Preferred way to install is through [composer](http://getcomposer.org)

```bash
$ composer require naffiq/yii2-mailin
```

## Configuration

Get your API key from [SendinBlue account page](https://account.sendinblue.com/advanced/api)
and insert it into your config file as follows:

```php
<?php

return [
    // Your config 
    'components' => [
        // ...
        'mailin' => [
            'class' => 'naffiq\mailin\Mailin',
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

## Testing

Before running tests with PHPUnit, supply your SendInBlue API key via environmental variable,
such as this:
```bash
$ MAILIN_API_KEY=your_key phpunit
```
