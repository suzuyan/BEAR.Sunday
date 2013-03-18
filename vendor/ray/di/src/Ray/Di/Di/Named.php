<?php
/**
 * This file is part of the Ray package.
 *
 * @package Ray.Di
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace Ray\Di\Di;

/**
 * Named
 *
 * @Annotation
 * @Target("METHOD")
 *
 * @package    Ray.Di
 * @subpackage Annotation
 */
final class Named implements Annotation
{
    /**
     * Name
     *
     * @var string
     */
    public $value;
}
