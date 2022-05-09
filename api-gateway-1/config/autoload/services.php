<?php

return [
    'enable' => [
        'discovery' => false,
        'register' => false,
    ],
    'consumers' => [
        [
            "name" => "CalculatorService",
            'service' => \App\Rpc\CalculatorServiceInterface::class,
            'id' => \App\Rpc\CalculatorServiceInterface::class,
            'protocol' => 'jsonrpc-http',
            'load_balancer' => 'random',
            'nodes' => [
                ['host' => '127.0.0.1', 'port' => 9502],
                ['host' => '127.0.0.1', 'port' => 9503],
            ],
        ]
    ],
    'providers' => [],
    'drivers' => [],
];