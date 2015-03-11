<?php

namespace Foo;

class WeirdSystem
{
    /**
     * @var ParameterContainer
     */
    private $container;

    /**
     * @param ParameterContainer $container
     */
    public function __construct(ParameterContainer $container)
    {
        $this->container = $container;
    }

    /**
     * @return void
     */
    public function run()
    {
        $databaseUsername = $this->container->get('db.username');
        $databasePassword = $this->container->get('db.password');

        try {
            // Connect to database, etc.
        } catch (\RuntimeException $e) {
            $logPath = $this->container->get('path.log');

            // Log error
        }
    }
}
