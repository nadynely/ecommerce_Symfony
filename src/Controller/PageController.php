<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        //return $this->redirectToRoute('client_produit');

        $response = $this->forward('App\Controller\Client\ProduitController::index');
        return $response;
    }
}
