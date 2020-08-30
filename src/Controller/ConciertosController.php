<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Gira;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ConciertosController extends AbstractController
{
    /**
     * @Route("/conciertos", name="conciertos")
     */
    public function index()
    {

            //OBTENER listado conciertos 

            //volcar el listado en el render:



        return $this->render('conciertos/index.html.twig', [
            'controller_name' => 'ConciertosController',
            //AQUI se meteria la variable del listado mira lo que tienes con martin
        ]);
    }

    /**
     * @Route("/altaConcierto", name="create_concert", methods={"POST"})
     */
    public function altaConcierto(Request $request): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: altaConcierto(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $gira = new Gira();
        /*
         $gira->setFecha(new DateTime('2020-05-25'))
            ->setNombre('Detonante')
            ->setLugar('Poligono')
            ->setCoordenadas('norte y sur')
            ->setPrecio(3)
            ->setWebs('www.eso.com')
            ->setPrecioVisible(true)
            //Setear fechas de creacion y update
            ->updatedTimestamps();
*/
    
        $gira->setFecha(new DateTime($request->request->get('fecha')))
            ->setNombre($request->request->get('nombre'))
            ->setLugar($request->request->get('lugar'))
            ->setCoordenadas($request->request->get('coordenadas'))
            ->setPrecio($request->request->get('precio'))
            ->setWebs($request->request->get('webs'))
            ->setPrecioVisible($request->request->get('precioVisible'))
            //Setear fechas de creacion y update
            ->updatedTimestamps();
            
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($gira);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new concert with id '.$gira->getId());
    }
}