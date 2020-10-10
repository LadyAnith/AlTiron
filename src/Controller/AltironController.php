<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Gira;


class AltironController extends AbstractController
{
    /**
     * @Route({"/", "/altiron"}, name="altiron")
     */
    public function index()
    {
        $giraRepo = $this->getDoctrine()->getRepository(Gira::class);

        $conciertos = $giraRepo->findAll();

        return $this->render('altiron/index.html.twig', [
            'conciertos'=>$conciertos,
        ]);
    }

     /**
     * @Route("/cookies", name="cookies")
     */
    public function cookies()
    {
        return $this->render('altiron/cookies.html.twig', [
        ]);
    }

      /**
     * @Route("/listadoGira", name="listadoGira")
     */
    public function listadoGira()
    {
        return $this->render('altiron/listadoConciertos.html.twig', [
        ]);
    }
}
