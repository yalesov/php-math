<?php
namespace Yalesov\Math;

use Yalesov\ArgValidator\ArgValidator;

class Math
{
    /**
     * round the number up to the place specified by $precision
     *
     * @param int|float|string $number    ('numeric')
     * @param int              $precision
     *  follows PHP's round function, i.e.
     *      2 = two decimal places
     *     -2 = nearest hundreds
     * @return string
     */
    public static function roundUp($number, $precision)
    {
        if ($number == 0) return 0;
        $dp = self::getDecimalPlace($number) + abs($precision);
        $power = bcpow(10, -$precision, $dp);

        return bcmul(ceil(bcdiv($number, $power, $dp)), $power, $dp);
    }

    /**
     * get the number of decimal places
     *
     * @param  int|float|string $number ('numeric')
     * @return int
     */
    public static function getDecimalPlace($number)
    {
        ArgValidator::assert($number, 'numeric');

        return strlen(substr(strrchr($number, "."), 1));
    }
}
