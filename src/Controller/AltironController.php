<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AltironController extends AbstractController
{
    /**
     * @Route({"/", "/altiron"}, name="altiron")
     */
    public function index()
    {
        return $this->render('altiron/index.html.twig', [
            'controller_name' => 'AltironController',
        ]);
    }

     /**
     * @Route("/cookies", name="cookies")
     */
    public function cookies()
    {
        return $this->render('altiron/cookies.html.twig', [
            'controller_name' => 'AltironController',
        ]);
    }

      /**
     * @Route("/listadoGira", name="listadoGira")
     */
    public function listadoGira()
    {
        return $this->render('altiron/listadoConciertos.html.twig', [
            'controller_name' => 'AltironController',
        ]);
    }
}
