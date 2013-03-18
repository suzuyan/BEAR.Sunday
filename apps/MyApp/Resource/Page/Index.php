<?php
/**
 * @package    MyApp
 * @subpackage Resource
 */
namespace MyApp\Resource\Page;

use BEAR\Resource\AbstractObject as Page;
use BEAR\Sunday\Inject\ResourceInject;

/**
 * Index page
 *
 * @package    MyApp
 * @subpackage Resource
 */
class Index extends Page
{
    use ResourceInject;

    /**
     * @var array
     */
    public $body = [
        'greeting' =>  ''
    ];

    public function __construct()
    {
    }

    public function onGet($name = 'BEAR.Sunday')
    {
        $this['greeting'] = 'Hello ' . $name;
        return $this;
    }
}
