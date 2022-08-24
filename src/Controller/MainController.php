<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    /** * @Route("/sorties", name="main_connexion") */
    public function connexion(): Response
    {
        return $this->render('sorties/list.html.twig');
    }

}