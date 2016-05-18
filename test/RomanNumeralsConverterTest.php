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

    public function test3()
    {
        $this->assertConversion('III', 3);
    }

    public function test4()
    {
        $this->assertConversion('IV', 4);
    }

    public function test5()
    {
        $this->assertConversion('V', 5);
    }

    private function assertConversion($expectedValue, $inputValue)
    {
        $converter = new RomanNumeralsConverter();
        $actualValue = $converter->convert($inputValue);
        $this->assertEquals($expectedValue, $actualValue);
    }

}