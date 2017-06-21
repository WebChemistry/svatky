[![Build Status](https://travis-ci.org/WebChemistry/svatky.svg?branch=master)](https://travis-ci.org/WebChemistry/svatky)

# České svátky

Instalace:
```
composer require webchemistry/svatky
```

## Použití

Svátek dnes
```php
$names = WebChemistry\NameDay::getToday();
```

Svátek zítra
```php
$names = WebChemistry\NameDay::getTommorrow();
```

Svátek včera
```php
$names = WebChemistry\NameDay::getYesterday();
```

Svátek přes třídu DateTime
```php
$names = WebChemistry\NameDay::getByDateTime(new \DateTime('+ 1 month'));
```

Svátek přes timestamp
```php
$names = WebChemistry\NameDay::getByTimestamp(time() + (3 * 24 * 60 * 60));
```

Svátek přes den a měsíc
```php
$names = WebChemistry\NameDay::get(31, 12);
```

Jaký den a měsíc má svátek?
```php
$date = WebChemistry\NameDay::getByName('Řehoř');
```

## Metody

Třída **WebChemistry\Name**
```php
$name->getNames(); // Vrací pole jmen v daném měsíci, většinou jednoprvkový
(string) $name; // Převede jména/jméno na string, v případě, že se jedná o více jmen, tak jsou oddělené čárkou a mezerou tzn. ", " 
```

Třída **WebChemistry\Date**
```php
$date->getDay(); // Den jako int
$date->getMonth(); // Měsíc jako int
$date->toDateTime(); // Objekt DateTime s aktuálním rokem
$date->toTimestamp(); // Timestamp s aktuálním rokem
(string) $date; // String nejprve den, potom měsíc oddělené tečkou
```

**TODO:** Petr má svátek 22.2 a 29.6, není zahrnuto 29.6
