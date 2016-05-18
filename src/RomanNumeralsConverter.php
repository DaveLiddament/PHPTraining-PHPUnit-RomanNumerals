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
        if ($number == 4) {
            return 'IV';
        }

        $result = '';
        if ($number >= 5) {
            $result = 'V';
            $number -= 5;
        }

        return $result . str_repeat('I', $number);
    }

}