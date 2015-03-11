<?php

namespace Foo;

class Bar
{

    /**
     * @param bool $throwException
     * @return void
     * @throws \RuntimeException
     */
    public function execute($throwException)
    {
        if ($throwException) {
            throw new \RuntimeException('Failed to execute operation.');
        }
    }
}
