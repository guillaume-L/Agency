<?php

namespace App\Controller;

use App\Entity\Property;
use App\Form\PropertyType;
use App\Repository\PropertyRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @Route("/property", name="read")
     */
    public function index(PropertyRepository $repo)
    {

        $property = $repo->findAll();
        return $this->render('property/index.html.twig', [
            'controller_name' => 'PropertyController',
            'property' => $property
        ]);
    }



    /**
     * @Route("/property/show", name="property.show")
     *
     */
    public function show(Request $request, ObjectManager $manager )
    {
        $property = new Property();
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $property->setCreatedAt(new \DateTime())
                     ->setProperty($property);
            $manager->persist($property);
            $manager->flush();
            return $this->redirectToRoute('property.show',[
                ]);
        }
        return $this->render('property/_propertyForm.html.twig',[

                'property_form' => $form->createView()
        ]);
    }


}



