<?php

namespace Ahmeti\ResponseService\Facades;

use Illuminate\Support\Facades\Facade;

class ResponseService extends Facade {
    protected static function getFacadeAccessor() { return 'ahmeti-response-service'; }
}