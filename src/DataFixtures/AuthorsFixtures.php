<?php

namespace App\DataFixtures;

use App\Entity\Authors;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuthorsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        //Ajout d'auteurs à la base de données :
        $natsu_hyuuga = new Authors();
        $natsu_hyuuga->setNameAuthor('Natsu Hyuuga');
        $manager->persist($natsu_hyuuga);

        $mizuho_kusanagi = new Authors();
        $mizuho_kusanagi->setNameAuthor('Mizuho Kusanagi');
        $manager->persist($mizuho_kusanagi);

        $naoko_takeuchi = new Authors();
        $naoko_takeuchi->setNameAuthor('Naoko Takeuchi');
        $manager->persist($naoko_takeuchi);

        $io_sakisaka = new Authors();
        $io_sakisaka->setNameAuthor('IO Sakisaka');
        $manager->persist($io_sakisaka);

        $yuki_shiwasu  = new Authors();
        $yuki_shiwasu->setNameAuthor('Yuki Shiwasu');
        $manager->persist($yuki_shiwasu);

        $yasuhisa_hara  = new Authors();
        $yasuhisa_hara->setNameAuthor('Yasuhisa Hara');
        $manager->persist($yasuhisa_hara);

        $sui_ishida = new Authors();
        $sui_ishida->setNameAuthor('Sui Ishida');
        $manager->persist($sui_ishida);

        $chu_gong = new Authors();
        $chu_gong->setNameAuthor('Chu-Gong');
        $manager->persist($chu_gong);

        $naoya_matsumoto = new Authors();
        $naoya_matsumoto->setNameAuthor('Naoy Matsumoto');
        $manager->persist($naoya_matsumoto);

        $hiromu_arakawa = new Authors();
        $hiromu_arakawa->setNameAuthor('Hiromu Arakawa');
        $manager->persist($hiromu_arakawa);

        $kaiu_shirai = new Authors();
        $kaiu_shirai->setNameAuthor('Kaiu Shirai');
        $manager->persist($kaiu_shirai);

        $koyoharu_gotouge = new Authors();
        $koyoharu_gotouge->setNameAuthor('Koyoharu Gotouge');
        $manager->persist($koyoharu_gotouge);

        $naoki_urasawa = new Authors();
        $naoki_urasawa->setNameAuthor('Naoki Urasawa');
        $manager->persist($naoki_urasawa);

        $tatsuya_endo = new Authors();
        $tatsuya_endo->setNameAuthor('Tatsuya Endo');
        $manager->persist($tatsuya_endo);

        $muneyuki_kaneshiro = new Authors();
        $muneyuki_kaneshiro->setNameAuthor('Muneyuki Kaneshiro');
        $manager->persist($muneyuki_kaneshiro);

        $hajime_isayama = new Authors();
        $hajime_isayama->setNameAuthor('Hajime Isyama');
        $manager->persist($hajime_isayama);

        $junji_ito = new Authors();
        $junji_ito->setNameAuthor('Junji Itô');
        $manager->persist($junji_ito);

        $tsutomu_nihei = new Authors();
        $tsutomu_nihei->setNameAuthor('Tsutomu Nihei');
        $manager->persist($tsutomu_nihei);

        $tsutomu_takahashi = new Authors();
        $tsutomu_takahashi->setNameAuthor('Tsutomu Takahashi');
        $manager->persist($tsutomu_takahashi);

        $tatsuki_fujimoto = new Authors();
        $tatsuki_fujimoto->setNameAuthor('Tatsuki Fujimoto');
        $manager->persist($tatsuki_fujimoto);

        $ichigo_takano  = new Authors();
        $ichigo_takano->setNameAuthor('Ichigo Takano');
        $manager->persist($ichigo_takano);

        $seiji_fujii = new Authors();
        $seiji_fujii->setNameAuthor('Seiji Fujii');
        $manager->persist($seiji_fujii);

        $taizan5 = new Authors();
        $taizan5->setNameAuthor('Taizan5');
        $manager->persist($taizan5);

        $masaki_ninomiya = new Authors();
        $masaki_ninomiya->setNameAuthor('Masaki Ninomiya');
        $manager->persist($masaki_ninomiya);

        $manager->flush();
    }
}
