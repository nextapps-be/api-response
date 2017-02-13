<?php

namespace NextApps\ApiResponse\Tests\Laravel;

use Illuminate\Contracts\Routing\ResponseFactory;

class ResponseFake extends \NextApps\ApiResponse\Laravel\Response
{
    /**
     * @param array $array
     * @param array $headers
     * @return ResponseFactory
     */
    public function withArray(array $array, array $headers = array())
    {
        return (new ResponseFactoryFake())->json($array);
    }
}
