<?php

namespace Koriym\Work\Resource\App;

use BEAR\Resource\ResourceObject;

class Add extends ResourceObject
{

    public function onGet($a, $b)
    {
        $this['result'] = $a + $b;

        return $this;
    }
}
