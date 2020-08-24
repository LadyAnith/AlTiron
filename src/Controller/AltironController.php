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
}
