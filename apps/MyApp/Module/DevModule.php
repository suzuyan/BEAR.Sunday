<?php
/**
 * @package    MyApp
 * @subpackage Module
 */
namespace MyApp\Module;

use BEAR\Sunday\Module as SundayModule;
use BEAR\Package\Module as PackageModule;
use Ray\Di\AbstractModule;

/**
 * Dev module
 *
 * @package    MyApp
 * @subpackage Module
 */
class DevModule extends AbstractModule
{
    /**
     * (non-PHPdoc)
     * @see Ray\Di.AbstractModule::configure()
     */
    protected function configure()
    {
        $config = (require dirname(__DIR__) . '/config/dev.php') + (require dirname(__DIR__) . '/config/prod.php');
        /** @var $config array */
        $this->install(new App\AppModule($config));
        $this->install(new PackageModule\Resource\DevResourceModule($this));
    }
}
