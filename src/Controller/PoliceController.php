<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PoliceController extends AbstractController
{
    /**
     * @Route("/police", name="app_police")
     */
    public function index(): Response
    {
        return $this->render('police/index.html.twig', [
            'controller_name' => 'PoliceController',
        ]);
    }
}
