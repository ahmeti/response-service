# Simple Api Response Service

## Example 01. Simple of use in Controller
```php
<?php

namespace App\Http\Controllers;

use Ahmeti\ResponseService\Facades\ResponseService;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return ResponseService::status(true)
            ->message('Hi Dear!')
            ->send();
    }
}
```
**RESULT :**
```json
{
  "status": true,
  "message": "Hi Dear!",
  "data": [],
  "status_code": null
}
```

## Example 02. Advanced of use in Controller
```php
<?php

namespace App\Http\Controllers;

use Ahmeti\ResponseService\Facades\ResponseService;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return ResponseService::status(true)
            ->message('Hi Dear!')
            ->data(['key1'=>'value1', 'key2'=>'value2'])
            ->statusCode('A101')
            ->responseCode(200)
            ->send();
    }
}
```
**RESULT :**

```
Response Headers
status: 200
```
```json
{
  "status": true,
  "message": "Hi Dear!",
  "data": {
    "key1": "value1",
    "key2": "value2"
  },
  "status_code": "CODE100"
}
```
