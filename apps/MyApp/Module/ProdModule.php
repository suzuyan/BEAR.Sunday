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
 * Production module
 *
 * @package    MyApp
 * @subpackage Module
 */
class ProdModule extends AbstractModule
{
    /**
     * (non-PHPdoc)
     * @see Ray\Di.AbstractModule::configure()
     */
    protected function configure()
    {
        $config = require dirname(__DIR__) . '/config/prod.php';
        /** @var $config array */
        $this->install(new App\AppModule($config));
    }
}
