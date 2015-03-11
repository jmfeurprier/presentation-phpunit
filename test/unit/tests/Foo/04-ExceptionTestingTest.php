<?php

namespace Foo;

/**
 *
 */
class ExceptionTestingTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testExceptionBad()
    {
        $bar = new Bar();

        try {
            $bar->execute(false);
        } catch (Exception $e) {
            // Bad thing #1 : no exception thrown => test passes
            // Bad thing #2 : missing exception namespace (should be \Exception)
            // Bad thing #3 : exception class too generic (will also catch PHPUnit exceptions)

            $this->assertEquals('Failed to execute operation.', $e->getMessage());
        }
    }































    /**
     *
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Failed to execute
     */
    public function testExceptionGood1()
    {
        $bar = new Bar();

        $bar->execute(true);
    }
































    /**
     *
     */
    public function testExceptionGood2()
    {
        $bar = new Bar();

        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................
        // ................... Lots of stuff here .....................

        $this->setExpectedException('\\RuntimeException', 'Failed to execute');

        $bar->execute(true);
    }



















    /**
     *
     */
    public function testExceptionGood3()
    {
        $bar = new Bar();

        try {
            $bar->execute(true);
        } catch (\RuntimeException $e) {
            $this->assertEquals('Failed to execute operation.', $e->getMessage());

            // More asserts here
            // More asserts here
            // More asserts here
            // More asserts here
            // More asserts here

            return;
        }

        $this->fail();
    }


}