<?php

namespace Ahmeti\ResponseService;

use Illuminate\Http\Response;

class ResponseService {

    private $vStatus=false;
    private $vMessage=false;
    private $vData=[];
    private $vResponseCode=200;
    private $vStatusCode;

    public function status(bool $status)
    {
        $this->vStatus=$status;
        return $this;
    }

    public function message(string $message)
    {
        $this->vMessage=$message;
        return $this;
    }

    public function data($data)
    {
        $this->vData=$data;
        return $this;
    }

    public function responseCode(int $responseCode)
    {
        $this->vResponseCode=$responseCode;
        return $this;
    }

    public function statusCode($statusCode)
    {
        $this->vStatusCode=$statusCode;
        return $this;
    }

    public function send()
    {
        if(!is_bool($this->vStatus)){
            return false;
        }

        if(empty($this->vMessage)){
            return false;
        }

        return Response::json([
            'status' => $this->vStatus,
            'message' => $this->vMessage,
            'data' => $this->vData,
            'status_code' => $this->vStatusCode,
        ], $this->vResponseCode);
    }
}