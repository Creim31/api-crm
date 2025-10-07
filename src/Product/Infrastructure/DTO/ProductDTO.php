<?php

declare(strict_types=1);

namespace Product\Infrastructure\DTO;

use Product\Infrastructure\Controller\GetProductController;

#[ApiResource(
    collectionOperations: [
        'getProduct' => [
            'method' => 'POST',
            'path' => '/product/getProduct',
            'controller' => GetProductController::class,
            'read' => false,
            'validate' => false,
            'deserialize' => false,
            'input' => false,
            'output' => false,
            'openapi_context' => [
            ]
        ]
    ]
)]
final class MailRoundcube
{
    #[\ApiPlatform\Core\Annotation\ApiProperty(identifier: true)]
    public ?int $id = null;
}