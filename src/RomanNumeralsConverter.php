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
     * Returns the RomanNumeral equivalent of $number.
     *
     * If $number is not an integer 1 or higher then an exception is thrown.
     *
     * @param int $number
     * @return string
     * @throws \InvalidArgumentException
     */
    public function convert($number)
    {
        if (!is_numeric($number) || ((int) $number != $number) || ($number <= 0)) {
            throw new \InvalidArgumentException("Invalid input value [$number]");
        }

        
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