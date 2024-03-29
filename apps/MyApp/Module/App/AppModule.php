<?php
/**
 * @package    MyApp
 * @subpackage Module
 */
namespace MyApp\Module\App;

use BEAR\Sunday\Module as SundayModule;
use BEAR\Package\Module as PackageModule;
use BEAR\Package\Provide as ProvideModule;
use Ray\Di\AbstractModule;

/**
 * Application module
 *
 * @package    MyApp
 * @subpackage Module
 */
class AppModule extends AbstractModule
{
    /**
     * @var array
     */
    private $config;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
        parent::__construct();
    }

    /**
     * (non-PHPdoc)
     * @see Ray\Di.AbstractModule::configure()
     */
    protected function configure()
    {
        // install package module
        $this->install(new SundayModule\Constant\NamedModule($this->config));

        $scheme = __NAMESPACE__ . '\SchemeCollectionProvider';
        $this->install(new PackageModule\PackageModule($this, $scheme));

        // install twig
//        $this->install(new ProvideModule\TemplateEngine\Twig\TwigModule($this));

        // dependency binding for application
        $this->bind('BEAR\Sunday\Extension\Application\AppInterface')->to('MyApp\App');
        $this->bind()->annotatedWith("login_timeout_seconds")->toInstance(10);
        $logger = $this->requestInjection('Myapp\Interceptor\Logger');
        $this->bindInterceptor(
            $this->matcher->subclassesOf('BEAR\Resource\Object'),
            $this->matcher->startWith('on'),
            [$logger]
        );
    }
}
