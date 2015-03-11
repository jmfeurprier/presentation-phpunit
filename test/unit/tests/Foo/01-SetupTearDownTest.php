<?php

namespace Foo;

/**
 *
 */
class SetupTearDownTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    protected function setUp()
    {
        $this->adder = new Adder();
    }

    /**
     *
     */
    protected function tearDown()
    {
        unset($this->adder);
    }

    /**
     *
     */
    public function testAdd()
    {
        $result = $this->adder->add(2, 2);

        $this->assertEquals(4, $result);
    }
}
