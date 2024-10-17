<?php

namespace App\DataFixtures;

use App\Entity\Series;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SeriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //Ajout des Séries de mangas à la bdd
        $seriesData =
        [
            ["title" => "Yona : Princesse de l'aube", "total_volumes" => 42],
            ["title" => "Sailor Moon - Nouvelle Édition", "total_volumes" => 12],
            ["title" => "Blue Spring Ride", "total_volumes" => 13],
            ["title" => "Takane & Hana", "total_volumes" => 18],
            ["title" => "Kingdom", "total_volumes" => 71],
            ["title" => "Tokyo Ghoul", "total_volumes" => 14],
            ["title" => "Solo Leveling", "total_volumes" => 14],
            ["title" => "Kaiju n°8", "total_volumes" => 12],
            ["title" => "Fullmetal Alchemist", "total_volumes" => 18],
            ["title" => "The Promised Neverland", "total_volumes" => 20],
            ["title" => "Demon Slayer", "total_volumes" => 23],
            ["title" => "20th Century Boys - Perfect Édition", "total_volumes" => 11],
            ["title" => "Spy x Family", "total_volumes" => 13],
            ["title" => "Blue Lock", "total_volumes" => 21],
            ["title" => "L'Attaque des Titans - Édition Colossale", "total_volumes" => 12],
            ["title" => "L'Amour et la Mort", "total_volumes" => 1],
            ["title" => "Blame! - Édition Deluxe", "total_volumes" => 6],
            ["title" => "Sidooh - Nouvelle Édition", "total_volumes" => 25],
            ["title" => "Fire Punch", "total_volumes" => 8],
            ["title" => "Adieu Eri", "total_volumes" => 1],
            ["title" => "Orange", "total_volumes" => 7],
            ["title" => "17 ans Une chronique du mal", "total_volumes" => 4],
            ["title" => "Le péché originel de Takopi", "total_volumes" => 2],
            ["title" => "Gannibal", "total_volumes" => 13],
            ["title" => "Les carnets de l'apothicaire", "total_volumes" => 13],

        ];

        foreach ($seriesData as $data)
        {
            $series = new Series();
            $series -> setSerieTitle($data['title']);
            $series -> setTotalVolumes($data['total_volumes']);
            $manager -> persist($series);
        }

        $manager->flush();
    }
}
