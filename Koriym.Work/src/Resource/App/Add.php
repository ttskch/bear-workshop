<?php

namespace Koriym\Work\Resource\App;

use BEAR\Resource\ResourceObject;
use Psr\Log\LoggerInterface;
use Ray\Di\Di\Inject;
use Koriym\Work\Annotation\BenchMark;

class Add extends ResourceObject
{
    private $logger;

    /**
     * @inject
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @BenchMark
     */
    public function onGet($a, $b)
    {
        $this['result'] = $a + $b;

        $this->logger->debug(sprintf('%d + %d = %d', $a, $b, $this['result']));

        return $this;
    }
}
