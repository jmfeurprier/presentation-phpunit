<?php

namespace Foo;

class ParameterContainer
{
    /**
     * @param {string:mixed} $parameters
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function get($id)
    {
        return $this->parameters[$id];
    }
}
