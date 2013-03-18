<?php

namespace Ray\Di\Modules;

use Ray\Di\AbstractModule;

class SingletonAnnotationModule extends AbstractModule
{
    protected function configure()
    {
        $this->bind('Ray\Di\Mock\SingletonDbInterface')->to('Ray\Di\Mock\SingletonRndDb');
    }
}
