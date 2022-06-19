<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PokedexController extends AbstractController
{
    #[Route('/pokedex', name: 'app_pokedex')]
    public function index(): JsonResponse
    {

        $pokedex = require "dataJSON/pokedex.json";

        return $this->json([
            'pokedex' => $pokedex,
        ]);
    }
}
