# Heartsentwined\Math

[![Build Status](https://secure.travis-ci.org/heartsentwined/math.png)](http://travis-ci.org/heartsentwined/math)

A collection of math functions.

# Installation

[Composer](http://getcomposer.org/):

```json
{
    "require": {
        "heartsentwined/math": "1.*"
    }
}
```

# Usage

## roundUp

Round a `$number` up to a certain `$precision`:

```php
use Heartsentwined\Math\Math;
Math::roundUp($number, $precision);
```

`$number`: any numeric scalar
`$precision`: follows PHP's [round](http://php.net/manual/en/function.round.php) function, i.e.
- `2` = two decimal places
- `-2` = neartest hundreds

## getDecimalPlace

Get the number of decimal places:

```php
use Heartsentwined\Math\Math;
$dp = Math::getDecimalPlace(0.123456789); // $dp = 9
```
