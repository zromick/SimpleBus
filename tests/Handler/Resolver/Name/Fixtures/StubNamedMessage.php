<?php

namespace SimpleBus\Message\Tests\Handler\Resolver\Name\Fixtures;

use SimpleBus\Message\NamedMessage;

class StubNamedMessage implements NamedMessage
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }
}
