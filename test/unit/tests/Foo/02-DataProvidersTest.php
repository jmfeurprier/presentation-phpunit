<?php

namespace Foo;

/**
 *
 */
class DataProvidersTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testWithoutDataProvider1()
    {
        $adder = new Adder();

        $result = $adder->add(2, 2);

        $this->assertEquals(4, $result);
    }

    /**
     *
     */
    public function testWithoutDataProvider2()
    {
        $adder = new Adder();

        $result = $adder->add(3, 4);

        $this->assertEquals(7, $result);
    }

    /**
     *
     */
    public function testWithoutDataProvider3()
    {
        $adder = new Adder();

        $result = $adder->add(3, -4);

        $this->assertEquals(-1, $result);
    }































    /**
     *
     */
    public static function dataProviderAdd()
    {
        return array(
            array(2, 2, 4),
            array(3, 4, 7),
            array(3, -4, -1),
            array(3, 0, 3),
        );
    }

    /**
     *
     * @dataProvider dataProviderAdd
     */
    public function testWithDataProvider($inputPrimary, $inputSecondary, $expected)
    {
        $adder = new Adder();

        $result = $adder->add($inputPrimary, $inputSecondary);

        $this->assertEquals($expected, $result);
    }
}