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
        $result = '';
        for($i=0; $i<$number; $i++) {
            $result .= 'I';
        }
        return $result;
    }

}