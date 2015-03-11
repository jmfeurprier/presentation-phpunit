<?php

namespace Foo;

class Incrementer
{

    /**
     * @var Adder
     */
    private $adder;

    /**
     * @var int
     */
    private $step;

    /**
     * @param Adder $adder
     * @param int $step
     */
    public function __construct(Adder $adder, $step)
    {
        $this->adder = $adder;
        $this->step  = $step;
    }

    /**
     * @param int $value
     * @return int
     */
    public function increment($value)
    {
        return $this->adder->add($value, $this->step);
    }
}
