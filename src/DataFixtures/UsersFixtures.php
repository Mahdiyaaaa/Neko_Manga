<?php

namespace App\DataFixtures;

use App\Entity\Roles;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsersFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        //Récupération du role 'Admin' depuis la bdd
        $admin_role  = $manager -> getRepository(Roles::class) -> find(2);

        if (!$admin_role)
        {
            throw new \Exception('Le rôle avec l\'id 2 n\'existe pas dans la base de données.');
        }

        //Ajout d'administrateurs à la bdd
        $Mahdiya = new Users();
        $Mahdiya -> setUsername('Mahdiya');
        $Mahdiya -> setMail('mahdiya@neko.manga.fr');
        $Mahdiya -> setPassword('@dmin_NekoManga.2024');
        $Mahdiya -> setIdRole($admin_role);
        $Mahdiya -> setPassword($this -> passwordHasher -> hashPassword($Mahdiya, '@dmin_Mahdiya_NK.2024'));
        $Mahdiya -> setAdminCode('8XR5MG79');
        $manager -> persist($Mahdiya);

        $Amel = new Users();
        $Amel -> setUsername('Amel');
        $Amel -> setMail('amel@neko.manga.fr');
        $Amel -> setIdRole($admin_role);
        $Amel -> setPassword($this -> passwordHasher -> hashPassword($Amel, '@dmin_Amel_NK.2024'));
        $Amel -> setAdminCode('82AJUU87');
        $manager -> persist($Amel);

        $manager->flush();
    }
}
