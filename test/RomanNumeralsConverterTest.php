<?php

namespace Training\PHPUnit\RomanNumerals\Test;


use Training\PHPUnit\RomanNumerals\RomanNumeralsConverter;

class RomanNumeralsConverterTest extends \PHPUnit_Framework_TestCase
{

    public function test1()
    {
        $this->assertConversion('I', 1);
    }


    public function test2()
    {
        $this->assertConversion('II', 2);
    }


    private function assertConversion($expectedValue, $inputValue)
    {
        $converter = new RomanNumeralsConverter();
        $actualValue = $converter->convert($inputValue);
        $this->assertEquals($expectedValue, $actualValue);
    }

}