<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{ 
    #[Route('/movies', name: 'movies',)]
    public function index(): Response
    {
        return $this->render('index.html.twig',[
            'title'=>'avengers :Endgame'
        ]);
    }     
    /**
     * firstm
     *
     * @route("/first",name="first")
     */
    public function firstm():Response
    {
        return $this->render('view1.html.twig');  
    }    
    /**
     * firstview
     *
     * @route("/view")
     */
    public function firstview():Response{
        return $this->render('view2.html.twig',[
          'title'=>'PAGE ACCUEIL'
        ]);
    }
}
