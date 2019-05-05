<?php

/**
 * Created by PhpStorm.
 * User: guihome
 * Date: 22/04/19
 * Time: 14:16
 */
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AgencyController extends abstractController
{
    /**
     * @Route("/agency", name="agency")
     */

    public function index()
    {
        return $this->render('agency/index.html.twig',[
            ""
        ]);
    }
}