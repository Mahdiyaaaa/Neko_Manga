<?php

namespace App\DataFixtures;

use App\Entity\Status;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StatusFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $lu = new Status();
        $lu -> setNameStatu('Lu');
        $manager ->persist($lu);

        $a_lire = new Status();
        $a_lire -> setNameStatu('A lire');
        $manager ->persist($a_lire);

        $manager->flush();
    }
}
