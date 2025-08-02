<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ProductApiController extends AbstractController{

    #[Route('api/products')]
    public function getCollection(): JsonResponse
    {
        $products = [
            [
                "name" => "Laptop",
                "price" => 1200.00,
                "category" => "Electronics",
                "in_stock" => true
            ],
            ["name" => "Smart Phone",
                "price" => 800.00,
                "category" => "Electronics",
                "in_stock" => true
            ],
            ["name" =>  "Coffee Maker" ,
                "price" => 75.00,
                "category" => "Home Appliances",
                "in_stock" => false
            ]
        ];

        return $this->json($products);
    }

}