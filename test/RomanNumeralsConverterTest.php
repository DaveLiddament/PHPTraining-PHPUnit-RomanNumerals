<?php

namespace Training\PHPUnit\RomanNumerals\Test;


use Training\PHPUnit\RomanNumerals\RomanNumeralsConverter;

class RomanNumeralsConverterTest extends \PHPUnit_Framework_TestCase
{

    public function happyPathDataProvider()
    {
        return [
            ['I', 1],
            ['II', 2],
            ['III', 3],
            ['IV', 4],
            ['V', 5],
            ['VI', 6],
            ['VII', 7],
            ['IX', 9],
        ];
    }


    /**
     * @dataProvider happyPathDataProvider
     */
    public function testConversion($expectedValue, $inputValue)
    {
        $converter = new RomanNumeralsConverter();
        $actualValue = $converter->convert($inputValue);
        $this->assertEquals($expectedValue, $actualValue);
    }

}