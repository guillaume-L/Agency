<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserGroupController extends AbstractController
{
    /**
     * @Route("/user/group", name="user_group")
     */
    public function index()
    {
        return $this->render('user_group/index.html.twig', [
            'controller_name' => 'UserGroupController',
        ]);
    }
}
