<?php

namespace Foo;

/**
 *
 */
class ExpectationsMockingTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testWithMock()
    {
        $container = $this->getMockBuilder('\\Foo\\ParameterContainer')->disableOriginalConstructor()->getMock();


        $container->expects($this->once())->method('get')->will($this->returnValue(123));


        $container->expects($this->atLeastOnce())->method('get')->will($this->returnValue(123));


        $container->expects($this->any())->method('get')->will($this->returnValue(123));


        $container->expects($this->exactly(3))->method('get')->will($this->returnValue(123));


        $container->expects($this->at(0))->method('fetch')->with('a')->will($this->returnValue(123));
        $container->expects($this->at(1))->method('fetch')->with('b')->will($this->returnValue(234));
        $container->expects($this->at(2))->method('fetch')->with('c')->will($this->returnValue(345));


        $container->expects($this->never())->method('get');


        $returnValueMap = array(
            array('a', 123),
            array('b', 234),
            array('c', 345),
        );
        $container->expects($this->any())->method('fetch')->will($this->returnValueMap($returnValueMap));


        $system = new WeirdSystem($container);

        $system->run();
    }

}