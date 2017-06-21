# České svátky

Instalace:
```
composer require webchemistry/svatky
```

## Použití

Svátek dnes
```php
WebChemistry\NameDay::getToday();
```

Svátek zítra
```php
WebChemistry\NameDay::getTommorrow();
```

Svátek včera
```php
WebChemistry\NameDay::getYesterday();
```

Svátek přes třídu DateTime
```php
WebChemistry\NameDay::getByDateTime(new \DateTime('+ 1 month'));
```

Svátek přes timestamp
```php
WebChemistry\NameDay::getByTimestamp(time() + (3 * 24 * 60 * 60));
```

Svátek přes den a měsíc
```php
WebChemistry\NameDay::get(31, 12);
```
