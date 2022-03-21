# PHP Language Translate Class

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](#)


With this class, you can print your data warehouse model in your system by converting it from your sizing table. When this class is first loaded, the translations in the table can be used repeatedly in the db for reuse within the page.

## Tech
- PHP

## Usage
```php
$lang = new Lang();

echo $lang->Translate("LOGIN");
echo $lang->Translate("USERNAME");
echo $lang->Translate("PASSWORD");
```


## DB Table
```php
CREATE TABLE `language` (
  `ID` int(11) NOT NULL,
  `FIELD` text COLLATE utf8_turkish_ci NOT NULL,
  `TR` text COLLATE utf8_turkish_ci NOT NULL,
  `EN` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
```


