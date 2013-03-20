<?php
/**
 * Check env interceptor
 *
 * @package BEAR.Framework
 */
namespace Myapp\Interceptor;

use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;

/**
 * Logger
 */
class Logger implements MethodInterceptor
{
    use LogInject;

    /**
     * (non-PHPdoc)
     * @see Ray\Aop.MethodInterceptor::invoke()
     */
    public function invoke(MethodInvocation $invocation)
    {
        $result = $invocation->proceed();
        $class = get_class($invocation->getThis());
        $args = $invocation->getArguments();
        $input = json_encode($args);
        $output = json_encode($result);
        $log = "target = [{$class}], input = [{$input}], result = [{$output}]";
        $this->log->log($log);
        return $result;
    }
}
