<?php
/**
 * Created by PhpStorm.
 * User: takashi
 * Date: 2014/05/31
 * Time: 16:18
 */

namespace Koriym\Work\Interceptor;

use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

class BenchMarker implements MethodInterceptor
{
    public function invoke(MethodInvocation $invocation)
    {
        $start = microtime(true);
        $result = $invocation->proceed(); // 元のメソッドの実行.
        $time = microtime(true) - $start;

        var_dump($time);

        return $result;
    }
}
