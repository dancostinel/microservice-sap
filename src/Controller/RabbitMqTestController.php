<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\TestRabbitService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class RabbitMqTestController extends AbstractController
{
    #[Route('/testing-rabbit-mq', name: 'testing_rabbitmq_route', methods: 'GET')]
    public function testingRabbitMq(TestRabbitService $testRabbitService): JsonResponse
    {
        $testRabbitService->testing();

        return new JsonResponse(['sent' => 'oki']);
    }
}
