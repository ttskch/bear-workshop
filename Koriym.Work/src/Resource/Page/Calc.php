<?php

namespace Koriym\Work\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class Calc extends ResourceObject
{
    use ResourceInject;

    public function onGet($a, $b)
    {
        $add = $this->resource
            ->get
            ->uri('app://self/add')
            ->withQuery(['a' => $a, 'b' => $b])
            ->request();
        $this['a'] = $a;
        $this['b'] = $b;
        $this['add'] = $add;

        return $this;
    }
}
