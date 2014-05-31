<?php
/**
 * Created by PhpStorm.
 * User: takashi
 * Date: 2014/05/31
 * Time: 15:32
 */

namespace Koriym\Work\Module\Provider;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Ray\Di\ProviderInterface;

class MonologLoggerProvider implements ProviderInterface
{
    public function get()
    {
        $log = new Logger('monolog');
        $log->pushHandler(new StreamHandler(__DIR__ . '/../../../var/log/debug.log', Logger::DEBUG));
        return $log;
    }
}
