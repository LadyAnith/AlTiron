<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PruebasMetodosController extends AbstractController
{
    /**
     * @Route("/pruebas/metodos", name="pruebas_metodos1", methods= {"GET"})
     */
    public function index()
    {
        return $this->render('pruebas_metodos/index.html.twig', [
            'controller_name' => 'HA ENTRADO POR GET',
        ]);
    }

    /**
     * @Route("/pruebas/metodos", name="pruebas_metodos2", methods= {"POST"})
     */
    public function index2()
    {
        return $this->render('pruebas_metodos/index.html.twig', [
            'controller_name' => 'HA ENTRADO POR POST',
        ]);
    }

    /**
     * @Route("/pruebas/metodos", name="pruebas_metodos3", methods= {"PUT"})
     */
    public function index3()
    {
        return $this->render('pruebas_metodos/index.html.twig', [
            'controller_name' => 'HA ENTRADO POR PUT',
        ]);
    }

    /**
     * @Route("/pruebas/metodos", name="pruebas_metodos4", methods= {"DELETE"})
     */
    public function index4()
    {
        return $this->render('pruebas_metodos/index.html.twig', [
            'controller_name' => 'HA ENTRADO POR DELETE',
        ]);
    }
}
