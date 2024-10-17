<?php

namespace App\DataFixtures;

use App\Entity\MangaGender;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MangasGenderFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //Ajout des genres à la base de données
        $shojo = new MangaGender();
        $shojo->setNameGender('Shojo');
        $manager->persist($shojo);

        $shonen = new MangaGender();
        $shonen->setNameGender('Shonen');
        $manager->persist($shonen);

        $seinen = new MangaGender();
        $seinen->setNameGender('Seinen');
        $manager->persist($seinen);

        $manager->flush();
    }
}
