<?php

namespace Training\PHPUnit\RomanNumerals\Test;


use Training\PHPUnit\RomanNumerals\RomanNumeralsConverter;

class RomanNumeralsConverterTest extends \PHPUnit_Framework_TestCase
{

    public function test1()
    {
        $converter = new RomanNumeralsConverter();
        $actualValue = $converter->convert(1);
        $this->assertEquals('I', $actualValue);
    }
}