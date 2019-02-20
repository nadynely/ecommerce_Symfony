<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Security;

class UserController extends AbstractController
{

    /**
     * @Route("/profil", name="user_profil")
     * @IsGranted("ROLE_USER")
     */
    public function index(Security $security)

    {   $user = $security->getUser();

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'user' => $user,
        ]);
    }
}
