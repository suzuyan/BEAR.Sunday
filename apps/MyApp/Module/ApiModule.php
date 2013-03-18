<?php
/**
 * @package    MyApp
 * @subpackage Module
 */
namespace MyApp\Module;

use BEAR\Sunday\Module as SundayModule;
use BEAR\Package\Provide as PackageModule;

/**
 * Application module for API
 *
 * @package    MyApp
 * @subpackage Module
 */
class ApiModule extends ProdModule
{
    /**
     * (non-PHPdoc)
     * @see Ray\Di.AbstractModule::configure()
     */
    protected function configure()
    {
        $this->install(new ProdModule);

        // format module
        $this->install(new PackageModule\ResourceView\HalModule($this));
        //$this->install(new SundayModule\Resource\JsonModule($this));
    }
}
