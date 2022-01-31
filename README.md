# PHP Dil Desteği Classı

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](#)


Bu class ile kelimeleri veritabanınızdaki veri ambarı modeli ile tuttuğunuz çeviri tablonuzdan çevirerek ekrana yazdırabilirsiniz. Bu class özellikle sayfa ilk yüklendiğinde tablodaki çevirileri yükler, sayfa içinde kullandığınız her seferinde db tekrar tekrar bağlanmaz. 

## Teknoloji
- PHP

## Kullanım
```php
$lang = new Lang();

$lang->Translate("LOGIN");
$lang->Translate("USERNAME");
$lang->Translate("PASSWORD");
```


## Tablo
```php
CREATE TABLE `language` (
  `ID` int(11) NOT NULL,
  `FIELD` text COLLATE utf8_turkish_ci NOT NULL,
  `TR` text COLLATE utf8_turkish_ci NOT NULL,
  `EN` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
```


