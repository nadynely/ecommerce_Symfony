<?php

namespace App\Controller\Client;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/client/produit", name="client_produit")
     */
    public function index()
    {
        return $this->render('client/produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
}
