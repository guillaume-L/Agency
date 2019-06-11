<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PropertyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         for ($i = 1; $i <= mt_rand(5, 7 ); $i++){
            $property = new Property();
            $property->settitle('maison a vendre')
                     ->setdescription('maison de plein pied')
                     ->setsurface(90)
                     ->setrooms(5)
                     ->setbedrooms(2)
                     ->setfloor(1)
                     ->setprice(155000)
                     ->setheat(1)
                     ->setcity('ham')
                     ->setaddress('12 rue du dev')
                     ->setzipCode(80400)
                     ->setSold(false)
                     ->setcreatedAt(new \ DateTime());
         $manager->persist($property);

        $manager->flush();
         }
    }
}
