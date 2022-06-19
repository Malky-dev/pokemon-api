<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): JsonResponse
    {

        $items = require "dataJSON/items.json";
        $pokedex = require "dataJSON/pokedex.json";
        $types = require "dataJSON/types.json";

        return $this->json([
            'items' => $items,
            'pokedex' => $pokedex,
            'types' => $types,
        ]);
    }
}
