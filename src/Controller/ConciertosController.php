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
        $entityManager = $this->getDoctrine()->getManager();
        $giraRepo = $this->getDoctrine()->getRepository(Gira::class);

        $conciertos = $giraRepo->findAll();
    
    

        return $this->render('conciertos/index.html.twig', [
            'controller_name' => 'ConciertosController',
              //AQUI se meteria la variable del listado 
            'conciertos'=>$conciertos,
            
            
          
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
        $fecha_concierto = $request->request->get('fecha');
        $hora_concierto = $request->request->get('hora');
        $datetime_concierto = $fecha_concierto . ' ' . $hora_concierto;

        $gira->setFecha(new DateTime($datetime_concierto))
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

        return $this->redirectToRoute('conciertos');
    }

    /**
     * @Route("/bajaConcierto/{id}", name="delete_concert")
     */
    public function bajaConcierto($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $giraRepo = $this->getDoctrine()->getRepository(Gira::class);

        $concierto = $giraRepo->find($id);

        $entityManager->remove($concierto);
        $entityManager->flush();

        $conciertos = $giraRepo->findAll();
        
        return $this->redirectToRoute('conciertos');
        
    }


    /**
     * @Route("/editarConcierto/{id}", name="update_concert", methods={"GET"})
     */
    public function editarConcierto($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $giraRepo = $this->getDoctrine()->getRepository(Gira::class);

        //Obtener los datos del concierto que queremos actualizar
        $concierto =  $giraRepo->find($id);

        if (!$concierto) {
            throw $this->createNotFoundException(
                'No existe concierto con id: '.$id
            );
        }
        
        $conciertos = $giraRepo->findAll();
        return $this->render('conciertos/index.html.twig', [
            'controller_name' => 'ConciertosController',
              //Estos son los conciertos del listado
            'conciertos'=>$conciertos, 
            //Este es el concierto que vas a actualizar
            'concierto'=>$concierto, 
            
 
        ]);
    }

    /**
     * @Route("/editarConcierto/{id}", name="update_concert2", methods={"POST"})
     */
    public function editarConcierto2(Request $request, $id):Response
    {

        //TODO mirar por que no actualiza la hora
        
        $entityManager = $this->getDoctrine()->getManager();
        $giraRepo = $entityManager->getRepository(Gira::class);

        $concierto = $giraRepo->find($id);

        if (!$giraRepo) {
            throw $this->createNotFoundException(
                'No existe concierto con id: '.$id
            );
        }
        $fecha_concierto = $request->request->get('fecha');
        $hora_concierto = $request->request->get('hora');
        $datetime_concierto = $fecha_concierto . ' ' . $hora_concierto;

        $concierto->setFecha(new DateTime($datetime_concierto))
            ->setNombre($request->request->get('nombre'))
            ->setLugar($request->request->get('lugar'))
            ->setCoordenadas($request->request->get('coordenadas'))
            ->setPrecio($request->request->get('precio'))
            ->setWebs($request->request->get('webs'))
            ->setPrecioVisible($request->request->get('precioVisible'))
            ->updatedTimestamps();
            
        $entityManager->flush();

        return $this->redirectToRoute('conciertos');
    }
}
