<?php

declare(strict_types=1);

namespace App\RabbitMQ\Consumer;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

class TestConsumer implements ConsumerInterface
{
    public function execute(AMQPMessage $msg): void
    {
        $message = json_decode($msg->body, true);
        if (null === $message || !array_key_exists('test', $message)) {
            return;
        }

        echo $message['test'];
    }
}
