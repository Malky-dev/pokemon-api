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

        $pokedex = json_decode(file_get_contents("dataJSON/pokedex.json", true));

        return $this->json(
            $pokedex,
        );
    }
}
