<?php
/**
 * Created by PhpStorm.
 * User: takashi
 * Date: 2014/05/31
 * Time: 16:18
 */

namespace Koriym\Work\Interceptor;

use Psr\Log\LoggerInterface;
use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;
use Ray\Di\Di\Inject;

class BenchMarker implements MethodInterceptor
{
    private $logger;

    /**
     * @Inject
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function invoke(MethodInvocation $invocation)
    {
        $start = microtime(true);
        $result = $invocation->proceed(); // 元のメソッドの実行.
        $time = microtime(true) - $start;

        $this->logger->debug(sprintf('%d sec elapsed', $time));

        return $result;
    }
}
