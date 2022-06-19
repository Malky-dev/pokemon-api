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

        $items = json_decode(file_get_contents("dataJSON/items.json", true));

        return $this->json(
            $items,
        );
    }
}
