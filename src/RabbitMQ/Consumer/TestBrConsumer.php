<?php

declare(strict_types=1);

namespace App\RabbitMQ\Consumer;

use App\Entity\TestRabbitMq;
use Doctrine\ORM\EntityManagerInterface;
use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

readonly class TestBrConsumer implements ConsumerInterface
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    public function execute(AMQPMessage $msg): void
    {
        $message = json_decode($msg->body, true);
        if (null === $message || !array_key_exists('test-br', $message)) {
            return;
        }

        $newTest = (new TestRabbitMq())->setName($message['test-br']);
        $this->entityManager->persist($newTest);
        $this->entityManager->flush();
    }
}
