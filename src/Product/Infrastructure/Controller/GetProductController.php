<?php

namespace Product\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GetProductController extends AbstractController
{
    public function __construct(
    ) {
    }

 #[Route('/api/products', name: 'get_products', methods: ['GET'])]
    public function __invoke(): JsonResponse
    {
        // print_r("hola");
        
        return $this->json([
            'status' => 'success',
            'message' => 'Hola desde el controlador de productos',
            'data' => [
                'producto1' => 'iPhone 13',
                'producto2' => 'Samsung Galaxy',
                'producto3' => 'Google Pixel'
            ]
        ]);
    }
}