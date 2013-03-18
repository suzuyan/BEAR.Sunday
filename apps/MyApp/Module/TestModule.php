<?php
/**
 * @package    MyApp
 * @subpackage Module
 */
namespace MyApp\Module;

use MyApp\Module\ProdModule;
use BEAR\Sunday\Module;
use BEAR\Sunday\Module\Constant;
use BEAR\Package\Module as PackageModule;

/**
 * Production module
 *
 * @package    MyApp
 * @subpackage Module
 */
class TestModule extends ProdModule
{
    /**
     * (non-PHPdoc)
     * @see Ray\Di.AbstractModule::configure()
     */
    protected function configure()
    {
        $config = (require dirname(__DIR__) . '/config/test.php') + (require dirname(__DIR__) . '/config/prod.php');
        /** @var $config array */
        $this->install(new App\AppModule($config));
        $this->install(new PackageModule\Resource\NullCacheModule($this));
    }
}
