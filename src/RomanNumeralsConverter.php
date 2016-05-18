<?php

namespace Training\PHPUnit\RomanNumerals;

/**
 * Converter to turn an integer into a Roman Numeral
 *
 */
class RomanNumeralsConverter
{

    /**
     * Returns the RomanNumeral equivalent of $number
     *
     * @param int $number
     * @return string
     */
    public function convert($number)
    {
        if ($number == 5) {
            return 'V';
        }
        if ($number == 4) {
            return 'IV';
        }
        return str_repeat('I', $number);
    }

}