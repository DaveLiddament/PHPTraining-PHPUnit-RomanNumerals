<?php

namespace Training\PHPUnit\RomanNumerals;

/**
 * Converter to turn an integer into a Roman Numeral
 *
 */
class RomanNumeralsConverter
{

    private static $MAPPINGS = [
        'X' => 10,
        'V' => 5,
    ];


    /**
     * Returns the RomanNumeral equivalent of $number
     *
     * @param int $number
     * @return string
     */
    public function convert($number)
    {
        $result = '';

        foreach(self::$MAPPINGS as $romanNumeral => $value) {
            if ($number >= $value) {
                $result .= $romanNumeral;
                $number -= $value;
            }

            if ($number == $value - 1) {
                $result .= 'I' . $romanNumeral;
                $number -= ($value - 1);
            }
        }

        return $result . str_repeat('I', $number);
    }

}