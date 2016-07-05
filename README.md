# Yalesov\Math

[![Build Status](https://travis-ci.org/yalesov/php-math.svg)](https://travis-ci.org/yalesov/php-math)

A collection of math functions.

# Installation

[Composer](http://getcomposer.org/):

```json
{
    "require": {
        "yalesov/math": "2.*"
    }
}
```

# Usage

## roundUp

Round a `$number` up to a certain `$precision`:

```php
use Yalesov\Math\Math;
Math::roundUp($number, $precision);
```

`$number`: any numeric scalar
`$precision`: follows PHP's [round](http://php.net/manual/en/function.round.php) function, i.e.
- `2` = two decimal places
- `-2` = neartest hundreds

## getDecimalPlace

Get the number of decimal places:

```php
use Yalesov\Math\Math;
$dp = Math::getDecimalPlace(0.123456789); // $dp = 9
```
