<?php

namespace Foo;

class BogusAdder extends Adder
{

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add($a, $b)
    {
        // return ($a + $b);

        // OMG, a bug in the code.
        return ($a + $b) - 7;
    }
}
