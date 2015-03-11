<?php

namespace Foo;

class SimpleEntity
{
    
    /**
     * @var null|\DateTime
     */
    private $startedAt;

    /**
     * @var null|\DateTime
     */
    private $finishedAt;

    /**
     * @param \DateTime $at
     */
    public function setStartedAt(\DateTime $at)
    {
        $this->startedAt = $at;
    }

    /**
     * @return null|\DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @param \DateTime $at
     */
    public function setFinishedAt(\DateTime $at)
    {
        $this->finishedAt = $at;
    }

    /**
     * @return null|\DateTime
     */
    public function getFinishedAt()
    {
        return $this->startedAt;
    }
}
