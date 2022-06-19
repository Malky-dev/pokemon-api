<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ItemsController extends AbstractController
{
    #[Route('/items', name: 'app_items')]
    public function index(): JsonResponse
    {

        $items = require "dataJSON/items.json";

        return $this->json([
            'items' => $items,
        ]);
    }
}
