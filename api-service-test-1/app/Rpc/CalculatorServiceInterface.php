<?php

namespace App\Rpc;

interface CalculatorServiceInterface
{
    public function sum(int $v1, int $v2): string;
}