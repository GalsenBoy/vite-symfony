<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/app/{vuejsRoute}', name: 'app_home', requirements: ['vuejsRoute' => '.+'])]
    public function index($vuejsRoute): Response
    {
        return $this->render('base.html.twig', [
            'vuejs_route' => $vuejsRoute
        ]);
    }
}
