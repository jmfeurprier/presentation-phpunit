<?php

namespace Foo;

/**
 *
 */
class IncompleteAndSkippedTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testIncomplete()
    {
        $this->markTestIncomplete();

        $container = $this->getMockBuilder('\\Foo\\ParameterContainer')->disableOriginalConstructor()->getMock();

        $container->expects($this->once())->method('get')->with('db.username')->will($this->returnValue('database_username'));

        $system = new WeirdSystem($container);
    }

    /**
     *
     */
    public function testSkipped()
    {
        $this->markTestSkipped();

        $container = $this->getMockBuilder('\\Foo\\ParameterContainer')->disableOriginalConstructor()->getMock();

        $container->expects($this->once())->method('get')->with('db.username')->will($this->returnValue('database_username'));

        $system = new WeirdSystem($container);

        $system->run();
    }
}