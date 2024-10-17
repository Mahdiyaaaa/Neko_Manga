<?php

namespace App\DataFixtures;

use App\Entity\Roles;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RolesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //Ajout des roles à la base de données
        $customer = new Roles();
        $customer -> setNameRole('Customer');
        $manager -> persist($customer);

        $admin = new Roles();
        $admin -> setNameRole('Admin');
        $manager -> persist($admin);

        $manager->flush();
    }
}
