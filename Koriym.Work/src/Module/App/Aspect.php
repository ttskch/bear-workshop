<?php

namespace Koriym\Work\Module\App;

use BEAR\Package;
use Ray\Di\AbstractModule;

class Aspect extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        /*
        $this->bindInterceptor(
             $this->matcher->any(),
             $this->matcher->annotatedWith('Koriym\Work\Annotation\Bar'),
             [$this->requestInjection('Koriym\Work\Interceptor\FooInterceptor')]
        );
        */
    }
}
