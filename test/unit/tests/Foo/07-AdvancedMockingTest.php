<?php

namespace Foo;

/**
 *
 */
class AdvancedMockingTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testMockingBad1()
    {
        $container = $this->getMockBuilder('\\Foo\\ParameterContainer')->disableOriginalConstructor()->getMock();

        $container->expects($this->once())->method('get')->with('db.username')->will($this->returnValue('database_username'));
        $container->expects($this->once())->method('get')->with('db.password')->will($this->returnValue('database_password'));
        $container->expects($this->never())->method('get')->with('path.log');

        $system = new WeirdSystem($container);

        $system->run();
    }








































    /**
     *
     */
    public function testMockingBad2()
    {
        $container = $this->getMockBuilder('\\Foo\\ParameterContainer')->disableOriginalConstructor()->getMock();

        $container->expects($this->at(0))->method('get')->with('db.username')->will($this->returnValue('database_username'));
        $container->expects($this->at(1))->method('get')->with('db.password')->will($this->returnValue('database_password'));
        $container->expects($this->never())->method('get')->with('path.log');

        $system = new WeirdSystem($container);

        $system->run();
    }








































    /**
     *
     */
    public function testMockingGood()
    {
        $returnValueMap = array(
            array('db.username', 'database_username'),
            array('db.password', 'database_password'),
        );

        $container = $this->getMockBuilder('\\Foo\\ParameterContainer')->disableOriginalConstructor()->getMock();
        $container->expects($this->any())->method('get')->will($this->returnValueMap($returnValueMap));

        $system = new WeirdSystem($container);

        $system->run();
    }
}