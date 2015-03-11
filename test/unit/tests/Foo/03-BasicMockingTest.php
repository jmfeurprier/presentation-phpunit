<?php

namespace Foo;

/**
 *
 */
class BasicMockingTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testWithoutMock()
    {
        $adder = new BogusAdder();

        $incrementer = new Incrementer($adder, 2);

        $result = $incrementer->increment(123);

        // Fails, because BogusAdder is bugged
        $this->assertEquals(125, $result);
    }

    /**
     *
     */
    public function testWithMock1()
    {
        $adder = $this->getMock('\\Foo\\BogusAdder');
        $adder->expects($this->once())
            ->method('add')
            ->with(123, 2)
            ->will($this->returnValue(125))
        ;

        $incrementer = new Incrementer($adder, 2);

        $result = $incrementer->increment(123);

        $this->assertEquals(125, $result);
    }








    /**
     *
     */
    public function testWithMock2()
    {
        $inputValue  = 123;
        $step        = 2;
        $outputValue = 125; // $inputValue + step

        $adder = $this->getMock('\\Foo\\BogusAdder');
        $adder->expects($this->once())
            ->method('add')
            ->with($inputValue, $step)
            ->will($this->returnValue($outputValue))
        ;

        $incrementer = new Incrementer($adder, $step);

        $result = $incrementer->increment($inputValue);

        $this->assertEquals($outputValue, $result);
    }











    /**
     *
     */
    public function testWithMock3()
    {
        $inputValue  = 123;
        $step        = 2;
        $outputValue = 125; // $inputValue + 2

        $adder = $this->buildAdder($inputValue, $step, $outputValue);

        $incrementer = new Incrementer($adder, $step);

        $result = $incrementer->increment($inputValue);

        $this->assertEquals($outputValue, $result);
    }

    /**
     *
     */
    private function buildAdder($inputValue, $step, $outputValue)
    {
        $adder = $this->getMock('\\Foo\\BogusAdder');

        $adder->expects($this->once())
            ->method('add')
            ->with($inputValue, $step)
            ->will($this->returnValue($outputValue))
        ;

        return $adder;
    }
}