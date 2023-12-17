<?php

declare(strict_types=1);

namespace App\Service;

use App\RabbitMQ\Producer\TestProducer;

readonly class TestRabbitService
{
    public function __construct(private TestProducer $testProducer)
    {
    }

    public function testing(): void
    {
        $message = json_encode(['test' => __METHOD__.' 1']);
        $this->testProducer->publish($message);
    }
}