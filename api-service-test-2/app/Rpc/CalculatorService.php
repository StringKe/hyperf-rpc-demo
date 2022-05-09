<?php

namespace App\Rpc;

use Hyperf\RpcServer\Annotation\RpcService;

#[RpcService(name: "CalculatorService", protocol: "jsonrpc-http", server: "jsonrpc-http")]
class CalculatorService implements CalculatorServiceInterface
{
    public function sum(int $v1, int $v2): string
    {
        return 'SRV2 | '.$v1.'+'.$v2.'=>'.($v1 + $v2);
    }
}