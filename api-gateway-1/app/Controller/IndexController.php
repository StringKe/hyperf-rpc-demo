<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use App\Rpc\CalculatorServiceInterface;

class IndexController extends AbstractController
{
    public function index()
    {
        $user   = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        $client = $this->container->get(CalculatorServiceInterface::class);

        $result = $client->sum(1, 2);

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
            'rpc' => $result
        ];
    }
}
