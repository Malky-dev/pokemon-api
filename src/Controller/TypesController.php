<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TypesController extends AbstractController
{
    #[Route('/types', name: 'app_types')]
    public function index(): JsonResponse
    {
        $types = require "dataJSON/types.json";

        return $this->json([
            'types' => $types,
        ]);
    }
}
