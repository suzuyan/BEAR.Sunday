<?php

namespace Ray\Di\Modules;

use Ray\Di\AbstractModule;
use Ray\Di\Modules;

class Db1Module extends AbstractModule
{
    protected function configure()
    {
        $this->bind('Ray\Di\Mock\DbInterface')->to('Ray\Di\Mock\UserDb1');
    }
}
