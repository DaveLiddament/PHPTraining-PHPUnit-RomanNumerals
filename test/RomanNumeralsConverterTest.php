<?php

namespace Training\PHPUnit\RomanNumerals\Test;


use Training\PHPUnit\RomanNumerals\RomanNumeralsConverter;

class RomanNumeralsConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RomanNumeralsConverter
     */
    private $converter;

    protected function setUp()
    {
        $this->converter = new RomanNumeralsConverter();
    }


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
            ['X', 10],
            ['XI', 11],
        ];
    }


    /**
     * @dataProvider happyPathDataProvider
     */
    public function testConversion($expectedValue, $inputValue)
    {
        $actualValue = $this->converter->convert($inputValue);
        $this->assertEquals($expectedValue, $actualValue);
    }


    /**
     * @expectedException \InvalidArgumentException
     */
    public function testNonNumericInput()
    {
        $this->converter->convert('foo');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testNumericButNotIntegerInput()
    {
        $this->converter->convert(3.4);
    }


}