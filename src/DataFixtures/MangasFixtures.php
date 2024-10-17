<?php

namespace App\DataFixtures;

use App\Entity\Authors;
use App\Entity\Mangas;
use App\Entity\Series;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MangasFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //Ajout des mangas à la bdd
        $mangasData =
        [
            //Yona : Princesse de l'aube
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2014-06-02'), //Sorti le 2 juin 2014
                'synopsis' => "Yona, princesse du royaume de Kôka, a grandi dans l’insouciance, choyée par le roi et protégée par son garde du corps et ami d’enfance, le puissant guerrier, Hak. À l’approche de ses 16 ans, Yona est heureuse : son cousin et amour secret, Soo-won, vient lui rendre visite pour célébrer son anniversaire. Mais ce soir-là, une terrible tragédie survient et sa vie va être bouleversée à jamais !",
                'manga_cover' => 'Yona_princess_de_laube_1.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2014-08-20'),
                'synopsis' => "Yona, princesse du royaume de Kôka, est élevée et choyée par son père, le roi, et protégée par son garde du corps et ami d’enfance, Hak. Mais le jour de son seizième anniversaire, son destin bascule lorsque son cousin Soo-won, l’élu de son cœur, tue le père de Yona de ses propres mains ! Fuyant le château, elle va apaiser les blessures de son cœur à Fûga, ville natale de Hak. Mais le répit est de courte durée ! La ville devient très vite la cible de la tribu du feu qui s’est ralliée à Soo-won. Yona va-t-elle laisser ses amis de la tribu du vent souffrir ainsi ?",
                'manga_cover' => 'Yona_princess_de_laube_2.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2014-10-01'),
                'synopsis' => "Suivant le conseil de Mundok, Yona et Hak partent à la recherche d’un prêtre ayant la capacité de prédire l’avenir. Mais, peu après leur départ de Fûga, ils sont attaqués par la tribu du feu ! Acculés par les soldats, ils tombent du haut d’une falaise et Hak est gravement blessé... Par chance, ils sont recueillis et soignés par deux étranges personnages... Yona va-t-elle trouver le prêtre ? Que lui réserve l’avenir qu’il va lui prédire ?",
                'manga_cover' => 'Yona_princess_de_laube_3.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2014-12-03'),
                'synopsis' => "Selon les prédictions d’Ik-soo, le prêtre, Yona doit se mettre en quête des quatre mythiques guerriers dragons ! C’est ainsi qu’elle prend la route accompagnée de Hak et Yeon. Dans un village nimbé de brume, ils rencontrent Ki-jae, le Dragon blanc, qui jure à Yona de lui être loyal et l’accompagne dans son périple. Par chance, le jeune homme est capable de sentir la présence des autres Dragons, la joyeuse troupe suit donc la piste de Seiryû, le Dragon bleu. Mais la suite du voyage ne va pas être de tout repos...",
                'manga_cover' => 'Yona_princess_de_laube_4.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2015-02-04'),
                'synopsis' => "Yona et les siens sont toujours prisonniers de la caverne, mais la princesse est bien décidée à ne pas se laisser abattre et à retrouver Hak qui, de son côté, fait des efforts désespérés pour la libérer. Mais heureusement Seiryû leur apporte son aide ! Le petit groupe fait ensuite route sur le territoire de la tribu de la terre, en direction du port d'Awa, car Ki-jae y a ressenti la présence d'un autre Dragon de la légende. L'atmosphère de la petite ville éveille tout de suite les instincts de Hak. Entre corruption, pirates et trafic d'esclaves, il ne va pas lui être facile de protéger Yona. Pire, il ne cesse de tomber sur un drôle d'individu qui le place à chaque fois dans des situations embarrassantes, voire dangereuses...",
                'manga_cover' => 'Yona_princess_de_laube_5.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2015-04-15'),
                'synopsis' => "Dans la ville portuaire d’Awa, Yona et ses amis ont enfin trouvé le Dragon vert en la personne du pirate Jae-ha mais ce dernier tient à sa liberté et refuse de suivre la princesse. Elle respecte sa décision mais souhaite quand même aider les pirates à lutter contre le terrible commerce de Yang Kum-ji qui fait régner la peur dans la ville. Pour prouver au capitaine Gi-gan qu’elle est assez forte pour participer à ce combat, elle doit mener à bien une épreuve au péril de sa vie…",
                'manga_cover' => 'Yona_princess_de_laube_6.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2015-06-17'),
                'synopsis' => "Yona et ses amis se sont alliés à la bande de pirates à laquelle appartient Jae-ha, le Dragon vert, afin de libérer la ville d’Awa du joug du terrible Yang Kum-ji. Accompagné de Yeon, la princesse s’infiltre parmi les victimes du trafic d’esclaves. Afin d’indiquer le bateau sur lequel sont retenues les pauvres malheureuses, ils doivent tirer un feu d’artifice. Mais tout ne va pas se dérouler comme prévu ! Quelle sera l’issue de la bataille pour la libération d’Awa ?",
                'manga_cover' => 'Yona_princess_de_laube_7.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2015-09-02'),
                'synopsis' => "Yona a abattu le terrible Yang Kum-ji et a libéré la ville d’Awa. L’heure du départ a sonné et Jae-ha, le Dragon vert, accepte finalement de se joindre à la princesse. Il ne manque plus qu’Ôryu, le Dragon jaune pour accomplir la prophétie… Vont-ils le trouver facilement ? Pendant ce temps, Soo-Won rend visite au Général Geun-tae au château de la tribu de la terre…",
                'manga_cover' => 'Yona_princess_de_laube_8.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2015-10-21'),
                'synopsis' => "Avec l’arrivée du Dragon jaune, Zeno, les quatre Dragons sont enfin au complet ! Pour demander conseil à Ik-soo sur la suite de leur périple, Yona et les autres se dirigent vers la région natale de Yeon, sur les terres de la Tribu du feu. En plus d’être une région aride, les habitants sont soumis à de lourds impôts et contraints de mener une vie miséreuse. Yona ne peut contenir son indignation face aux fonctionnaires tyranniques. Comment protéger les villageois ?!",
                'manga_cover' => 'Yona_princess_de_laube_9.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2015-12-16'),
                'synopsis' => "Yona et sa bande se font passer pour des brigands afin de protéger les villages de la tribu du feu des fonctionnaires tyranniques. De son côté, Kang Tae-jun, fils cadet du chef de la tribu du feu, est envoyé au village de Katan en expédition punitive afin de décimer les hors-la-loi. Là-bas, il entend la voix de Yona qu'il était pourtant censé avoir tuée ! Troublé, Tae-jun alerte par erreur les renforts alliés. Que va faire Yona face au danger qui menace le village ?!",
                'manga_cover' => 'Yona_princess_de_laube_10.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2016-02-17'),
                'synopsis' => "Après avoir confié le peuple de la Tribu du feu à Kang Tae-jun, Yona et ses amis reprennent la route en quête d’une céréale qui pourrait pousser sur ces terres arides. Dans ce but ils se dirigent vers l’Empire de Kai, un pays aux conditions climatiques encore plus rudes. Aux cours du voyage, Yona continue de s’entraîner à l’escrime avec Hak. Ce dernier prend alors une décision qui risque de changer ses relations avec la princesse… Nos héros vont-ils trouver une solution pour nourrir le peuple du feu ? ",
                'manga_cover' => 'Yona_princess_de_laube_11.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2016-04-20'),
                'synopsis' => "Yona et sa bande se font passer pour des brigands afin de protéger les villages de la tribu du feu des fonctionnaires tyranniques. De son côté, Kang Tae-jun, fils cadet du chef de la tribu du feu, est envoyé au village de Katan en expédition punitive afin de décimer les hors-la-loi. Là-bas, il entend la voix de Yona qu'il était pourtant censé avoir tuée ! Troublé, Tae-jun alerte par erreur les renforts alliés. Que va faire Yona face au danger qui menace le village ?!",
                'manga_cover' => 'Yona_princess_de_laube_12.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2016-08-24'),
                'synopsis' => "Le Général de la Tribu du feu, Kang Soo-jin, s’est allié avec Lee Hazara, le dirigeant de la Province de Sen, pour attaquer le royaume de Kôka ! Mais il semblerait que Soo-won était préparé à cet affrontement et attend les armées de pied ferme. Quant à Yona et sa bande, parviendront-ils à rester simples spectateurs de cette bataille sanglante ?",
                'manga_cover' => 'Yona_princess_de_laube_13.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 14',
                'publication_date' => new DateTime('2016-10-20'),
                'synopsis' => "Soo-won a écrasé la coalition formée par Kang Soo-jin et Lee Hazara. Grâce à cette victoire, le jeune roi peut continuer à réorganiser peu à peu le royaume de Kôka. Pendant ce temps, le voyage de Yona se poursuit sur les terres de la Tribu de l’eau, la plus belle région du pays de Kôka. Malheureusement, arrivés à Shisen, nos amis se rendent vite compte que la population est victime d’une sinistre drogue, le nadai… Yona et les quatre dragons vont mener l’enquête !",
                'manga_cover' => 'Yona_princess_de_laube_14.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 15',
                'publication_date' => new DateTime('2016-12-14'),
                'synopsis' => "Alors qu’elle tente de sauver le peuple de la Tribu de l’eau, victime d’une terrible drogue, Yona fait la rencontre de Lili, la fille du général An Joon-gi. Cette dernière est prête à tout pour mettre un terme au fléau qui ravage les terres de sa tribu. Mais Yona est blessée au cours d’une confrontation avec le traficant du nadai. Ses amis arrivent juste à temps pour la tirer de ce mauvais pas ! Vont-ils se pardonner de n’avoir pas su protéger leur princesse ?",
                'manga_cover' => 'Yona_princess_de_laube_15.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 16',
                'publication_date' => new DateTime('2017-02-15'),
                'synopsis' => "La flotte du Kai du Sud menace la côte de Sensui ! Yona et ses amis vont devoir trouver une stratégie pour défendre les terres de la Tribu de l’eau. Cela implique de faire équipe avec Soo-won qui se présente comme le garde du corps de Lili… Quelle va être la réaction de Hak lorsqu’il va se retrouver face à son ancien ami ?",
                'manga_cover' => 'Yona_princess_de_laube_16.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 17',
                'publication_date' => new DateTime('2017-04-19'),
                'synopsis' => "Après avoir quitté les terres de la tribu de l’eau, Yona et sa bande se dirigent vers la tribu de la terre et arrivent dans un village situé non loin de la frontière avec le Kai. Ils y font la rencontre d’un jeune garçon prénommé Kalgan. Coincé dans le pays de Kôka, Yona et ses comparses l’aident à passer la frontière. Mais que vont-ils trouver de l’autre côté, dans le Kai du sud ?",
                'manga_cover' => 'Yona_princess_de_laube_17.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 18',
                'publication_date' => new DateTime('2017-06-14'),
                'synopsis' => "Alors que Yona et ses compagnons se défendent farouchement contre les attaques de l’armée de Kai, Zeno, blessé mortellement, se relève... Il semble guérir instantanément de ses blessures. Il se lance alors dans la bataille pour aider ses amis acculés et sauver Yona. Mais qui est donc ce Dragon jaune et quel est son mystérieux pouvoir ?",
                'manga_cover' => 'Yona_princess_de_laube_18.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 19',
                'publication_date' => new DateTime('2017-08-23'),
                'synopsis' => "Alors que toute la bande s’affaire à monter le campement pour la nuit, Shin-ah, parti chercher du bois dans la forêt, tombe nez à nez avec une menaçante statue de dragon. Pour sauver Ao, il tranche la tête du dragon de pierre, libérant une présence inquiétante, jusque-là scellée dans la statue...",
                'manga_cover' => 'Yona_princess_de_laube_19.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 20',
                'publication_date' => new DateTime('2017-10-18'),
                'synopsis' => "Yona et Lili ont été enlevées et envoyées au pays de Sei... Elles sont condamnées à travailler comme esclaves à la construction d’un fort. Lorsqu’elles découvrent sur place qu’on leur sert de l’alcool au nadai à la place de l’eau, elles refusent obstinément d’en boire. Pendant que Hak et les quatre dragons sont à leur recherche et s’infiltrent au pays de Sei, leur corps atteint progressivement ses limites... ",
                'manga_cover' => 'Yona_princess_de_laube_20.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 21',
                'publication_date' => new DateTime('2017-12-13'),
                'synopsis' => "Hak et ses comparses ainsi que Soo-won et son armée attaquent les forts du pays de Sei pour sauver Yona et Lili. Mais, pour protéger Yona qui est blessée, Lili a attiré l’attention des gardes et s’est fait capturer. Elle est condamnée à mort… Yona, seule dans la forêt, se débat pour la secourir. Tous tentent désespérément de sauver Lili. Mais le temps leur est compté…",
                'manga_cover' => 'Yona_princess_de_laube_21.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 22',
                'publication_date' => new DateTime('2018-02-21'),
                'synopsis' => "Après les terribles aventures aux forts du pays de Sei, Yona prend peu à peu conscience de ses sentiments pour Hak et se confie à son amie Lili. En ville, la rumeur grossit de quatre guerriers dragons et d’une jeune fille aux cheveux rouges qui apparaîtraient sur les champs de bataille… Alors qu’ils quittent le pays de Sei par les montagnes à la frontière avec le pays de Shin, Yona et sa bande tombent sur un groupe d’hommes masqués...",
                'manga_cover' => 'Yona_princess_de_laube_22.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 23',
                'publication_date' => new DateTime('2018-04-18'),
                'synopsis' => "À l’approche d’une éventuelle guerre contre le pays de Kôka, le pays de Shin est divisé. Quand, ceux qui veulent la guerre, mettent le feu à la demeure de la pacifiste princesse Tao, Zeno se retrouve coincé au milieu des flammes en tentant de la protéger. Deux idéaux s’opposent dans un conflit sans merci.",
                'manga_cover' => 'Yona_princess_de_laube_23.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 24',
                'publication_date' => new DateTime('2018-06-20'),
                'synopsis' => "Arrivés à Ryûsui, Yona et Hak contactent l’informateur Ogi pour lui demander d’envoyer un message à Soo-won. Ils espèrent ainsi empêcher une guerre entre le pays de Shin et celui de Kôka. Jae-ha et les autres dragons, pris en otage à Shin, se remettent doucement de leurs blessures grâce aux bons soins de Mizari dont la curiosité à l’égard des dragons est sans bornes. Mais la guerre parait inévitable et la vie des quatre dragons et de Yeon ne semble tenir qu’à un fil.",
                'manga_cover' => 'Yona_princess_de_laube_24.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 25',
                'publication_date' => new DateTime('2018-08-22'),
                'synopsis' => "Yona et Soo-won se retrouvent face à face. Rassemblant son courage, la princesse ira jusqu’au bout pour négocier une rencontre entre le pays de Shin et le pays de Kôka afin d’empêcher la guerre. Déterminée, elle fera tout pour protéger les dragons et le peuple de Shin.",
                'manga_cover' => 'Yona_princess_de_laube_25.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 26',
                'publication_date' => new DateTime('2018-11-21'),
                'synopsis' => "Les dragons ont laissé exploser leur pouvoir pour protéger Yona mais ce n’est pas sans conséquence. Après la mort de Neguro, et la blessure de Yotaka, les “cinq étoiles” sont en mauvaise posture et la Princesse Kôren est sans protection face au piège du prêtre Gobi. Mais cette princesse et sa jeune sœur ne se laisseront pas faire et elles feront tout pour sauver leur pays et tenter de négocier la paix.",
                'manga_cover' => 'Yona_princess_de_laube_26.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 27',
                'publication_date' => new DateTime('2019-03-06'),
                'synopsis' => "Le lendemain de la déclaration d'amour de Hak, Yona est troublée par les moindres faits et gestes du jeune homme. De son côté, Zeno explique que les blessures des quatre dragons guériraient mieux près du château de Hiryû, et suggère qu'ils se mettent en route pour Kûto. Au même moment, les terres de la tribu du feu subissent l'invasion des troupes armées de l'empire de Kai, situé au nord…",
                'manga_cover' => 'Yona_princess_de_laube_27.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 28',
                'publication_date' => new DateTime('2019-07-03'),
                'synopsis' => "Lors de la bataille contre l’empire de Kai, Yona et les dragons portent secours à la tribu du feu. Les membres de la tribu du feu, fervents adorateurs du roi Hiryû, découvrent ainsi l’existence de nos héros et la nouvelle parvient aux oreilles de Soo-won et Kye-sook. Grâce à l’aide de Tae-jun, Yona et ses amis trouvent refuge au château de Saika mais ils sont rapidement rejoints par Kye-sook qui vient s’entretenir de la sécurisation des frontières nord du pays avec la tribu du feu.",
                'manga_cover' => 'Yona_princess_de_laube_28.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 29',
                'publication_date' => new DateTime('2019-11-13'),
                'synopsis' => "Victimes des manigances du prêtre Gobi, Yona et ses amis sont emmenés de force jusqu'à l'empire de Kai. Ayant repéré la puissance de Jae-ha, Cuerbo prend  Yona en otage et contraint Jae-ha à se soumettre à ses ordres. De son côté, afin de retrouver Yona et les autres captifs, Hak accepte la proposition de Kye-sook et décide de s'allier avec l'armée du pays de Kôka...",
                'manga_cover' => 'Yona_princess_de_laube_29.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 30',
                'publication_date' => new DateTime('2020-03-18'),
                'synopsis' => "En pleine bataille opposant le pays de Kôka à la province de Sen, les quatre dragons se prêtent au jeu des simulacres pour gagner du temps. En toute première ligne, Hak, qui se bat comme un forcené, finit par rencontrer Cuerbo et s’engage dans un duel acharné contre lui. Au même moment, le prêtre Gobi se rend au château de la province de Sen et fait irruption devant Yona et Yûlan, la femme de Cuerbo.",
                'manga_cover' => 'Yona_princess_de_laube_30.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 31',
                'publication_date' => new DateTime('2020-07-10'),
                'synopsis' => "Sorti vainqueur de la bataille contre la province de Sen, le pays de Kôka agrandit son territoire. Mais Hak est grièvement blessé, et Yona n’a presque plus de voix... Réquisitionné pour soigner les soldats blessés au combat, Yeon s’intéresse aux techniques de soins de la tribu du ciel. Que peut bien avoir derrière la tête le conseiller Kye-sook lorsqu’il lui propose de l’accompagner au château de Hiryû pour y apprendre la médecine ?",
                'manga_cover' => 'Yona_princess_de_laube_31.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 32',
                'publication_date' => new DateTime('2021-02-03'),
                'synopsis' => "Le tournoi de présentation officielle des quatre dragons a commencé. Ki-jae et Jae-ha, qui affrontent respectivement Joo-doh et Geun-tae, font une telle démonstration de force qu’ils en détruisent l’arène… Les exploits des guerriers dragons ajoutés au retour de la princesse Yona et de La Foudre mettent le peuple en liesse. Mais que ressent Hak, tenu à l’écart de Yona et des dragons ?",
                'manga_cover' => 'Yona_princess_de_laube_32.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 33',
                'publication_date' => new DateTime('2021-06-09'),
                'synopsis' => "Privée de contacts avec Hak et les quatre dragons, Yona demande une entrevue avec Soo-won mais on la lui refuse. Si bien qu’un soir, elle quitte sa chambre discrètement pour rejoindre Soo-won dans son bureau. Mais une fois face à lui, Yona peine à trouver les mots. De leur côté, les dragons sont réquisitionnés pour un entraînement militaire… Également inclus dans ce volume, un court épisode bonus sur l’enfance de Hak !",
                'manga_cover' => 'Yona_princess_de_laube_33.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 34',
                'publication_date' => new DateTime('2021-12-08'),
                'synopsis' => "Yona poursuit sa lecture du journal de Yon-hi, la mère de Soo-won. Elle découvre que Yu-hon a exécuté les prêtres qui avaient découvert que sa femme descendait du roi Hiryû. Neuf ans plus tard, Yon-hi, qui a donné naissance à son fils quelques années auparavant, fait la connaissance d’une femme qui s’avère être Kashi, prêtresse rescapée du meurtre perpétré par son mari…",
                'manga_cover' => 'Yona_princess_de_laube_34.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 35',
                'publication_date' => new DateTime('2022-03-16'),
                'synopsis' => "Pour remplacer Soo-won, qui souffre de la maladie écarlate, Yona siège à la réunion avec les représentants de l’Empire de Kai. Elle parvient à se faire respecter et à discuter à pied d’égalité avec eux, mais l’un des émissaires décède brutalement, et la jeune princesse se retrouve accusée du meurtre…",
                'manga_cover' => 'Yona_princess_de_laube_35.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 36',
                'publication_date' => new DateTime('2022-07-13'),
                'synopsis' => "Après avoir réussi à quitter sa cellule, Mei Niang rencontre Hak mais ce dernier refuse de s’évader avec elle. Elle s’enfuit donc seule mais elle finit par perdre connaissance et est secourue par Yeon. Pendant ce temps, sur les terres du Kai du sud, on s’inquiète de son absence…",
                'manga_cover' => 'Yona_princess_de_laube_36.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 37',
                'publication_date' => new DateTime('2022-02-11'),
                'synopsis' => "À la veille d’une bataille qui opposera le pays de Kôka au Kai du sud, Yona se prépare à rejoindre le front. De leur côté, Hak et Yeon traversent la province de Kin à la recherche de la milleplantes. Mais Geun-tae ayant été sérieusement blessé, Hak prend la tête des troupes affaiblies et se retrouve en première ligne pour repousser l’ennemi…",
                'manga_cover' => 'Yona_princess_de_laube_37.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 38',
                'publication_date' => new DateTime('2023-04-19'),
                'synopsis' => "Afin de préparer la bataille avec le Kai du sud, le pays de Kôka rassemble toutes les tribus sous son égide pour fortifier ses troupes. Accompagnée des quatre guerriers dragons, Yona rallie elle aussi les rangs de l’armée et rejoint le front. Mais qu’est-il advenu de Hak, porté disparu après l’attaque submersive du général Laan ?",
                'manga_cover' => 'Yona_princess_de_laube_38.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 39',
                'publication_date' => new DateTime('2023-08-23'),
                'synopsis' => "Les combats qui opposent le pays de Kôka et le Kai du sud gagnent en intensité. Bien qu’enrôlé au seinde l’armée du Kai du sud, Hak agit pour la victoire du pays de Kôka, jusqu’au moment où il se retrouve nez à nez avec le Général Laan avec qui il a déjà croisé le fer. Ainsi privé d’anonymat, il se retrouve en péril…",
                'manga_cover' => 'Yona_princess_de_laube_39.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 40',
                'publication_date' => new DateTime('2023-12-06'),
                'synopsis' => "Les Dolomos, un groupuscule d’assassins du Kai du Sud, s’infiltrent dans le château de Hiryû avec la ferme intention de le détruire par le feu. Tandis que le général Val et Mei Niang essaient de les repousser, ils ont la mauvaise surprise de voir surgir un personnage inattendu qui va redistribuer les cartes…",
                'manga_cover' => 'Yona_princess_de_laube_40.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 41',
                'publication_date' => new DateTime('2024-03-06'),
                'synopsis' => "Pour sauver Mei Niang des griffes de ses ravisseurs,  Yona et sa bande se sont infiltrés dans le camp  militaire du Kai du sud. Tandis que Hak affronte  le général Hiktan, Val fait irruption et choisit  de le défendre contre ses anciens  compagnons d’armes…",
                'manga_cover' => 'Yona_princess_de_laube_41.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 42',
                'publication_date' => new DateTime('2024-09-18'),
                'synopsis' => "Yona et ses comparses parviennent à faire reculer Tchagol mais, dans la bataille, ils ont perdu la trace de Shin-ah, Jae-ha et Zeno. Soudain, Yona perçoit le cri des dragons…",
                'manga_cover' => 'Yona_princess_de_laube_42.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            [
                'title' => 'Tome 43',
                'publication_date' => new DateTime('2024-12-04'),
                'synopsis' => "Jae-ha se transforme en dragon a avant de disparaître sous les yeux de Yona et ses comparses, qui cherchaient désespérément à le retrouver. Pendant ce temps, au sein des troupes du Kôka, les soldats se sentent observés…",
                'manga_cover' => 'Yona_princess_de_laube_43.jpg',
                'average_rating' => null,
                'author_id' => 2, // ID de l'auteur Mizuho Kusanagi
                'series_id' => 1 // ID de la série Yona : Princesse de l'aube
            ],

            //Sailor moon - Nouvelle Édition
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2012-06-27'),
                'synopsis' => "Usagi est une jeune fille de 14 ans comme tant d'autres : elle aime dormir, jouer aux jeux vidéo, elle pleure pour un oui ou pour un non et elle ne se passionne pas pour ses études. Mais un beau jour, elle croise le chemin de Luna, un chat doué de parole qui va la transformer en une jolie justicière : Sailor Moon ! La voilà investie de plusieurs missions : elle doit identifier ses alliées, retrouver le légendaire Cristal d'Argent et protéger une certaine princesse… tout en luttant contre de mystérieux ennemis qui sont eux aussi à la recherche du fabuleux cristal aux pouvoirs fantastiques !",
                'manga_cover' => 'Sailor_moon_1.jpg',
                'average_rating' => null,
                'author_id' => 3, //Naoko Takeuchi
                'series_id' => 2 // Sailor Moon - Nouvelle Édition
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2012-09-05'),
                'synopsis' => "Usagi a rassemblé ses trois alliées et a réussi à contrecarrer pour un temps les plans du Dark Kingdom, cette organisation maléfique qui vole l'énergie vitale des humains pour ressusciter leur grande souveraine. Bientôt, l'énigmatique Sailor V se joint aux guerrières et se présente comme Princess Serenity, l'héritière du royaume de la lune. Mais est-elle vraiment celle qu'elle prétend être ? Il est temps pour les justicières de retrouver leurs souvenirs afin de lever les derniers mystères et savoir enfin si le beau Tuxedo Mask est ou non un dangereux ennemi…",
                'manga_cover' => 'Sailor_moon_2.jpg',
                'average_rating' => null,
                'author_id' => 3, //Naoko Takeuchi
                'series_id' => 2 // Sailor Moon - Nouvelle Édition
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2012-10-31'),
                'synopsis' => "Après avoir subi un lavage de cerveau de la terrible Queen Beryl, Tuxedo Mask devient son fidèle serviteur et attaque Sailor Moon afin de s'emparer du cristal d'argent. Mais comment Usagi pourra t-elle combattre celui qui était et qui sera toujours son grand amour ? Dans une vie antérieure, Princess Serenity et Endymion ont déjà été séparés. Une fois réincarnés, les voici contraints de s'entre-déchirer à nouveau. Heureusement, Usagi peut compter sur l'aide de toutes les Sailor pour empêcher ce malheur de se reproduire. Mais le soutien de ses amies sera-t-il suffisant pour permettre à Sailor Moon d'anéantir Queen Beryl ?",
                'manga_cover' => 'Sailor_moon_3.jpg',
                'average_rating' => null,
                'author_id' => 3, //Naoko Takeuchi
                'series_id' => 2 // Sailor Moon - Nouvelle Édition
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2013-01-03'),
                'synopsis' => "La vie d'Usagi est bouleversée depuis qu'a débarqué une mystérieuse petite fille, surnommée Chibiusa, qui veut lui voler son cristal d'argent. Parallèlement, les Sailors se font enlever les une après les autres par de nouveaux adversaires se réclamant de la secte Black Moon. Mais d'où viennent ces ennemis ? Que veulent-ils ? Et ont-ils un rapport avec Chibiusa ? Alors qu'Usagi tente d'en savoir plus sur la jeune inconnue, elle apprend qu'elle appartient au 30e siècle et qu'elle est venue chercher de l'aide dans le passé ! Sailor Moon, Sailor Venus et Tuxedo Mask entreprennent alors un voyage dans le futur afin d'élucider les mystères qui planent sur cette affaire…",
                'manga_cover' => 'Sailor_moon_4.jpg',
                'average_rating' => null,
                'author_id' => 3, //Naoko Takeuchi
                'series_id' => 2 // Sailor Moon
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2013-03-06'),
                'synopsis' => "Coincée au 30e siècle, Usagi est prisonnière du prince Diamond, chef de la secte Black Moon, qui la retient sur la planète Nemesis, dont l'énergie négative est censée bloquer les pouvoirs de notre héroïne. Mais soudain, le cristal d'argent se réveille et Usagi peut à nouveau se transformer en Sailor Moon et libérer ses amies. Elles parviennent à s'enfuir mais Tuxedo Mask, qui était parti à la recherche de Chibiusa, tombe entre les griffes de la mystérieuse Black Lady, qui fait de lui son esclave. Sailor Moon va devoir une fois de plus affronter son bien-aimé sous l'emprise de ses ennemis…",
                'manga_cover' => 'Sailor_moon_5.jpg',
                'average_rating' => null,
                'author_id' => 3, //Naoko Takeuchi
                'series_id' => 2 // Sailor Moon - Nouvelle Édition
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2013-05-02'),
                'synopsis' => "Alors qu'Usagi et ses amies goûtent à un repos bien mérité, voilà que des phénomènes étranges frappent encore une fois la ville de Tokyo. Des élèves d'un lycée réputé, l'Académie Infinie, se transforment en monstres et agressent les passants. Les Sailors se doutent qu'il s'agit de nouveaux ennemis. Et elles ont raison : Kaolinite et son maître Pharaoh 90, attirés par l'immense pouvoir du Cristal d'Argent, veulent anéantir l'humanité pour s'installer sur Terre. En enquêtant à l'Académie Infinie, les Sailors se heurtent alors à un couple bien mystérieux, Haruka et Michiru. Amis ou ennemis ?",
                'manga_cover' => 'Sailor_moon_6.jpg',
                'average_rating' => null,
                'author_id' => 3, //Naoko Takeuchi
                'series_id' => 2 // Sailor Moon - Nouvelle Édition
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2013-07-03'),
                'synopsis' => "Le comportement de Hotaru, la nouvelle amie de Chibiusa, est de plus en plus étrange. Elle a de brusques revirements de personnalité et Usagi n'est pas tranquille à l’idée de laisser sa fille la fréquenter. Surtout lorsque la jeune malade tente de s'emparer du Cristal d'Argent ! Chibiusa ne sait plus quoi penser de son amie… Elle est d'autant plus troublée lorsqu'elle croit reconnaître dans la rue une silhouette qui lui évoque celle de Sailor Pluto, morte sous ses yeux quelque temps auparavant…",
                'manga_cover' => 'Sailor_moon_7.jpg',
                'average_rating' => null,
                'author_id' => 3, //Naoko Takeuchi
                'series_id' => 2 // Sailor Moon - Nouvelle Édition
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2013-09-04'),
                'synopsis' => "Hotaru lutte pour reprendre possession de son corps, qui lui a été volé par Mistress 9. Son esprit parvient à reprendre le contrôle et grâce au Cristal d'Argent et ramène Chibiusa à la vie avant de disparaître. Chibiusa se découvre alors de nouveaux pouvoirs et se transforme en Super Sailor Chibi Moon. En unissant leurs forces, les Sailor viennent enfin à bout de Mistress 9. Hélas, leur joie est de courte durée car Sailor Saturn, la guerrière du silence et de la destruction sort de son sommeil pour faire s’abattre le chaos sur le monde entier…",
                'manga_cover' => 'Sailor_moon_8.jpg',
                'average_rating' => null,
                'author_id' => 3, //Naoko Takeuchi
                'series_id' => 2 // Sailor Moon - Nouvelle Édition
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2013-09-30'),
                'synopsis' => "Depuis l'éclipse totale de soleil, un climat étrange règne sur le quartier de Jûban. Usagi et ses amies se doutent qu'un nouvel ennemi est passé à l'action et suspectent le Dead Moon Circus, un cirque qui s'est installé en ville depuis peu. Alors que les Sailors tentent d'enquêter pour découvrir la véritable identité de leur adversaire, Chibiusa est contactée par un cheval ailé prénommé Helios, qui semble en savoir long sur le peuple de Dead Moon et qui veille de loin sur Mamoru, son prince, atteint d'un mal étrange depuis l'arrivée du cirque…",
                'manga_cover' => 'Sailor_moon_9.jpg',
                'average_rating' => null,
                'author_id' => 3, //Naoko Takeuchi
                'series_id' => 2 // Sailor Moon - Nouvelle Édition
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2014-01-03'),
                'synopsis' => "Usagi et Mamoru sont gravement malades : ils sont atteints par une malédiction que la reine Nehelennia a lancée sur l'Elysion, la terre sacrée qui veille sur la planète bleue. Le seul moyen de les sauver serait d'utiliser l'immense pouvoir du Golden Crystal, mais personne ne sait où il se trouve. La situation est critique… C'est pourquoi les quatre Sailor du système solaire externe reprennent du service : toutes les guerrières sont à nouveau réunies ! ",
                'manga_cover' => 'Sailor_moon_10.jpg',
                'average_rating' => null,
                'author_id' => 3, //Naoko Takeuchi
                'series_id' => 2 // Sailor Moon - Nouvelle Édition
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2014-03-05'),
                'synopsis' => "Mamoru doit partir étudier aux États-Unis. Alors qu'Usagi l'accompagne à l'aéroport, il est comme frappé par un éclair et emprisonné dans un cristal. Mais Usagi semble ne conserver aucun souvenir de cet incident : elle est persuadée que Mamoru est parti en Amérique sans encombre... Un peu plus tard, alors que les filles assistent au concert des Three Lights, les nouvelles idoles du moment, elles se font attaquer par une ennemie, envoyée par une dénommée Galaxia. Au cours du combat, elles découvrent que ceux qui se faisaient passer pour des chanteurs sont en réalité des guerrières : les Sailor Star Lights ! Parallèlement, une mystérieuse petite fille ressemblant à un modèle réduit de Chibiusa tombe du ciel et s'incruste chez les Tsukino...",
                'manga_cover' => 'Sailor_moon_11.jpg',
                'average_rating' => null,
                'author_id' => 3, //Naoko Takeuchi
                'series_id' => 2 // Sailor Moon - Nouvelle Édition
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2014-05-02'),
                'synopsis' => "Sailor Moon a perdu presque tous ses alliés, détruits les uns après les autres par les sbires de Galaxia. Consciente d'être la seule à pouvoir vaincre cette ultime ennemie pour ramener la paix sur la Terre, elle décide d'aller la combattre dans son repaire. Elle demande donc à la princesse Kakyû de la conduire au centre de la galaxie, à un endroit appelé Galaxy Cauldron, là où sont créées toutes les étoiles. Là-bas, elle devra mener son plus grand combat afin de pouvoir sauver les autres Sailors et Mamoru... Mais elle ne s'attendait pas à devoir affronter précisément ses amies et l'amour de sa vie, manipulés par la cruelle Galaxia !",
                'manga_cover' => 'Sailor_moon_12.jpg',
                'average_rating' => null,
                'author_id' => 3, //Naoko Takeuchi
                'series_id' => 2 // Sailor Moon - Nouvelle Édition
            ],


            //Blue Spring Ride
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2013-07-05'),
                'synopsis' => "Futaba s'est transformée à son entrée au lycée. Douce et féminine au collège, elle est devenue plus énergique et garçon manqué dans l'espoir de se faire des amies. Mais ses nouvelles amitiés sont artificielles et Futaba va bientôt remarquer les limites de son changement de personnalité…",
                'manga_cover' => 'Blue_spring_ride_1.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2013-07-05'),
                'synopsis' => "Une nouvelle année commence. Aidée par Kô, Futaba va prendre son destin en main. Elle décide de s'imposer dans sa nouvelle classe en devenant déléguée. Mais Futaba n'a pas l'esprit d'une meneuse, et nouer une véritable amitié n'est pas si facile…",
                'manga_cover' => 'Blue_spring_ride_2.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('1999-01-01'),
                'synopsis' => "",
                'manga_cover' => 'Blue_spring_ride_3.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2013-10-04'),
                'synopsis' => "Futaba est préoccupée par la relation entre Yûri et Kô. Elle essaie aussi d’en savoir plus sur le passé de Kô, qui ve",
                'manga_cover' => 'Blue_spring_ride_4.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2014-04-03'),
                'synopsis' => "Futaba et Kô se donnent rendez-vous pour aller à la fête de l'été, fête à laquelle ils n'avaient pas pu se rendre quand ils étaient au collège. Futaba espère que sa relation avec Kô va évoluer, mais leurs rapports prennent une tout autre tournure...",
                'manga_cover' => 'Blue_spring_ride_5.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2014-07-03'),
                'synopsis' => "Yui Narumi, une amie de Kô qui était dans son collège à Nagasaki, vient à la fête du lycée de Futaba. Depuis que Kô s'est mis à appeler Yui et à lui envoyer fréquemment des messages, Futaba sent qu'une distance s'installe entre Kô et elle.C'est donc dans un état d'esprit particulier qu'elle reçoit Yui...",
                'manga_cover' => 'Blue_spring_ride_6.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2014-10-02'),
                'synopsis' => "La compassion de Kô envers Narumi trouble Futaba, qui se sent éconduite. Elle en vient à ne plus trop savoir comment se comporter face à Kô. De son côté, Kikuchi se rapproche de plus en plus de Futaba...",
                'manga_cover' => 'Blue_spring_ride_7.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2015-01-16'),
                'synopsis' => "Kô a choisi Yui. Pour mettre un terme à ses sentiments envers Kô, Futaba décide de lui avouer clairement ce qu'elle ressent pour lui. Quant à Toma, il décide de passer à l'action avec Futaba",
                'manga_cover' => 'Blue_spring_ride_8.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2015-04-17'),
                'synopsis' => "Entre Kô et Futaba, c'est suis-moi je te fuis, fuis-moi je te suis. Kô a rejeté Futaba, non pas parce qu'il l'aime, mais pour pouvoir protéger Narumi. Pendant que Futaba essaye d'avancer, Kô ne lui facilite pas la tâche. D'un autre côté Touma se rapproche. Que va-t-il advenir de notre couple préféré ?",
                'manga_cover' => 'Blue_spring_ride_9.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2015-07-03'),
                'synopsis' => "Et si nous prenions un nouveau départ... Futaba décide de sortir avec Tôma, et tous deux s'échangent un baiser. Futaba essaie d'oublier Kô et aller de l'avant. Mais que va-t-il se passer lors du voyage de classe à Nagasaki où Kô a passé ses années collège ?",
                'manga_cover' => 'Blue_spring_ride_10.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2015-10-02'),
                'synopsis' => "Et si nous prenions un nouveau départ...Kô parvient à accepter son douloureux passé lié à ses années collège en se créant de nouveaux souvenirs avec ses amis. Quand à Futaba, elle s'efforce de bâtir une relation avec Tôma, mais elle reste très proche de Kô... Un voyage scolaire plein de rebondissements...",
                'manga_cover' => 'Blue_spring_ride_11.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2016-03-18'),
                'synopsis' => "Kô ne veut plus retenir ses sentiments envers Futaba. Il met les choses au clair avec Yui et tente le tout pour le tout pour conquérir Futaba, sans se soucier du regard des autres ! Futaba, qui venait de décider de mieux regarder Tôma, est troublée. Son coeur balance...",
                'manga_cover' => 'Blue_spring_ride_12.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2016-07-01'),
                'synopsis' => "Et si nous prenions un nouveau départ...Futaba et Kô sont enfin ensemble.Les relations entre Shûko, Kominato et le professeur Tanaka prennent également une nouvelle tournure ... Kô va prendre une grande décision. Voici le dernier volume d'une histoire d'amour de jeunesse vécue avec passion !!",
                'manga_cover' => 'Blue_spring_ride_13.jpg',
                'average_rating' => null,
                'author_id' => 4, //IO Sakisaka
                'series_id' => 3 // Blue Spring Ride
            ],


            //Takane & Hana
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2016-06-22'),
                'synopsis' => "Hana, 16 ans, doit remplacer sa soeur lors d'une rencontre en vue d'un mariage arrangé. Elle fait ainsi la connaissance de Takane Saibara, jeune héritier du groupe Takaba, qu'elle trouve immédiatement arrogant et stupide. Elle n'hésite d'ailleurs pas à le lui faire savoir mais, à sa grande surprise, celui-ci lui propose bientôt un nouveau rendez-vous.",
                'manga_cover' => 'Takane_&_Hana_1.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2016-08-24'),
                'synopsis' => "Contre toute attente, Takane a proposé un second rendez-vous à Hana, séduit par son fort caractère.",
                'manga_cover' => 'Takane_&_Hana_2.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2016-10-19'),
                'synopsis' => "Suite des aventures de Fumi, jeune orpheline capable de contrôler les esprits et de ce fait de faire basculer le monde vers le bien ou le mal.",
                'manga_cover' => 'Takane_&_Hana_3.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2016-12-14'),
                'synopsis' => "Hana, lycéenne de 16 ans, est contrainte de prendre la place de sa soeur lors d'une rencontre arrangée. Présentée à l'héritier du grand groupe Takaba, le très séduisant Takane Saibara, la jeune fille déchante vite face à son arrogance. N'y tenant plus, elle lui jette ses quatre vérités à la figure, croyant se débarrasser ainsi de lui. Pourtant, dès le lendemain, Takane lui propose un nouveau rendez-vous, à croire qu'il en redemande ! Elle a un sacré caractère. et il aime ça !",
                'manga_cover' => 'Takane_&_Hana_4.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2017-02-01'),
                'synopsis' => "Hana, lycéenne de 16 ans, est contrainte de prendre la place de sa soeur lors d'une rencontre arrangée ! Présentée à l'héritier du grand groupe Takaba, le très séduisant Takane Saibara, la jeune fille déchante vite face à son arrogance. N'y tenant plus, elle lui jette ses quatre vérités à la figure, croyant se débarrasser ainsi de lui. Pourtant, dès le lendemain, Takane lui propose un nouveau rendez-vous, à croire qu'il en redemande ! Elle a un sacré caractère. et il aime ça !",
                'manga_cover' => 'Takane_&_Hana_5.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2017-05-10'),
                'synopsis' => "Hana, une lycéenne de 16 ans doit remplacer sa soeur en vue d'un mariage arrangé. A l'approche du séduisant Takane Saibara, héritier du grand groupe Takaba, la jeune fille ne peut s'empêcher de le trouver arrogant et stupide. N'y tenant plus elle n'hésite pas à lui dire ce qu'elle pense de lui croyant se débarrasser ainsi du jeune prétentieux. Mais dès le lendemain Takane lui propose un nouveau rendez-vous, à croire qu'il en redemande !",
                'manga_cover' => 'Takane_&_Hana_6.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2017-08-16'),
                'synopsis' => "Hana, une lycéenne de 16 ans doit remplacer sa soeur en vue d’un mariage arrangé. A l’approche du séduisant Takane Saibara, héritier du grand groupe Takaba, la jeune fille ne peut s’empêcher de le trouver arrogant et stupide. N’y tenant plus elle n’hésite pas à lui dire ce qu’elle pense de lui croyant se débarrasser ainsi du jeune prétentieux. Mais dès le lendemain Takane lui propose un nouveau rendez-vous, à croire qu’il en redemande !",
                'manga_cover' => 'Takane_&_Hana_7.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2017-12-13'),
                'synopsis' => "Hana, une lycéenne de 16 ans doit remplacer sa soeur en vue d’un mariage arrangé. À l’approche du séduisant Takane Saibara, héritier du grand groupe Takaba, la jeune fille ne peut s’empêcher de le trouver arrogant et stupide. N’y tenant plus elle n’hésite pas à lui dire ce qu’elle pense de lui croyant se débarrasser ainsi du jeune prétentieux. Mais dès le lendemain Takane lui propose un nouveau rendez-vous, à croire qu’il en redemande !",
                'manga_cover' => 'Takane_&_Hana_8.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2018-04-04'),
                'synopsis' => "Hana, une lycéenne de 16 ans doit remplacer sa soeur en vue d'un mariage arrangé. À l'approche du séduisant Takane Saibara, héritier du grand groupe Takaba, la jeune fille ne peut s'empêcher de le trouver arrogant et stupide. N'y tenant plus elle n'hésite pas à lui dire ce qu'elle pense de lui croyant se débarrasser ainsi du jeune prétentieux. Mais dès le lendemain Takane lui propose un nouveau rendez-vous, à croire qu'il en redemande !",
                'manga_cover' => 'Takane_&_Hana_9.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2018-08-16'),
                'synopsis' => "Hana, une lycéenne de 16 ans doit remplacer sa soeur en vue d'un mariage arrangé. À l'approche du séduisant Takane Saibara, héritier du grand groupe Takaba, la jeune fille ne peut s'empêcher de le trouver arrogant et stupide. N'y tenant plus elle n'hésite pas à lui dire ce qu'elle pense de lui croyant se débarrasser ainsi du jeune prétentieux. Mais dès le lendemain Takane lui propose un nouveau rendez-vous, à croire qu'il en redemande !",
                'manga_cover' => 'Takane_&_Hana_10.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2018-11-28'),
                'synopsis' => "Hana, une lycéenne de 16 ans doit remplacer sa sœur en vue d’un mariage arrangé. À l’approche du séduisant Takane Saibara, héritier du grand groupe Takaba, la jeune fille ne peut s’empêcher de le trouver arrogant et stupide. N’y tenant plus elle n’hésite pas à lui dire ce qu’elle pense de lui croyant se débarrasser ainsi du jeune prétentieux. Mais dès le lendemain Takane lui propose un nouveau rendez-vous, à croire qu’il en redemande !",
                'manga_cover' => 'Takane_&_Hana_11.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2019-04-03'),
                'synopsis' => "Hana, une lycéenne de 16 ans doit remplacer sasoeur en vue d'un mariage arrangé. À l'approche du séduisantTakane Saibara, héritier du grand groupe Takaba, la jeunefille ne peut s'empêcher de le trouver arrogant et stupide. N'ytenant plus elle n'hésite pas à lui dire ce qu'elle pense de luicroyant se débarrasser ainsi du jeune prétentieux. Mais dèsle lendemain Takane lui propose un nouveau rendez-vous, àcroire qu'il en redemande !",
                'manga_cover' => 'Takane_&_Hana_12.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2019-08-14'),
                'synopsis' => "Aime-moi, je te fuis ! Fuis-moi, je te suis ! La subite déclaration de Takane a plongé Hana dans la confusion et, pour le protéger, elle décide de s’éloigner de lui… La partie de cache-cache entre les amoureux se corse lorsque la demoiselle lui ment en prétendant sortir avec son meilleur ami ! Tandis qu’Hana se confie à Rino, un duel Okamon VS Takane se joue pour départager les deux prétendants. Laisser parler ses sentiments apaise tous les tourments !",
                'manga_cover' => 'Takane_&_Hana_13.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 14',
                'publication_date' => new DateTime('2019-11-27'),
                'synopsis' => "Takane et Hana sont désormais en couple et tentent de s'habituer à leur nouvelle relation. Mais le voyage à Okinawa avec la famille Nonomura ne leur laisse que peu de moments d'intimité. Hana ne souhaite pourtant qu'une chose : profitez de son amoureux en tête à tête... et son souhait est vite exaucé, car suite à un incident, ils tombent tous deux à la mer ! Naufragés sur une île, les cours sont à l'idylle !",
                'manga_cover' => 'Takane_&_Hana_14.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 15',
                'publication_date' => new DateTime('2020-05-27'),
                'synopsis' => "Toujours aussi maladroit pour exprimer ses sentiments, Takane bombarde Hana de cadeaux à l'occasion de la fête du sport de son lycée. Devant de telles extravagances, la jeune lycéenne et ses amies en arrivent à la conclusion qu'il compense sa frustration !! Pour couronner le tout, voilà que la mère de Takane débarque tout droit de Londres et sème la pagaille ! Hana devra user de malice pour réconcilier mère et fils !",
                'manga_cover' => 'Takane_&_Hana_15.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 16',
                'publication_date' => new DateTime('2020-08-26'),
                'synopsis' => "L'admiration d'Hiromi pour Takane ne connaît pas de limites et cette fois, le jeune garçon a dessiné un manga avec son cousin pour héros ! Mais son obsession exaspère ses parents qui tombent sur une photo de Takane avec Hana, en fouillant son téléphone. Craignant que son père découvre leur romance et s'en serve contre son idole, Hiromi fait une fugue.. L'heure est aussi à la fête entre l'Halloween de luxe chez Luciano et les 17 ans de Hana ! A fiancé exceptionnelle, cadeau sensationnel !",
                'manga_cover' => 'Takane_&_Hana_16.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 17',
                'publication_date' => new DateTime('2020-12-09'),
                'synopsis' => "Hana, une lycéenne de 16 ans doit remplacer sa soeur en vue d'un mariage arrangé. À l'approche du séduisant Takane Saibara, héritier du grand groupe Takaba, la jeune fille ne peut s'empêcher de le trouver arrogant et stupide. N'y tenant plus elle n'hésite pas à lui dire ce qu'elle pense de lui croyant se débarrasser ainsi du jeune prétentieux. Mais dès le lendemain Takane lui propose un nouveau rendez-vous, à croire qu'il en redemande !",
                'manga_cover' => 'Takane_&_Hana_17.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],

            [
                'title' => 'Tome 18',
                'publication_date' => new DateTime('2021-04-14'),
                'synopsis' => "Hana, une lycéenne de 16 ans doit remplacer sa soeur en vue d'un mariage arrangé. À l'approche du séduisant Takane Saibara, héritier du grand groupe Takaba, la jeune fille ne peut s'empêcher de le trouver arrogant et stupide. N'y tenant plus elle n'hésite pas à lui dire ce qu'elle pense de lui croyant se débarrasser ainsi du jeune prétentieux. Mais dès le lendemain Takane lui propose un nouveau rendez-vous, à croire qu'il en redemande !",
                'manga_cover' => 'Takane_&_Hana_18.jpg',
                'average_rating' => null,
                'author_id' => 5, //Yuki Shiwasu
                'series_id' => 6 //Takane & Hana
            ],


            //Kingdom
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2018-09-15'),
                'synopsis' => "La Chine, qui n'est pas encore unifiée, traverse une grande guerre de cinq siècles. Shin, un jeune garçon contemporain de ces temps violents et houleux, cherche, par la seule force de son épée, à se faire un nom sous les cieux !!",
                'manga_cover' => 'Kingdom_1.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2018-09-15'),
                'synopsis' => "Ei Sei, le jeune roi du pays de Qin qui s'est fait ravir son trône, fait route vers le monde des montagnes, pour tenter de former une alliance avec le monarque qui y règne, et recouvrer son pouvoir... Suivez-le, et découvrez la plus grande épopée de la Chine des Royaumes Combattants !!!",
                'manga_cover' => 'Kingdom_2.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2018-10-02'),
                'synopsis' => "Le roi de Qin, Ei Sei, cherche à retrouver son trône après qu'un coup d'état lui ait ravi. Il ambitionne de renouer une ancienne alliance avec le roi des montagnes. Les pions avancent et la stratégie de reconquête de Kanyou, la capitale, se met en place. Découvrez la nouvelle histoire du premier empereur de Qin et l'un des épisodes décisifs vers son unification de la Chine !",
                'manga_cover' => 'Kingdom_3.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2018-10-02'),
                'synopsis' => "Ei Sei, le roi de Qin et ses alliés, combattent avec bravoure des ennemis supérieurs en nombre. Sur ordre du monarque, Shin, flanqué d'une unité, se dirige vers la salle du trône où se trouve Sei Kyou, le petit-frère du roi et le chef de la rébellion...",
                'manga_cover' => 'Kingdom_4.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2018-11-13'),
                'synopsis' => "La rébellion a été déjouée par Ei Sei, le roi Qin, et ses alliés. Shin, désormais fantassin, ambitionne de devenir un grand général, et, pour cela, il se prépare à la guerre contre l'état voisin de Wei !",
                'manga_cover' => 'Kingdom_5.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2018-11-13'),
                'synopsis' => "Shin, devenu fantassin dans l'armée de Qin, arrive sur le champ de bataille. Les événements ont pris une tournure inattendue : les soldats de Qin, qui ont perdu l'initiative, sont sur le point d'affronter l'unité de chars de Wei, le plus redoutable de toute la Chine !!!",
                'manga_cover' => 'Kingdom_6.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2018-12-07'),
                'synopsis' => "L'armée de Qin, inférieure en nombre et guidée par son commandant en chef Duke Hyou, s'apprête à lancer toutes ses forces dans une bataille décisive... Shin, désireux de prouver sa valeur militaire, se trouve de nouveau en première ligne !",
                'manga_cover' => 'Kingdom_7.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2018-12-07'),
                'synopsis' => "Au cours d'une conversation avec une fille du palais, Ei Sei s'épanche sur son passé. Retenu en otage pendant son enfance dans l'état ennemi de Zhao, il y a essuyé coups et humiliations durant des années. Mais alors qu'il vivait replié sur lui même, quelle rencontre a-t-il fait pour pouvoir changer...?",
                'manga_cover' => 'Kingdom_8.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2018-12-07'),
                'synopsis' => "Derrière la tentative d'assassinat et les tueurs déployés dans le palais royal, se trouve un homme bien connu d'Ei Sei. Mais quelle pouvait être la motivation de Kyoukai pour rallier ces groupes d'assassins ? Cette question demeure sans réponse alors que le plus grand ennemi du royaume de Qin s'apprête enfin à se dévoiler...!!",
                'manga_cover' => 'Kingdom_9.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2018-12-07'),
                'synopsis' => "Le chancelier Ryo Fui qui, depuis des années, dirige dans l'ombre l'état de Qin, dévoile enfin son visage. La puissance de cet homme et de son entourage semble insondable ! Shin, réalisant à quel point leur ennemi est colossal, cherche un moyen de progresser davantage...",
                'manga_cover' => 'Kingdom_10.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2019-02-13'),
                'synopsis' => "L'état de Zhao, dans lequel Ei Sei avait été otage jadis voue une haine terribe envers Qin, depuis sa défaite à Chôhei. Déjouant toutes les prévisions, le voilà qui lance une fulgurante offensive contre son voisin !! Alors que le royaume est confronté à une crise qui pourrait lui être fatale, l'oiseau colossal de Qin se remet à battre des ailes...",
                'manga_cover' => 'Kingdom_11.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2019-02-13'),
                'synopsis' => "La guerre contre l'état de Zhao a commencé dans les Plaines Sèches. Moubu, prenant l'initiative pour l'état de Qin, vient de sonner la charge. De leur côté, Shin et ses hommes, ayant reçu un ordre spécial de la part d'Oukin, s'élancent pour abattre Fûki, le général ennemi...",
                'manga_cover' => 'Kingdom_12.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2019-02-13'),
                'synopsis' => "L'unité Hi Shin a eu raison de Fûki, le général advers, et l'armée de Qin est désormais passée à l'offensive. Moubu, qui se tient à sa tête, chercher à en finir une fois pour toute, en emportant tout sur son passage. c'est sans compter sur l'intervention de Houken, redoutable et mystérieux adversaire...",
                'manga_cover' => 'Kingdom_13.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 14',
                'publication_date' => new DateTime('2019-02-13'),
                'synopsis' => "Alors que la situation tournait à l'avantage de Qin, Zhao profite de l'obscurité pour attaquer son ennemi et lui causer de lourdes pertes. L'unité Hi Shin ayant échoué à contenir les charges dévastatrices de Houken, général-en-chef de Zhao, Kyoukai et Shin décident d'occuper celui-ci afin de permettre à leurs camarades de s'enfuir...",
                'manga_cover' => 'Kingdom_14.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 15',
                'publication_date' => new DateTime('2019-05-19'),
                'synopsis' => "Les cartes ont été rebattues. Le général Moubu s'est élancé avec ses troupes à la poursuite de Houken, sans songer qu'il faonçait peut-être tête baissée vers un piège tendu par Zhao... De leur côté, les généraux-en-chef des deux armées s'apprêtent, par un duel, à mettre un terme à une rancune vielle de neuf années... !!",
                'manga_cover' => 'Kingdom_15.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 16',
                'publication_date' => new DateTime('2019-05-19'),
                'synopsis' => "Des révélations sont faites sur le passé de Kyou, qui comptait jadis parmi les Six Grands Généraux de Qin. Sur le champ de bataille, alors que la confrontation entre les deux généraux en chef des deux armées semble toucher à sa fin, Riboku, l'homme qui se trouve derrière le plan d'invasion de Zhao, attaque tout à coup par surprise... Comment la grande guerre entre Qin et Zhao se conclura-t-elle ?",
                'manga_cover' => 'Kingdom_16.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 17',
                'publication_date' => new DateTime('2019-05-19'),
                'synopsis' => "Suite à une manœuvre de Ryo Fui, chancelier de l'État de Qin, l'un des trois Grands Cieux, Riboku doit se rendre à Kanyou. Sous le feu de regards hostiles et en plein territoire ennemi, en quoi peut donc bien consister l'étonnante proposition que se prépare à faire ce stratège, vainqueur du redoutable général Ouki ?",
                'manga_cover' => 'Kingdom_17.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 18',
                'publication_date' => new DateTime('2019-05-19'),
                'synopsis' => "Ei Sei se rend au harem et demande à la reine-mère, sa propre génitrice, qu'elle lui apporte le soutien qui lui manque. Cette dernière, cependant, choisit de rencontrer en secret et de nuit, le Chancelier Ryo Fui, qui n'est rien d'autre que l'ennemi juré de son fils... L'ambiance devient de plus en plus explosive et étouffante dans le palais royal !!",
                'manga_cover' => 'Kingdom_18.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 19',
                'publication_date' => new DateTime('2019-06-11'),
                'synopsis' => "Après avoir tant de fois croisé le fer avec les Six grands Généraux de Qin, Renpa, dont le nom est connu de toute la Chine, semble désormais en retraite dans l'État de Wei. La grande bataille qui s'annonce toutefois dans la ville de Sanyou, n'est pas sans réserver quelques surprises...",
                'manga_cover' => 'Kingdom_19.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 20',
                'publication_date' => new DateTime('2019-06-11'),
                'synopsis' => "Shin est devenu commandant de 1000 hommes, mais se heurte à la stratégie du vieil et rusé Genpo, un des Quatre Rois Célestes de Renpa. L'armée de Qin peut toutefois compter sur un de ses généraux les moins orthodoxes : Kanki !!",
                'manga_cover' => 'Kingdom_20.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 21',
                'publication_date' => new DateTime('2019-06-11'),
                'synopsis' => "Grâce à une stratégie déployée en coopération avec Mouten et Ouhon, Shin a réussi à acculer Rinko, l'un des Quatre Rois Célestes. Au même moment, le légendaire Renpa, qui a affronté en son temps, les Six Grands Généraux de Qin, apparaît sans crier gare sur le champ de bataille...",
                'manga_cover' => 'Kingdom_21.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 22',
                'publication_date' => new DateTime('2019-06-11'),
                'synopsis' => "La guerre entre les États de Wei et de Qin s'apprête à se conclure par un combat direct entre les chefs des deux armées. Le duel entre Shin et Rinko, l'un des bras droits de Renpa, s'achève également !! Qu'en est-il de Kyoukai qui, durant tout ce temps, combattait avec tant d'acharnement pour défendre ses alliés... ?!",
                'manga_cover' => 'Kingdom_22.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 23',
                'publication_date' => new DateTime('2019-08-08'),
                'synopsis' => "La guerre entre Qin et Wei a pris fin. Quelles sont donc les conditions que le célèbre chef militaire Renpa dicte à Shin pour que celui-ci puisse espérer devenir « le plus grand général de toute l'Histoire » ?! Après avoir assisté au départ de Kyoukai, l'unité Hi Shin, modifiée dans son fonctionnement, doit désormais absolument remporter de nouvelles victoires…",
                'manga_cover' => 'Kingdom_23.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 24',
                'publication_date' => new DateTime('2019-08-08'),
                'synopsis' => "Le premier ministre de Zhao, Riboku, nomme Houken en tant que général en chef et lance l'invasion de l'État de Yan. Une nouvelle fois, de sombres nuages s'amoncellent dans tout le ciel de la Chine et l'air se fait plus oppressant. De son côté, Ryo Fui devient Grand Chancelier de l'État de Qin et affermit fortement son influence sur le royaume…",
                'manga_cover' => 'Kingdom_24.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 25',
                'publication_date' => new DateTime('2019-08-08'),
                'synopsis' => "Qin se trouve tout à coup envahi par Chu, le grand État du Sud. Alors que le pays se prépare, non sans inquiétude, à se mesurer à l'un des plus puissants des Sept Royaumes Combattants, tout semble indiquer que l'État de Chu n'est pas leur seul ennemi et que désormais, la survie du royaume de Qin est désormais en jeu…",
                'manga_cover' => 'Kingdom_25.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 26',
                'publication_date' => new DateTime('2019-08-08'),
                'synopsis' => "L'armée de Qin doit encaisser les attaques combinées des armées de cinq États réunis dans une coalition. Il lui faut défendre à tout prix la route qui mène à sa capitale, et qui passe par la célèbre Porte de Kankoku. Shin et son unité Hi Shin se retrouvent de nouveau face à l'armée de Zhao… !!",
                'manga_cover' => 'Kingdom_26.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 27',
                'publication_date' => new DateTime('2019-10-15'),
                'synopsis' => "Lors de son duel contre Mangoku, cruel général de l'armée de Zhao qui semble être animé que par une insondable et triste rancoeur, Shin prend de nouveau conscience de la signification du combat qu'il mène avec ses hommes. Un nouveau général apparaît alors face à l'armée de Qin, tandis que la bataille pour la Porte de Kankoku s'intensifie sur tous les fronts... !!",
                'manga_cover' => 'Kingdom_27.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 28',
                'publication_date' => new DateTime('2019-10-15'),
                'synopsis' => "Chu peut s'enorgueillir d'être le plus grand des cinq États qui forment l'armée de coalition. Kanmei est le général-en-chef de son armée. Face à lui, le général de Qin, Moubu, vient d'opérer une sortie avec ses hommes, malgré l'évidente et terrible infériorité numérique qui est la leur. Quel peut donc être son plan ?",
                'manga_cover' => 'Kingdom_28.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 29',
                'publication_date' => new DateTime('2019-10-15'),
                'synopsis' => "Karin, la générale de Chu, qui n'était pas encore passé à l'action, a commencé à manoeuvrer ses troupes. De son côté, l'armée de Moubu a également opéré une sortie en chargeant directement vers le QG de Kanmei, général en chef des forces de Chu. Qui pourra bien sortir vainqueur de ce combat de titans ?",
                'manga_cover' => 'Kingdom_29.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 30',
                'publication_date' => new DateTime('2019-10-15'),
                'synopsis' => "Suite aux stratagèmes déployés par Karin, la Porte de Kankoku semble être sur le point d'être prise à revers quand... Mais qui peut bien intervenir dans une situation critique ? Alors qu'un peu de répit semblait être gagné, le dernier acte de la guerre commence et le champ opérations s'élargissant, la bataille prend soudain une toute nouvelle dimension !!",
                'manga_cover' => 'Kingdom_30.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 31',
                'publication_date' => new DateTime('2019-12-15'),
                'synopsis' => "Exténués par les combats, Shin et ses hommes arrivent à la petite ville de Sai, où ils sont accueillis par Ei Sei… Le roi de Qin ! Face aux soldats aguerris de l'armée conduite par Riboku, les forces de Qin, composées essentiellement des habitants de Sai et donc de civils, ont-elles une chance de vaincre ?",
                'manga_cover' => 'Kingdom_31.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 32',
                'publication_date' => new DateTime('2019-12-15'),
                'synopsis' => "La bataille fait rage. Depuis plusieurs jours et plusieurs nuits déjà, les défenseurs de la petite cité servant d'ultime bastion avant la capitale, se surpassent. L'État de Qin paraît être dans une situation sans espoir. Shin et Sei continuent tant bien que mal de tenir mais pourront-ils encore résister longtemps… ?!",
                'manga_cover' => 'Kingdom_32.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 33',
                'publication_date' => new DateTime('2019-12-15'),
                'synopsis' => "Grâce à l'arrivée du peuple des montagnes, la ville de Sai, sur le point de tomber à l'ennemi, échappe finalement d'un cheveu à son funeste sort. Shin se bat en duel avec le terrible Houken et, physiquement éreinté, décide de donner toutes ses forces dans une ultime attaque. La longue et éprouvante guerre contre l'armée de la Coalition arrive finalement à son terme !!",
                'manga_cover' => 'Kingdom_33.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 34',
                'publication_date' => new DateTime('2019-12-15'),
                'synopsis' => "Le combat qui se déroulait au fin fond des montagnes de Zhao, entre Kyoukai et son ennemie jurée Yûren, touche à sa fin !! Comment ce duel va-t-il se terminer ?! Au même moment, dans l'État de Qin, on rapporte que le grand général Mougou, grand-père de Mouten, se trouve désormais sur son lit de mort… !!",
                'manga_cover' => 'Kingdom_34.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 35',
                'publication_date' => new DateTime('2020-02-20'),
                'synopsis' => "En se rendant dans la ville de Tonryû à la tête d'une armée qu'il a lui-même levée, Sei Kyou n'a rien fait d'autre que se jeter dans la gueule du loup. Il est tombé dans le piège qu'on lui destinait. L'unité Hi Shin, appelée à la rescousse par Ei Sei qui a anticipé le complot, arrivera-t-elle à temps pour lui venir en aide ?",
                'manga_cover' => 'Kingdom_35.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 36',
                'publication_date' => new DateTime('2020-02-20'),
                'synopsis' => "L'unité Hi Shin et l'unité Gyoku Hou affrontent chacune un des Dragons de Feu, ces Grands Généraux dont s'enorgueillit l'État de Wei. Une question se pose durant cette bataille : cette jeune génération d'officiers de Qin peut-elle vraiment faire quelque chose face à ces puissants guerriers expérimentés qui firent leurs armes du temps du général Ouki ? Quant à Karyo Ten, ne s'expose-t-elle pas un peu trop au danger… ?!",
                'manga_cover' => 'Kingdom_36.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 37',
                'publication_date' => new DateTime('2020-02-20'),
                'synopsis' => "Tandis que la bataille pour Choyou se déroule selon les plans initialement tracés par Ouhon, ce dernier se lance dans un duel l'opposant de nouveau à Shihaku, l'un des Dragons de Feu. Qui arrivera donc en premier jusqu'au QG ennemi et à la tente de Go Houmei… ?!",
                'manga_cover' => 'Kingdom_37.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 38',
                'publication_date' => new DateTime('2020-02-20'),
                'synopsis' => "Tandis que la faction du roi Ei Sei s'oppose à celle du grand chancelier pour obtenir la suprématie à l'intérieur du pays, une troisième faction, celle de la reine-mère, fait sécession et crée soudainement l'État de Ai. Une nouvelle année s'ouvre, durant laquelle doit se tenir la cérémonie tant attendue du couronnement d'Ei Sei : celle-ci se déroulera-t-elle sans problème… ?",
                'manga_cover' => 'Kingdom_38.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 39',
                'publication_date' => new DateTime('2020-04-20'),
                'synopsis' => "Alors que la cérémonie de couronnement suit son cours, l'armée des insurgés partie de l'État de Ai vient frapper de ses griffes la capitale de Qin. Le destin du roi Ei Sei dépend désormais de ce que parviendra à faire l'unité Hi Shin. Contre toute attente, un homme dans l'assemblée se lève et annonce son ralliement… Pour quelles conséquences ?!",
                'manga_cover' => 'Kingdom_39.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 40',
                'publication_date' => new DateTime('2020-04-20'),
                'synopsis' => "Tandis que le roi et le Grand Chancelier discutent du « monde sous les cieux » et débattent de leur manière mutuelle de régir, Shouheikun et ses troupes se rendent à vive allure vers Kanyou menacée par les insurgés. Alors que Ei Sei, Ryo Fui et la reine-mère, réunis, se livrent leurs quatre vérités, l'ultime bataille pour l'unification de l'État de Qin arrive à son terme… !!",
                'manga_cover' => 'Kingdom_40.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 41',
                'publication_date' => new DateTime('2020-04-20'),
                'synopsis' => "Après être parvenu à pacifier la situation intérieure de l'État de Qin, Ei Sei et Shin sont plus que jamais déterminés à concrétiser leurs rêves mutuels. Au même moment surviennent des évènements suffisamment importants pour ébranler le grand État de Chu… Mais quelle est donc l'étonnante armée alliée à laquelle l'unité Hi Shin, qui a reçu l'ordre de progresser vers l'État de Zhao, va-t-elle servir de renforts… ?!",
                'manga_cover' => 'Kingdom_41.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 42',
                'publication_date' => new DateTime('2020-04-20'),
                'synopsis' => "Les hostilités ont débuté entre l'armée de Kanki et les forces de l'État de Zhao. L'issue de la bataille, qui se déroule sur une zone d'une largeur peu ordinaire, se joue sur la capacité d'un des deux camps à s'approprier les collines de Kokuyou. Les commandants en chef des deux armées, Kanki et Keisha, rivalisent d'adresse et d'ingéniosité pour l'emporter. Pendant ce temps, l'unité Hi Shin, qui a subi une attaque surprise sitôt la bataille commencée, se trouve confrontée à une nouvelle et terrible épreuve… !!",
                'manga_cover' => 'Kingdom_42.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 43',
                'publication_date' => new DateTime('2020-06-25'),
                'synopsis' => "La bataille de Kokuyou se déroule sans que l'un des deux camps ne prennent le pas sur l'autre. Les combats s'intensifient toutefois suite à une charge puissante, menée par l'unité de Hi Shin, tandis que Kanki demeure toujours sur le retrait. Du côté des forces de Zhao, le général Kisui, déterminé à défendre ses terres, fait montre d'une grande bravoure, tandis que le commandant en chef Keisha, étonnamment, décide d'agir d'une façon contraire à ses habitudes. C'est toute la région de Kokuyou qui bouillonne sous l'enthousiasme des soldats des deux armées, bien résolues à en finir…!!",
                'manga_cover' => 'Kingdom_43.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 44',
                'publication_date' => new DateTime('2020-06-25'),
                'synopsis' => "Alors que le cliquetis des armes résonne bruyamment dans toute la région de Kokuyou, l'unité Hi Shin s'apprête à réussir ce qui lui vaudra incontestablement les plus grands mérites de cette bataille. Sur qui la foudre de Shin et de ses camarades va-t-elle tomber ? Le seigneur Kisui, général talentueux de Zhao, dont le nom était demeuré mystérieusement méconnu jusque-là, ne compte toutefois pas déposer les armes. Kanki, sortie de son silence, laisse alors planer sur les deux armées, l'ombre de son plan terrible et fait entrer directement la bataille de Kokuyou dans sa dernière phase !!",
                'manga_cover' => 'Kingdom_44.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 45',
                'publication_date' => new DateTime('2020-06-25'),
                'synopsis' => "Alors que les deux armées semblaient être dans une impasse, la situation va brusquement évoluer sur le champ de bataille de Kokuyou !! Le général Kanki impose à Kisui un choix particulièrement cruel. Tandis que tous les officiers de l'armée de Zhao retiennent leur souffle, quelle sera la décision prise par le seigneur de Rigan ? Se pourrait-il que cette bataille, menée à coups de stratagèmes, arrive enfin à son terme ? Mais qui est cet observateur à l'affût dans les bois ? Et puis surtout, qui est cet homme éminent, venu sans prévenir, rendre visite à Ei Sei, le roi de Qin, directement dans la cité de Kanyou…?!",
                'manga_cover' => 'Kingdom_45.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 46',
                'publication_date' => new DateTime('2020-06-25'),
                'synopsis' => "Deux jeunes frères, motivés pour intégrer la désormais fameuse unité Hi Shin, se présentent aux épreuves de recrutement. Leur génie indéniable au tir à l'arc, servira-t-il d'élément-clef permettant à cette unité de s'élever ? Au même moment et dans l'optique d'unifier toute la Chine, l'Etat-major de Qin prépare une grande guerre contre son voisin Zhao. Cependant, Riboku, le chancelier de cet état, ne laisse entrevoir aucune carte de son jeu. Quelle stratégie pourra donc bien conduire les troupes de Qin vers la victoire ?",
                'manga_cover' => 'Kingdom_46.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 47',
                'publication_date' => new DateTime('2020-08-28'),
                'synopsis' => "L'armée du général Ousen progresse à vive allure vers Retsubi, qui ouvre vers l'état de Zhao. Selon le tacticien Shouheikun, la conquête de cette ville est essentielle à l'avenir de Qin, tout comme celle de Gyou, pièce maîtresse des opérations à venir et enjeu du duel stratégique qui oppose Riboku à Ousen… Comment la situation va-t-elle évoluer ? Les deux camps retiennent leur souffle.",
                'manga_cover' => 'Kingdom_47.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 48',
                'publication_date' => new DateTime('2020-08-28'),
                'synopsis' => "Après avoir pris Retsubi, Ousen et son armée font route vers la cité de Gyou. Mais bien que le temps soit compté, ils s'attardent pour conquérir de nombreuses petites villes en chemin. Que cache cette étrange stratégie ? Quant à lui, Riboku a rendu visite à son roi avant de réunir ses troupes pour ce qui s'annonce d'ores et déjà comme la plus grande des guerres opposant Zhao à Qin…",
                'manga_cover' => 'Kingdom_48.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 49',
                'publication_date' => new DateTime('2020-08-28'),
                'synopsis' => "Pour soulager Gyou du siège de Qin, le brillant tacticien Riboku envoie ses troupes attaquer l'ennemi sur deux fronts différents. En conséquence, Yôtanwa et Heki sont contraints de déplacer leur bataille vers la ville de Ryôyô tandis que les rivaux et amis Shin, Mouten et Ouhon guerroient âprement sur les plaines de Shukai. La position isolée de Mouten semble vouée à le mettre en difficulté, mais il parvient pour l'instant à maîtriser la situation. Reste à savoir comment réagira le talentueux chef adverse…",
                'manga_cover' => 'Kingdom_49.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 50',
                'publication_date' => new DateTime('2020-08-28'),
                'synopsis' => "Sur ordre direct du général Ousen, l'unité Hi Shin tout entière rejoint l'aile droite de Qin sur les plaines de Shukai. Là, elle affronte de plein fouet les troupes de Gyôun, général de Zhao. Qui sortira vainqueur de cette brutale confrontation ? À Kanyou, où les premières nouvelles du front parviennent tout juste à la cour, chacun retient son souffle…",
                'manga_cover' => 'Kingdom_50.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 51',
                'publication_date' => new DateTime('2020-10-29'),
                'synopsis' => "Dans les plaines de Shukai, Ousen ordonne enfin à l'unité Hi Shin de se joindre à la bataille pour aller soutenir l'aile droite de Qin. Au paroxysme de l'affrontement, Shin part défier le général Gyôun en personne. Qui sortira victorieux de ce duel au sommet ? À Kanyou, la capitale de Qin, chacun retient son souffle dans l'attente du dénouement tandis que des nouvelles des premières lignes parviennent au palais… Voici la suite d'une guerre décidément riche en rebondissements !!",
                'manga_cover' => 'Kingdom_51.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 52',
                'publication_date' => new DateTime('2020-10-29'),
                'synopsis' => "L'ingénieux stratège Riboku est parvenu à percer le mystère qui entourait la formation défensive du général Akou, pourtant réputée infranchissable, et permet à Gyôun de porter directement le fer jusqu'à l'officier de Qin. Dans le même temps, Shin s'engage dans un duel contre Gakuei, mais sera-t-il vraiment en mesure de rivaliser ? Du côté de Ryôyô, les forces de Qin, contraintes à l'action par l'épuisement de leurs vivres, enchaînent les attaques générales afin de débloquer la situation. C'est alors que le général Heki aperçoit tout à coup la silhouette de Bunen, l'un des commandants ennemis…",
                'manga_cover' => 'Kingdom_52.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 53',
                'publication_date' => new DateTime('2020-10-29'),
                'synopsis' => "9e jour des hostilités. Dans les plaines de Shukai, Shin a tué le général Gakuei, mais le général Akou, bras droit d'Ousen, a été grièvement blessé par le Gyôun. Du côté de Ryôyô, si les hommes des montagnes ont réussi à éliminer deux des trois commandants quanrong malgré la faim qui les tenaille, Yôtanwa et Bajio ont été isolés et sont traqués comme des bêtes dans les montagnes… Comment l'armée de Qin se tirera-t-elle de ces situations de plus en plus intenables ?!",
                'manga_cover' => 'Kingdom_53.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 54',
                'publication_date' => new DateTime('2020-10-29'),
                'synopsis' => "Suite aux exhortations de leurs capitaines respectifs, les soldats des unités Hi Shin et Gyoku Hou se trouvent galvanisés et gonflés à bloc. Bien décidés à retourner la situation à leur avantage, ils jettent désormais toutes leurs forces dans la bataille !! Ousen, le général en chef des forces de Qin, n'attendait que ce signal pour manoeuvrer et avancer son armée ! Tandis que la confrontation décisive entre les deux troupes s'annonce imminente, on procède à l'ultime distribution de vivres du côté de Qin…",
                'manga_cover' => 'Kingdom_54.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 55',
                'publication_date' => new DateTime('2020-12-17'),
                'synopsis' => "Vers un ultime assaut dans les plaines de Shukai ?Au 14e jour de bataille, Shin, qui commande provisoirement toute l'aile droite de Qin, décide de lancer une charge générale sur l'ennemi avec l'objectif de venir à bout du général Chôgaryû, stratège important de l'armée de Zhao. Alors qu'Ouhon a été gravement blessé la veille et que les réserves de vivres sont pour ainsi dire épuisées, la victoire ne peut plus attendre. Mais cette stratégie téméraire met en péril Kanto et les autres nouvelles recrues de l'unité Hi Shin…",
                'manga_cover' => 'Kingdom_55.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 56',
                'publication_date' => new DateTime('2020-12-17'),
                'synopsis' => "Au matin du 15e jour, les troupes de Qin, affamées, lancent enfin l'assaut sur l'armée centrale de Zhao. Si Riboku se contente dans un premier temps de résister en attendant que l'armée d'Ousen s'épuise, l'arrivée d'un messager porteur de nouvelles de Gyou le pousse à revoir son attitude et à se montrer résolument plus agressif. Les deux camps s'engagent alors dans une féroce lutte pour la victoire.",
                'manga_cover' => 'Kingdom_56.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 57',
                'publication_date' => new DateTime('2020-12-17'),
                'synopsis' => "Maintenant que Shin a vaincu Chôgaryû et Ouhon Gyôun, l'aile droite de Qin a le champ libre pour attaquer le flanc de l'armée centrale de Zhao, qui fait déjà face aux troupes d'Ousen. Mais si Riboku est pris en tenailles, il compte bien renverser la situation en envoyant Futei se frayer un chemin jusqu'au général ennemi. Alors même qu'elle est à son paroxysme, la bataille des plaines de Shukai n'a toujours pas basculé de manière certaine en faveur d'un camp ou de l'autre, mais c'est aujourd'hui que tout se jouera !",
                'manga_cover' => 'Kingdom_57.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 58',
                'publication_date' => new DateTime('2020-12-17'),
                'synopsis' => "Au 15e jour de la bataille des plaines de Shukai, la progression de l'unité Hi Shin vers Riboku est brutalement stoppée par l'arrivée inattendue du redoutable Houken. Bien qu'épuisé, affamé et blessé, Shin l'affronte en duel, et l'issue de leur affrontement pourrait bien être déterminant pour le conflit tout entier. Gyou tombera-t-elle aux mains de Qin ? Et qui remportera cette terrible guerre dont les racines remontent à l'armée de la coalition ?!",
                'manga_cover' => 'Kingdom_58.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 59',
                'publication_date' => new DateTime('2021-04-28'),
                'synopsis' => "Après d'âpres combats dans les plaines de Shukai, l'armée de Qin est parvenue à s'emparer de l'imprenable Gyou, place-forte cruciale de Zhao. Mais la liesse est de courte durée, car les hommes d'Ousen sont à court de vivres, et leurs adversaires se tiennent prêts à détruire tout convoi qui tenterait de les ravitailler. Malgré les souffrances que Shin et ses frères d'armes ont déjà endurées, ils ne sont pas encore au bout de leurs peines… À moins, bien sûr, que le brillant général Ousen ait déjà tout prévu.",
                'manga_cover' => 'Kingdom_59.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 60',
                'publication_date' => new DateTime('2021-04-28'),
                'synopsis' => "Une inquiétante rumeur court à Qin : on dit que Ryo Fui, depuis la ville où il est exilé, réunit les ennemis du roi en vue de quelque sombre dessein. Incapable d'ignorer cette crise potentielle, Sei décide d'aller rendre visite lui-même à son ancien rival. En effet, il ne peut se permettre d'avoir à gérer une guerre civile, car la conquête de Zhao se heurte aux solides lignes défensives réunies autour de la capitale. Pour parer à ces difficultés, Shouheikun prend une décision inattendue…",
                'manga_cover' => 'Kingdom_60.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 61',
                'publication_date' => new DateTime('2021-12-22'),
                'synopsis' => "Alliés pour trois ans, les États de Qin et de Wei joignent leurs forces pour conquérir Jûko, une place-forte stratégique de Chu. Leurs adversaires seront quatre redoutables généraux au passé tragique, qui comptent bien leur opposer une résistance acharnée. Sûrs de leur puissance, ceux-ci choisissent d'affronter l'envahisseur en terrain découvert plutôt que depuis leurs murs. Lors de l'offensive principale des alliés, Moubu affronte en duel le terrible général Manu, dont l'attitude semble inhabituelle…",
                'manga_cover' => 'Kingdom_61.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 62',
                'publication_date' => new DateTime('2021-12-22'),
                'synopsis' => "Assuré de ne pas être attaqué par Wei pour quelques années encore, Qin a les mains libres pour déchaîner ses armées sur Zhao. Mais pour faire tomber l'État, il faut prendre sa capitale. Le premier objectif d'Ousen, Yôtanwa et Kanki sera donc de prendre les cités environnantes de Bujô et de Heiyou. Pendant ce temps, l'unité Hi Shin trépigne d'impatience en attendant d'être sollicitée par les armées d'Ousen ou de Kanki, entre lesquelles elle est postée…",
                'manga_cover' => 'Kingdom_62.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 63',
                'publication_date' => new DateTime('2022-11-18'),
                'synopsis' => "234 av. J-C : La conquête de Bujô et Heiyou Dans le but de pouvoir porter leur offensive jusqu'à Kantan, la capitale de l'État de Zhao, les troupes de l'État de Qin se lancent à l'attaque des villes ennemies Bujô et Heiyou. Alors que l'armée de Kanki est dans une situation d'infériorité numérique terrible avec 80.000 hommes contre 240.000, l'unité Hi Shin, déployée dans ses rangs, reçoit l'ordre de se diriger vers Eikyû, un lieu réputé aussi stratégique que dangereux. C'est là, au pied d'une colline escarpée que les hommes de Shin tombent sur la Gyoku Hou, en pleine déconfiture, et qu'ils se retrouvent avec le sort de toute l'armée de Qin entre leurs mains...",
                'manga_cover' => 'Kingdom_63.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 64',
                'publication_date' => new DateTime('2022-11-18'),
                'synopsis' => "234 av. J-C : La conquête de Bujô et Heiyou L'État de Qin porte le fer contre les villes Bujô et Heiyou, les deux dernières places ennemies qui ferment la route menant à la capitale de Zhao. L'armée de Kanki, d'abord confrontée à une dangereuse infériorité numérique, parvient, grâce à l'action brillante de l'unité Hi Shin, à conquérir le terrain escarpé d'Eikyû et à débloquer une situation qui paraissait désespérément figée jusque-là. Tandis que les défaites et désertions se succèdent au niveau des troupes du centre, plus personne ne semble curieusement savoir où est passé le général Kanki...",
                'manga_cover' => 'Kingdom_64.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 65',
                'publication_date' => new DateTime('2023-04-14'),
                'synopsis' => "L'armée de Qin est parvenue à défaire les troupes du général Kochô, et se trouve désormais à proximité immédiate de Bujô et de Heiyou, les deux dernières villes qui lui barraient la route de la capitale de Zhao. Mais l'ingénieux stratège Riboku, de nouveau aux commandes de l'armée ennemie, parvient à entraver leur marche. Le grand général Ousen et le commandant Shouheikun, contraints de modifier leurs plans, désignent donc un nouvel endroit où devra se tenir l'ultime confrontation entre les deux forces en présence…",
                'manga_cover' => 'Kingdom_65.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 66',
                'publication_date' => new DateTime('2023-04-14'),
                'synopsis' => "Les troupes de Qin, fermement résolues à conquérir Kantan, la capitale de l'État de Zhao, cherchent à faire route depuis les terres septentrionales de Gian. Mais le talentueux Riboku, qui a repris sa position dans les premières lignes ennemies, est parvenu à y concentrer un nombre colossal de soldats prêts à en découdre jusqu'au bout. Une bataille d'une envergure inédite avec pour enjeu, le destin des deux États, s'apprête à faire rage… L'armée de Qin, désormais complètement encerclée, peut-elle encore espérer l'emporter ?",
                'manga_cover' => 'Kingdom_66.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 67',
                'publication_date' => new DateTime('2023-12-15'),
                'synopsis' => "Riboku, qui semble décidément avoir tout prévu, a complètement encerclé les forces dirigées par le général Kanki. Si l'unité Hi Shin et la Gaku ka sont parvenues à s'extraire de la mêlée, le gros des armées se trouve acculé et demeure en mauvaise posture… Soudain, Kanki donne l'ordre à ses hommes de se déployer dans une formation inédite et parvient à décontenancer complètement les rangs adverses. L'ancien bandit devenu un des Six Grands Généraux de Qin, parviendra-t-il à se frayer un chemin hors de cette masse et réussira-t-il à redonner un peu d'espoir à ses troupes ?!",
                'manga_cover' => 'Kingdom_67.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 68',
                'publication_date' => new DateTime('2023-12-15'),
                'synopsis' => "Écrasés tout d'abord par la supériorité numérique de leurs adversaires, les hommes de Kanki parviennent néanmoins à sortir du piège que leur avait tendu Riboku, et à rejoindre la cité de Gian, facilement prise par Shin et ses compagnons. Leurs regards sont désormais tournés vers un autre bastion adverse, la cité de Sekirei, qui pourrait jouer un rôle-clef en leur permettant de lancer une contrattaque et de changer la donne. C'est précisément au pied des murailles de cette ville qu'arrivent le général Heki et ses hommes…",
                'manga_cover' => 'Kingdom_68.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 69',
                'publication_date' => new DateTime('2023-12-15'),
                'synopsis' => "Les troupes de Qin, désireuses de conquérir l'opulente ville de Kantan, progressent rapidement dans les profondeurs de l'État de Zhao, en direction de la cité de Gian. Leur marche se trouve tout à coup entravée par le génie tactique de Riboku qui paraît décidément avoir toujours un coup d'avance et qui réussit à asséner des dégâts considérables aux armées de Qin. Au moment où Kanki et son état-major se retrouvent acculés, l'ancien bandit devenu Grand Général choisit d'abattre sa dernière carte et de lancer toutes ses forces dans un ultime assaut contre le brillant stratège de Zhao…",
                'manga_cover' => 'Kingdom_69.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 70',
                'publication_date' => new DateTime('2024-08-23'),
                'synopsis' => "233 av. J.-C. : L'invitation à un penseur L'État de Qin, dont les troupes avaient réussi à avancer jusqu'à Gian, vient d'essuyer une cuisante défaite contre Riboku. L'armée de Kanki a été entièrement décimée. Alors qu'une atmosphère pesante s'abat sur tout le pays, le roi Ei Sei ordonne à Shin et Tou, l'un des Six Grands Généraux, de faire route vers l'État de Han. Leur mission ? Eff ectuer des observations dans la capitale Shintei et convier à la Cour l'immense penseur Kanpi Shi…",
                'manga_cover' => 'Kingdom_70.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],

            [
                'title' => 'Tome 71',
                'publication_date' => new DateTime('2024-08-23'),
                'synopsis' => "232 av. J.-C. : La bataille de Hango L'armée de Qin a subi une terrible déconfiture contre Riboku, lors de la \"bataille pour Gian\" qui s'est déroulée l'année précédente, et au cours de laquelle Kanki, l'un des Six Grands Généraux, a trouvé la mort. La nouvelle année venue, une mobilisation générale est de nouveau décrétée et l'État de Qin, désireux de recouvrer son honneur, concentre toutes ses forces à Hango où doit se jouer une bataille décisive. L'unité Hi Shin, élargie et renouvelée en grande partie, parviendra-t-elle à y assumer le rôle primordial qui lui a été confié ?",
                'manga_cover' => 'Kingdom_71.jpg',
                'average_rating' => null,
                'author_id' => 6, //Yasuhisa Hara
                'series_id' => 5 //Kingdom
            ],


            //Tokyo ghoul
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2013-08-28'),
                'synopsis' => "À Tokyo, sévissent des goules, monstres cannibales se dissimulant parmi les humainspour mieux s’en nourrir. Étudiant timide, Ken Kaneki est plus intéressé par la jolie fille qui partage ses goûts pour la lecture que par ces affaires sordides, jusqu’au jour où il se fait attaquer par l’une de ces fameuses créatures. Mortellement blessé, il survit grâce à la greffe des organes de son agresseur… Remis de son opération, il réalise peu à peu qu’il est devenu incapable de se nourrir comme avant et commence à ressentir un appétit suspect envers ses congénères. C’est le début d’une descente aux enfers pour Kaneki, devenu malgré lui un hybride mi-humain, mi-goule.",
                'manga_cover' => 'Tokyo_ghoul_1.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2013-11-06'),
                'synopsis' => "Ken Kaneki voit sa vie lentement basculer après avoir reçu des organes de Goule lors d une transplantation. Ken tente d'apaiser ce conflit intérieur en travaillant à L'Antik, un café tenu par des Goules. Cependant, il est bientôt confronté aux inspecteurs de la brigade des Goules, surnommés colombes. Ces ennemis mortels usent des moyens les plus retors afin de pourchasser sans répit ceux qu'ils ont pour mission d'éliminer !",
                'manga_cover' => 'Tokyo_ghoul_2.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2014-01-03'),
                'synopsis' => "Hinami a vu les “colombes” ôter la vie de ses deux parents.Ken et Toka décident de se rendre chez l’ennemi, au quartier général du C.C.G., pour aider comme ils le peuvent leur jeune amie désespérée. Seulement, cette action risquée n’est que le prélude d’une série de tristes conséquences…",
                'manga_cover' => 'Tokyo_ghoul_3.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2014-03-05'),
                'synopsis' => "Durant son combat contre un inspecteur du CCG., Ken réalise que son entrée dans le monde des goules a laissé sur lui une marque indélébile. Mais il lui faudra du temps avant de prendre pleinement conscience de ce que cela implique… Quant au café “Antique”, il reçoit la visite d’une nouvelle goule, Shu Tsukiyama, dit “le gourmet”. Ce fervent gastronome en quête permanente de saveurs nouvelles semble intrigué par Ken et tente de se lier d’amitié avec lui…",
                'manga_cover' => 'Tokyo_ghoul_4.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2014-05-07'),
                'synopsis' => "Shu Tsukiyama, surnommé “le Gourmet” en raison de sa quête de saveurs nouvelles, s’intéresse de près à Ken Kaneki et au fumet mystérieux qu’il dégage. Bien que Ken se soit échappé de son premier traquenard, Shu ne renonce pas pour autant, et tend à Ken un nouveau piège. Ce dernier n’a plus le choix, il doit affronter son prédateur dans un combat qui semble perdu d’avance. Mais cette confrontation sera l’étincelle qui réveillera une goule jusqu’alors endormie…",
                'manga_cover' => 'Tokyo_ghoul_5.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2014-07-02'),
                'synopsis' => "Dans le 11e arrondissement, où vivait autrefois Lize, des goules se regroupent pour détruire le C.C.G… Ken, mis au courant de ce plan inquiétant par Banjo, est bientôt rejoint par d’autres goules du 11e, elles aussi en quête d’informations sur Lize…Quel est au final le véritable but de ce clan de goules qui se fait appeler “Aogiri” ?!",
                'manga_cover' => 'Tokyo_ghoul_6.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2014-09-03'),
                'synopsis' => "\"N’espérez pas revoir Ken.\" C’est sur cette déclaration fracassante de M. Yoshimura que les membres de l’“Antique” se dirigent vers le 11e arrondissement pour tenter de sauver malgré tout leur ami.Une mission d’autant plus difficile que Ken se trouve en plein cœur du repaire d’Aogiri auquel les inspecteurs du C.C.G. s’apprêtent à donner l’assaut. Un repaire où Ken risque d’être changé à jamais par ce que les mains perverses de Yamori vont lui faire subir…",
                'manga_cover' => 'Tokyo_ghoul_7.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2014-11-05'),
                'synopsis' => "Éveillé à sa nature de goule, Ken se retrouve face à Toka et Ayato, deux ombres d’une famille effondrée. Le CCG doit pour sa part faire face aux goules vindicatives d’Aogiri. Pire, une autre ombre surgie du passé lance un nouveau défi au CCG. La “Chouette” est revenue affronter ses adversaires de toujours…",
                'manga_cover' => 'Tokyo_ghoul_8.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2015-01-07'),
                'synopsis' => "Six mois ont passé depuis l’assaut dans le 11e arrondissement. L’expédition du CCG contre “Aogiri” donne lieu à une série de promotions au sein des inspecteurs. Kotaro Amon, devenu inspecteur en chef, se voit enfin attribué la responsabilité d’un novice dont l’identité a de quoi surprendre. Ken s’est quant à lui éloigné de l’“Antique” pour remonter la piste de Lize jusque dans le 6e arrondissement, avec l’aide de Shu et Banjo. Mais le fil de leurs enquêtes respectives va fatalement rapprocher Ken et Kotaro…",
                'manga_cover' => 'Tokyo_ghoul_9.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2014-03-04'),
                'synopsis' => "Le Dr Kano est bien là, quelque part. Il y a d’abord eu ces goules à l’œil écarlate, êtres artificiels rencontrés par Ken au restaurant. Puis il y a ce poste surprenant qu’occupait le chirurgien. Et Lize… Le projet pervers du mystérieux Kano commence à livrer ses secrets, petit à petit…",
                'manga_cover' => 'Tokyo_ghoul_10.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('1999-01-01'),
                'synopsis' => "",
                'manga_cover' => 'Tokyo_ghoul_11.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2015-05-06'),
                'synopsis' => "Le Dr Kano, ancien légiste du CCG, a trahi les humains pour rejoindre les goules. Yomo s'est enfui avec Lize, toujours vivante. Le patron Yoshimura serait à l'origine d'Aogiri… ",
                'manga_cover' => 'Tokyo_ghoul_12.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2015-09-30'),
                'synopsis' => "\"Je vais retourner à l’“Antique\". C’est ainsi que Ken décide de fermer son repaire du 6e arrondissement pour retourner dans le 20e, près du patron Yoshimura. Pour tout reprendre à zéro. Pour retrouver celui qu’il était avant. Au même moment, le CCG s’apprête à lancer une vaste opération pour éliminer la \"Chouette\". Une foule d’inspecteurs brûle de mettre un terme à une lutte vieille de dix ans, à l’aide des instruments de mort forgés à partir des dépouilles de leurs ennemis.",
                'manga_cover' => 'Tokyo_ghoul_13.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            [
                'title' => 'Tome 14',
                'publication_date' => new DateTime('2015-11-25'),
                'synopsis' => "\"J’aimerais connaître ton histoire.\" Une requête étrange, alors même que l’opération du CCG destinée à abattre la “Chouette” atteint son paroxysme. Devant Ken qui fonce vers l’“Antique” se tient l’auteur de cette requête, l’inspecteur Kotaro Amon. Ken et Kotaro, deux destinées vouées à s’affronter, jusqu’à la plus incertaine des issues..",
                'manga_cover' => 'Tokyo_ghoul_14.jpg',
                'average_rating' => null,
                'author_id' => 7, //Sui Ishida
                'series_id' => 6 //Tokyo ghoul
            ],

            //Solo leveling
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2021-04-07'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_1.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2021-06-09'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_2.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2021-09-08'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_3.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2021-11-10'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_4.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2022-02-09'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_5.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2022-05-04'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_6.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2022-09-21'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_7.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2022-11-09'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_8.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2023-01-03'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_9.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2023-06-14'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_10.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2023-09-20'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_11.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2024-01-10'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_12.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2024-05-29'),
                'synopsis' => "Lorsque d'étranges portails sont apparus aux quatre coins du monde, l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.",
                'manga_cover' => 'Solo_leveling_13.jpg',
                'average_rating' => null,
                'author_id' => 8, //Chu-Gong
                'series_id' => 7 //Solo leveling
            ],


            //Kaiju n°8
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2021-10-06'),
                'synopsis' => "Enfant, Kafka Hibino rêvait d’intégrer les Forces de Défense pour combattre ces terribles ennemis, mais après de nombreux échecs à l’examen d’entrée, ce trentenaire travaille à nettoyer les rues de leurs encombrants cadavres. Jusqu’au jour où une mystérieuse créature s’introduit dans son organisme et le métamorphose en une entité surpuissante mi-humaine, mi-kaiju. Son nouveau nom de code : “Kaiju n° 8” !",
                'manga_cover' => 'Kaiju_n8_1.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2021-12-08'),
                'synopsis' => "Alors que la dernière épreuve de l'examen pour intégrer les Forces de Défense s'achève, un mystérieux kaiju humanoïde fait son apparition et ressuscite le monstre principal que Kikoru venait d'abattre. Pour la sauver, Kafka n'a pas d'autre choix que de se transformer devant elle, lui dévoilant son secret ! Cette intervention ne fait qu'attiser les soupçons du vice-commandant Hoshina sur sa nouvelle recrue… C'est alors qu'une alerte kaiju résonne : un honju colossal, entouré d'une myriade de yoju, a surgi dans la banlieue de Tokyo !",
                'manga_cover' => 'Kaiju_n8_2.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2022-02-02'),
                'synopsis' => "Volant au secours d'Ichikawa et de Furuhashi, Kafka n'a d'autre choix que la métamorphose pour affronter le kaiju humanoïde. Alors que le Kaiju n°8 domine son adversaire, l'intervention inopinée d'une escouade des Forces de Défense l'empêche d'achever l'ennemi, qui en profite pour prendre la fuite. Kafka décide de s'éclipser discrètement lui aussi mais il tombe nez à nez avec le vice-commandant Hoshina…",
                'manga_cover' => 'Kaiju_n8_3.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2022-04-06'),
                'synopsis' => "Un raid aérien s'abat sur la base de Tachikawa ! Les membres des Forces de Défense réagissent rapidement et parviennent à repousser les yoju, tandis que le vice-commandant Hoshina libère sa puissance maximale pour affronter le méga-kaiju qui dirige l'attaque ! Mais alors que le combat semble tourner à l'avantage du sabreur, un changement inattendu se produit chez son adversaire… Cette nouvelle menace est sérieuse, car elle met immédiatement en alerte le sixième sens de Kafka…",
                'manga_cover' => 'Kaiju_n8_4.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2022-06-08'),
                'synopsis' => "Démasqué et capturé par les Forces de Défense, qui le considèrent comme une menace, Kafka se trouve face au directeur Isao Shinomiya, venu en personne procéder à son exécution. Luttant sans relâche pour prouver sa nature d'être humain, Kafka perd malheureusement la maîtrise de son pouvoir face à la puissance du Kaiju n° 2. Parviendra-t-il à ramener le n° 8 sous contrôle avant qu'il soit trop tard ?!",
                'manga_cover' => 'Kaiju_n8_5.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2022-08-31'),
                'synopsis' => "Une nouvelle fois confronté à une attaque du Kaiju n° 9, Kafka ne parvient pas à se transformer. Rejoint par Kikoru, qui l'aide à faire face aux stratagèmes de l'ennemi, il finit par réaliser qu'une peur inconsciente le retient... Au même moment, une nouvelle menace surgit devant le commandant Narumi. Le n° 9 serait-il capable d'évoluer en cours de combat ?!",
                'manga_cover' => 'Kaiju_n8_6.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2022-12-07'),
                'synopsis' => "Alors que le directeur, Isao Shinomiya, semble sur le point de triompher du terrible Kaiju n° 9 au terme d’un combat titanesque, un étrange phénomène se produit… Dans un ultime effort, l’ennemi parvient finalement à atteindre son objectif en absorbant les pouvoirs du n° 2, puis tente de prendre la fuite. Mais c’est sans compter Kafka, Kikoru et Narumi qui ont accouru sur les lieux pour l’arrêter !",
                'manga_cover' => 'Kaiju_n8_7.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2023-03-29'),
                'synopsis' => "Après l'entraînement spécifique qu'il a suivi, voici venue l'heure pour Reno de prouver qu'il est véritablement apte à utiliser un modèle numéroté sur le terrain ! De son côté, Iharu bouillonne face à la progression fulgurante de son camarade mais un événement imprévu qui survient en plein combat va produire un déclic...",
                'manga_cover' => 'Kaiju_n8_8.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2023-06-28'),
                'synopsis' => "Tandis que Reno, tout premier candidat compatible avec le modèle n° 6, poursuit son entraînement, Kafka redouble d'efforts pour apprendre les techniques martiales de Hoshina. Dans le même temps, les Forces de Défense préparent leurs différentes unités et Narumi donne son feu vert à Kikoru pour qu'elle utilise le modèle n° 4, celui de sa mère. La nouvelle génération sera-t-elle parée à encaisser la nouvelle offensive du Kaiju n° 9 ?",
                'manga_cover' => 'Kaiju_n8_9.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2023-11-22'),
                'synopsis' => "Équipé du modèle n° 10, la toute première arme kaiju dotée de sa conscience propre, Hoshina parvient non sans heurts à élever son potentiel de combat pour triompher de la meute de kaiju opposés à lui. Une bataille de gagnée, mais pas la guerre : au même moment, six giga-kaiju surgissent dans le secteur d'Ôizumi où se trouve Kafka. La situation prend une tournure catastrophique, mais un renfort inattendu entre en scène !",
                'manga_cover' => 'Kaiju_n8_10.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2024-04-03'),
                'synopsis' => "Les cinq kaiju surpuissants créés par le n°9 prennent la division Est d'assaut. Programmés pour anéantir les Forces de Défense, ces monstres mettent même les meilleurs commandants en difficulté ! Alors qu'il s'élance au secours du lieutenant Shinonome, Kafka se rappelle la promesse faite à Kikoru quelques jours auparavant…",
                'manga_cover' => 'Kaiju_n8_11.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2024-09-11'),
                'synopsis' => "L'est du pays fait face à un assaut groupé de kaiju numérotés. Alors que Narumi et Kikoru sont parvenus à bout de leur adversaire respectif, Hoshina se retrouve en difficulté contre le n° 12, qui n'est autre que la version optimisée du n° 10 ! Le combat est d'autant plus à son désavantage qu'il ne parvient pas à élever son potentiel de combat au-delà de 83 %… Mais un sabre à la main, il refuse de s'avouer vaincu !",
                'manga_cover' => 'Kaiju_n8_12.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2025-01-08'),
                'synopsis' => "à suivre...",
                'manga_cover' => 'Kaiju_n8_13.jpg',
                'average_rating' => null,
                'author_id' => 9, //Naoy Matsumoto
                'series_id' => 8 //Kaiju n°8
            ],


            //Fullmetal Alchemist
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2020-03-12'),
                'synopsis' => "En voulant ressusciter leur mère, Edward et Alphonse Elric utilisent une technique alchimique interdite : la transmutation humaine. Seulement, l'expérience tourne mal : Edward perd un bras et une jambe et Alphonse, son corps, son esprit se retrouvant prisonnier d'une armure. Devenu un alchimiste d'État, Edward, surnommé le Fullmetal Alchemist, se lance, avec l'aide de son frère, à la recherche de la pierre philosophale, seule chance de retrouver leurs corps. Les deux frères commencent à enquêter sur un homme étrange, « le fondateur », qui passe pour un faiseur de miracles…",
                'manga_cover' => 'Fullmetal_alchemist_1.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2020-03-12'),
                'synopsis' => "Une fois à Central City, les deux frères Elric font la connaissance des deux personnes qui deviendront leurs plus précieux alliés : Roy Mustang alias l'alchimiste de feu, et le débonnaire Louis Armstrong, colosse au cœur tendre ne manquant jamais une occasion de se déshabiller pour dévoiler son imposante musculature. Mais pour nos héros, il s'agit surtout de commencer leurs investigations tandis qu'un mystérieux alchimiste est soupçonné de réaliser des expériences interdites sur des humains. C'est d'ailleurs au cours de cette première enquête qu'ils font la connaissance de leur plus redoutable rival, le terrifiant Scar ! Vengeur ténébreux et mystérieux, ce dernier sème la panique sur la capitale, exécutant de sang-froid tous les alchimistes d'État qui lui barrent la route.",
                'manga_cover' => 'Fullmetal_alchemist_2.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2020-06-04'),
                'synopsis' => "Après un combat dévastateur contre l'énigmatique Scar, Edward et Alphonse se rendent dans leur village natal afin de réparer leurs corps meurtris. C'est l'occasion pour les frères Elrics de retrouver Winry Rockbell, leur amie d'enfance ainsi que sa grand-mère Pinako Rockbell qui sont les mécaniciennes les plus réputées de la région. Mais le repos est de courte durée et nos alchimistes partent rapidement pour la capitale, Central, afin de percer le secret de la pierre philosophale et du Laboratoire N°5…",
                'manga_cover' => 'Fullmetal_alchemist_3.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2020-08-04'),
                'synopsis' => "Après quelques péripéties dans la région de Rush Valley, Edward et Alphonse quittent leur amie Winry, qui veut se perfectionner en mécanique, pour continuer leur voyage vers le sud du pays. Toujours en quête d’informations concernant la transmutation humaine, nos deux alchimistes se rendent chez leur maître, la terrible Izumi Curtis. C’est l’occasion de se remémorer les conditions de leur rencontre et le terrible entraînement qu’elle leur a fait subir.",
                'manga_cover' => 'Fullmetal_alchemist_4.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2020-11-12'),
                'synopsis' => "Alors qu'Edward s'absente pendant quelques jours pour passer son examen annuel d'alchimiste d'État, Alphonse se fait prendre en otage par le terrible gang du Devil's Nest. Leur leader, Greed, veut percer le secret du jeune frère Elric afin d'obtenir la vie éternelle. Il faudra l'intervention d'Edward mais surtout celle du président King Bradley en personne pour venir en aide à Alphonse. Pourquoi l'homme le plus important du pays a-t-il pris tant de risques ? Quels mystères se cachent derrière la marque de l'Ouroboros ? Qui sont ces étranges visiteurs venus du pays de Xing ?",
                'manga_cover' => 'Fullmetal_alchemist_5.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2021-03-11'),
                'synopsis' => "L'aventure des frères Elric continue avec la découverte des secrets renfermés par le corps de Barry le boucher. Quel est donc le rôle exact de l'armée dans ce qui semble être un complot à l'envergure de plus en plus incalculable ?",
                'manga_cover' => 'Fullmetal_alchemist_6.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2021-06-10'),
                'synopsis' => "Les frères Elric sont de retour à Central City accompagnés de Winry, leur amie d'enfance, et de Lin, un mystérieux visiteur en provenance de la lointaine contrée de Xing. Ils découvrent avec douleur que la ville est le théâtre d'un complot terrible impliquant les plus hautes instances de l'armée. Le colonel Mustang et son équipe, au cœur de la tourmente, tentent de démêler le fil de la vérité ; même si pour cela, ils risquent de tout perdre. Militaires ou homonculi, qui restera en vie ?!",
                'manga_cover' => 'Fullmetal_alchemist_7.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2021-09-09'),
                'synopsis' => "Après avoir découvert les mille et une merveilles de la cité perdue de Xerxes, Edward est de retour dans son village natal de Resembool. Alors qu'il se rend au cimetière de la petite bourgade, il va y faire une rencontre inattendue qui lui permettra d'en apprendre plus sur la transmutation de sa mère… Pendant ce temps, à Central City, le danger est partout. Scar continue son jeu de massacre dans le rang des alchimistes d'État. Les homonculi, plus dangereux que jamais, sont bien décidés à mener à terme leurs plans machiavéliques. Qui pourra enfin percer le secret de cette organisation mystérieuse ? Les frères Elric vont-ils pouvoir retrouver leurs corps ? Et qui est cet énigmatique individu qui se recueille sur la tombe de leur mère ?",
                'manga_cover' => 'Fullmetal_alchemist_8.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2021-12-09'),
                'synopsis' => "Après une lutte sans merci contre Scar dans laquelle l'innocente Winry a failli perdre la vie, les frères Elric et Lin arrivent à capturer l'homonculus nommé Gluttony. Mais cet acte ne s'est pas fait sans dommage et Ranfan s'est grièvement blessée lors de sa fuite. Aidés du colonel Roy Mustang et du lieutenant Riza Hawkeye, ils emmènent Gluttony hors de la ville pour l'interroger. Mais l'homonculus joufflu au caractère habituellement jovial se révèle être un monstre aux pouvoirs dépassant l'entendement.",
                'manga_cover' => 'Fullmetal_alchemist_9.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2022-03-10'),
                'synopsis' => "La lutte contre les homonculi s'intensifie ! Après un combat sans merci, Edward et Lin se sont fait avaler par Gluttony. Ils découvrent dans son gigantesque estomac de nombreux éléments concernant le complot organisé par les homonculi et la véritable apparence de Envy. Ils arrivent à s'extraire de la panse du monstre, mais tombent nez à nez avec un mystérieux personnage qui ressemble trait pour trait à Van Hohenheim. De son côté, le colonel Roy Mustang se fait prendre à son propre piège en tentant de compromettre le président King Bradley.",
                'manga_cover' => 'Fullmetal_alchemist_10.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2022-06-09'),
                'synopsis' => "Central City est, plus que jamais, le centre d'un obscur complot aux ramifications dépassant l'imagination de nos protagonistes. Le colonel Mustang voit son unité démantelée tandis qu'Edward et Alphonse doivent faire face à l'énigmatique géniteur des homonculi. Ce dernier réussi à rallier Lin à sa cause, le prince de Xing succombant aux pouvoirs de la pierre philosophale. Bien décidé à percer les mystères qui s'amoncellent, Edward se rend chez Riza Hawkeye où le lieutenant va lui relater les terribles chroniques de la guerre d'Ishbal.",
                'manga_cover' => 'Fullmetal_alchemist_11.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2022-09-08'),
                'synopsis' => "Edward et Alphonse Elric sont à la recherche de May Chang, une jeune fille originaire de Xing qui détient le secret de l'élixirologie. Ils ont réussi à convaincre le général de division Armstrong gardant la frontière nord du pays de les aider dans leur quête. Pas de répit pour les deux frères qui font la rencontre peu amicale d'un nouvel homonculus : Sloth. Doté d'une force colossale, ce dernier a pour mission de creuser un mystérieux tunnel. Heureusement, les forces armées de la forteresse de Briggs n'ont pas volé leur réputation et arrivent à faire reculer le monstre. Mais pour combien de temps...",
                'manga_cover' => 'Fullmetal_alchemist_12.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2022-12-08'),
                'synopsis' => "Les révélations se succèdent à un rythme effréné dans ce nouveau tome de Fullmetal Alchemist ! Edward et Alphonse Elric continuent leur combat dans le nord du pays contre le machiavélique alchimiste écarlate Solf J. Kimblee. La lutte est brutale, ce dernier profitant du pouvoir que lui confère la pierre philosophale pour tout détruire sur son passage. Pendant ce temps à Central City, les homonculus ourdissent leurs sombres complots dans les sous-sols de la ville. Leur « père » est en proie au tourment. C'est l'occasion d'en apprendre un peu plus sur les évènements qui se sont déroulés lors de la chute de la légendaire cité de Xerxes.",
                'manga_cover' => 'Fullmetal_alchemist_13.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 14',
                'publication_date' => new DateTime('2023-03-09'),
                'synopsis' => "Suite au combat l'opposant au redoutable Kimblee, Edward Elric est porté disparu dans les entrailles des mines du Nord. Son frère Alphonse a, quant à lui, de plus en plus de mal à maintenir le lien raccrochant son âme à l'armure qui lui sert de corps. Il rejoint le docteur Marcoh et l'aide à décripter les recherches du frère de Scar. Trahie par celui qu'elle pensait être son allié, la garde rapprochée du docteur Marcoh est attaquée par Envy. Un combat à l'issue surprenante s'annonce contre le terrible homonculus.",
                'manga_cover' => 'Fullmetal_alchemist_14.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 15',
                'publication_date' => new DateTime('2023-06-08'),
                'synopsis' => "Réunis à nouveau avec ses hommes, le colonel Mustang se révolte contre l'armée. Pendant ce temps, Edouard et ses compagnons acculent les homonculus Pride et Gluttony, mais Pride va faire quelque chose qui va tous les surprendre. Enfin tous réunis, les protagonistes s'apprêtent à mener une bataille sur laquelle repose l'avenir du monde.",
                'manga_cover' => 'Fullmetal_alchemist_15.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 16',
                'publication_date' => new DateTime('2023-09-14'),
                'synopsis' => "Alors qu'Alphonse se démène contre Pride et Kimblee, Edward doit faire face à une horde de soldats immortels dans les catacombes de la capitale. Leurs alliés ne sont pas en reste et le colonel Mustang, bien décidé à tout risquer pour réussir, va devoir faire face à un dilemme inextricable ! La bataille décisive pour le contrôle de Central City est engagée !",
                'manga_cover' => 'Fullmetal_alchemist_16.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 17',
                'publication_date' => new DateTime('2023-12-07'),
                'synopsis' => "Les troupes de Briggs sont lancées dans une lutte sans merci pour le contrôle du quartier général alors qu'Edward Elric et le colonel Mustang s'enfoncent de plus en plus profondément dans le repère du mystérieux Père. Le combat est loin d'être gagné car les homonculus sont prêts à tout sacrifier pour mener à bien leur terrible plan.",
                'manga_cover' => 'Fullmetal_alchemist_17.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],

            [
                'title' => 'Tome 18',
                'publication_date' => new DateTime('2024-03-14'),
                'synopsis' => "Le \"jour promis\" est enfin arrivé. Après la réunion des cinq sacrifices, le destin du monde est sur le point de basculer. Devant faire face au plus terrible des adversaires, les frères Elric et leurs camarades jettent leurs dernières forces dans la bataille pour contrecarrer les plans du père des homonculi !",
                'manga_cover' => 'Fullmetal_alchemist_18.jpg',
                'average_rating' => null,
                'author_id' => 10, //Hiromu Arakawa
                'series_id' => 9 //Fullmetal Alchemist
            ],


            //The Promised Neverland
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2018-03-25'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l’orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s’épanouissent sous l’attention pleine de tendresse de « Maman »,qu’ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l’abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s’échapper, c’est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_1.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2018-06-27'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_2.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2018-08-22'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_3.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2018-10-24'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_4.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2018-11-28'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_5.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2019-02-06'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_6.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2019-04-03'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_7.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2019-06-19'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_8.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2019-08-21'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_9.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2019-10-02'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_10.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2019-11-27'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_11.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2020-02-05'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_12.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2020-05-27'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_13.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 14',
                'publication_date' => new DateTime('2020-06-10'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_14.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 15',
                'publication_date' => new DateTime('2020-08-19'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_15.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 16',
                'publication_date' => new DateTime('2020-10-07'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_16.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 17',
                'publication_date' => new DateTime('2020-12-09'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_17.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 18',
                'publication_date' => new DateTime('2021-02-10'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_18.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 19',
                'publication_date' => new DateTime('2021-03-31'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_19.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],

            [
                'title' => 'Tome 20',
                'publication_date' => new DateTime('2021-06-02'),
                'synopsis' => "Emma, Norman et Ray coulent des jours heureux à l'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s'épanouissent sous l'attention pleine de tendresse de « Maman », qu'ils considèrent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s'échapper, c'est une question de vie ou de mort !",
                'manga_cover' => 'The_promised_neverland_20.jpg',
                'average_rating' => null,
                'author_id' => 11, //Kaiu Shirai
                'series_id' => 10 //The Promised Neverland
            ],


            //Demon Slayer
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2019-09-18'),
                'synopsis' => "Début du XXe siecle au Japon, un petit marchand de charbon nommé Tanjiro vit une vie sans histoire dans les montagnes. Jusqu’au jour tragique où, après une courte absence, il retrouve son village et sa famille massacrés par un ogre ! La seule survivante de cette tragédie est sa jeune sœur Nezuko. Hélas, au contact de la bête, celle-ci s’est à son tour métamorphosée en monstre... Afin de renverser le processus et de venger sa famille, Tanjiro décide de partir en quête de vérité. Pour le jeune héros et sa sœur, c’est une longue aventure de sang et d’acier qui commence !",
                'manga_cover' => 'The_promised_neverland_1.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2019-09-18'),
                'synopsis' => "Tandis qu'il passe l’ultime épreuve qui le sépare du statut de pourfendeur d’ogres, Tanjiro se trouve aux prises avec un monstre difforme et sanguinaire. Face à ce redoutable adversaire, notre héros déploie l’arsenal des techniques qui lui ont été enseignées par le maître Urokodaki... Et parvient à sortir victorieux de l’affrontement ! Après sept jours éprouvants dans l’enfer du mont Fujikasane, il est enfin libre de retourner chez le maître et de retrouver sa jeune sœur Nezuko.",
                'manga_cover' => 'The_promised_neverland_2.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2019-10-09'),
                'synopsis' => "Nezuko et Tanjiro sont aux prises avec deux des “douze lunes démoniaques” qui servent de bataillon d’élite aux ordres du terrible Kibutsuji. L’une utilise de puissantes balles comme armes d’attaque qu’elle projette violemment sur ses adversaires, tandis que l’autre en dirige la trajectoire au moyen de flèches invisibles… La lutte est acharnée, mais grâce à l’aide de Tamayo et Yushiro, nos héros parviennent à s’en sortir victorieux… Tout en acquérant de précieux renseignements qui pourraient peut-être bien les aider à remonter la piste de Kibutsuji !",
                'manga_cover' => 'The_promised_neverland_3.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2019-10-09'),
                'synopsis' => "Alors qu’il sort épuisé mais victorieux de son combat contre l’ogre aux tambours, Tanjiro découvre Zenitsu en train de se faire rouer de coups par le mystérieux garçon à tête de sanglier. Sans hésiter, notre héros s’élance pour porter secours à son nouvel ami. Qui est cet adversaire aussi redoutable que borné…mais qui n’a finalement pas mauvais fond ? Et pourquoi porte-t-il deux sabres du soleil ? Tanjiro ne va pas tarder à le découvrir…",
                'manga_cover' => 'The_promised_neverland_4.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2019-11-27'),
                'synopsis' => "Tanjiro, Zenitsu et Inosuke combattent une famille de démons araignées. Tanjiro et ses compagnons essaient de sauver Nezuko prise dans une toile d’araignée, mais face à des ennemis aussi puissants, Tanjiro doit faire appel à sa grande habileté et à la chance ! La bataille attire d’autres pourfendeurs de démons, mais tous ne quitteront pas le mont Natagumo !",
                'manga_cover' => 'The_promised_neverland_5.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2020-01-02'),
                'synopsis' => "À peine sortis du difficile combat contre les démons-araignées, Tanjiro et Nezuko sont de nouveau attaqués. Et cette fois, leur adversaire n'est autre qu'une jeune humaine, membre des pourfendeurs de démons. En moins de temps qu'il n'en faut pour le dire, la virevoltante guerrière prend le dessus et fait prisonniers nos deux héros. Mais que veut-elle exactement ?",
                'manga_cover' => 'The_promised_neverland_6.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2020-03-04'),
                'synopsis' => "Tanjiro, Zenitsu, Inosuke se sont enfin remis de leurs blessures grâce aux soins prodigués par les guérisseuses de Shinobu et l’entraînement récupérateur. Ils ont également appris la puissante technique du souffle perpétuel. Ce pouvoir leur sera d’une grande aide pour leur prochaine mission à bord du mystérieux train de l’Infini.",
                'manga_cover' => 'The_promised_neverland_7.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2020-06-17'),
                'synopsis' => "Après avoir affronté des démons à bord du train de l'Infini, Tanjiro, Zenitsu et Inosuke doivent faire face à Enmu, la première lune inférieure. Mais même s'ils réussissent à le vaincre, les sbires de Muzan Kibutsuji courent toujours ! Tanjiro doit continuer à améliorer ses capacités et sa puissance. Le secret de la danse du dieu du feu (Hinokami Kagura) lui permettra de devenir plus fort pour espérer réussir à terrasser les puissances démoniaques.",
                'manga_cover' => 'The_promised_neverland_8.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2020-09-16'),
                'synopsis' => "Tanjiro, Zenitsu et Inosuke sont partis en mission dans le quartier des plaisirs de Yoshiwara avec Tengen Uzui, le pilier du son. En effet, c’est là-bas que les trois kunoichis de Tengen, envoyées en reconnaissance pour débusquer un démon, ont disparu. Pour mener leur enquête dans les maisons des courtisanes, Tanjiro et ses compagnons doivent se déguiser en filles. Mais malgré tous leurs efforts, le démon semble introuvable. Nos héros réussiront-ils à le débusquer avant qu’il ne dévore les courtisanes ?!",
                'manga_cover' => 'The_promised_neverland_9.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2020-08-12'),
                'synopsis' => "Après avoir fusionné avec son obi (large ceinture traditionnelle de kimono), dans lequel elle avait transféré une partie de ses pouvoirs, Daki, la sixième lune supérieure, est plus forte que jamais. Épuisé d'avoir trop utilisé la danse du dieu du feu, Tanjiro a du mal à faire face. Nezuko et Uzui interviennent pour l'aider, mais le combat tourne d'une manière imprévue lorsque Nezuko perd le contrôle de son côté démoniaque…",
                'manga_cover' => 'The_promised_neverland_10.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2020-09-16'),
                'synopsis' => "Même si Uzui a annoncé avec beaucoup d'assurance savoir comment porter le coup de grâce au duo de la 6e lune supérieure, le combat est loin d'être gagné. Daki et Gyutaro attaquent avec fureur et les pourfendeurs de démons doivent serrer les rangs. Uzui finira-t-il comme Rengoku, tué par une lune supérieure ? Quel est le traumatisme qui a poussé Daki et Gyutaro à prêter allégeance à Muzan et à renoncer à leur humanité…?",
                'manga_cover' => 'The_promised_neverland_11.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2020-10-14'),
                'synopsis' => "Pour la première fois depuis 113 ans, un démon de la lune supérieure a été battu. Hors de lui, Muzan convoque les autres démons de la lune supérieure afin de leur ordonner d’intensifier l’attaque contre les pourfendeurs. Lors de la bataille contre Dahi et Gyutaro, le sabre de Tanjiro a été brisé. Tandis qu’il est à la recherche d’un nouveau sabre, Tanjiro visite le village caché des forgerons où se trouve Haganezuka.",
                'manga_cover' => 'The_promised_neverland_12.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2020-12-09'),
                'synopsis' => "Les lunes supérieures Gyokko et Hantengu ont attaqué le village caché des forgeurs de sabres. Tandis que Tanjiro, Genya et Nezuko font face à Hantengu (qui se dédouble à chaque fois qu'on lui coupe un membre), Tokito, le pilier de la Brume, et Kanroji, le pilier de l'Amour, affrontent Gyokko et son vase tout droit sorti d'un cauchemar. Quatre pourfendeurs de démons, dont deux piliers, et un démon seront-ils assez forts pour vaincre deux lunes supérieures ?",
                'manga_cover' => 'The_promised_neverland_13.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 14',
                'publication_date' => new DateTime('2020-12-09'),
                'synopsis' => "Tanjiro et Genya croient avoir vaincu la lune supérieure Hantengu, mais celle-ci crée un avatar encore plus puissant, nommé Zohakuten, la personnification de la haine. Heureusement pour eux, Mitsuri, le pilier de l'amour, est là pour les aider. Parallèlement, la lune supérieure Gyokko cherche à tuer Haganezuka, qui ne peut s'interrompre pendant le polissage de son précieux sabre.",
                'manga_cover' => 'The_promised_neverland_14.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 15',
                'publication_date' => new DateTime('2021-01-13'),
                'synopsis' => "Après une nuit de combat acharné contre les avatars de la lune supérieure Hantengu, les pourfendeurs sont galvanisés par l'aurore imminente. Tanjiro, qui a localisé le corps originel, rassemble ses ultimes forces pour le rattraper et le terrasser avant qu'il ne parvienne à se réfugier dans l'ombre. Mais si les rayons du soleil sont les alliés des pourfendeurs, ils sont mortels pour Nezuko. Tanjiro hésite : doit-il abandonner sa course-poursuite pour protéger sa soeur, ou bien doit-il la sacrifier pour vaincre la lune supérieure ? Tanjiro parviendra-t-il à décapiter Hantengu ?! Qu'adviendra-t-il de Nezuko ?!",
                'manga_cover' => 'The_promised_neverland_15.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 16',
                'publication_date' => new DateTime('2021-03-17'),
                'synopsis' => "Tanjiro vient de commencer l'entraînement de Himejima, le pilier du rocher. Après les douches violentes sous la cascade, le transport de rondins de bois et le déplacement de rochers, Tanjiro finira-t-il par gagner l'approbation de Himejima ?! Au quartier général des pourfendeurs de démons, Muzan, qui a découvert la cachette de Nezuko et Ubuyashiki, s'apprête à frapper…",
                'manga_cover' => 'The_promised_neverland_16.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 17',
                'publication_date' => new DateTime('2021-05-12'),
                'synopsis' => "Après avoir frappé Muzan, les pourfendeurs ont été précipités dans la forteresse infinie. Shinobu Kocho, le pilier de l'Insecte, mène un combat acharné contre Dôma, la 2e lune supérieure, mais celui-ci semble immunisé contre tous ses poisons ! Parviendra-t-elle à assouvir sa vengeance et à tuer l'assassin de sa soeur ? De son côté, Zenitsu se retrouve face à un démon tout droit surgit de son passé…",
                'manga_cover' => 'The_promised_neverland_17.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 18',
                'publication_date' => new DateTime('2021-07-15'),
                'synopsis' => "Maintenant que Tanjiro s'est ouvert au \"monde limpide\", la violence du combat contre Akaza atteint son paroxysme. Les fantômes du passé ressurgissent dans l'esprit torturé de la 3e lune supérieure, dévoilant les raisons qui l'ont poussé à devenir un démon. De son côté, Kanao livre un combat acharné contre Dôma, la 2e lune supérieure. Alors qu'il rejoint Kanao, Inosuke réalise que ce n'est pas la première que son chemin croise celui de Dôma, il fait alors le serment de le tuer. Demon Slayer est le titre de tous les records. Chaque fois que le manga de Koyoharu Gotouge est cité, un nouvel exploit est atteint !",
                'manga_cover' => 'The_promised_neverland_18.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 19',
                'publication_date' => new DateTime('2021-10-13'),
                'synopsis' => "Le combat fait rage entre Doma, la 2e lune supérieure et les pourfendeurs Kanao et Inosuke. Les deux jeunes guerriers, tremblant de colère, parviendront-ils à venger tous ceux que Doma a dévorés ? Non loin de là dans la Forteresse Infinie, Mitsuri Kanroji, le pilier de l'Amour, et Obanai Iguro, le pilier du Serpent, font face à la nouvelle 4ème lune supérieure, tandis que Muichiro Tokito, le pilier de la brume, se retrouve face à la 1ère lune supérieure, qui lui fait une étrange révélation sur sa famille…",
                'manga_cover' => 'The_promised_neverland_19.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 20',
                'publication_date' => new DateTime('2022-01-12'),
                'synopsis' => "Himejima, le pilier du Rocher, et Shinazugawa, le pilier du Vent, affrontent Kokushibo, la 1e lune supérieure, dans un combat sans merci. Mais malgré l'apparition de la marque des pourfendeurs, les deux piliers ne font que reculer face à la puissance écrasante de Kokushibo. Voyant son frère en difficulté, Genya avale un morceau de chair de la 1e lune supérieure. Son geste désespéré suffira-t-il à leur assurer la victoire ?",
                'manga_cover' => 'The_promised_neverland_20.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 21',
                'publication_date' => new DateTime('2022-03-30'),
                'synopsis' => "Le combat contre Kokushibo, la 1e lune supérieure, vient de s'achever sur une victoire des pourfendeurs, mais à quel prix ? Au même moment, dans les entrailles de la forteresse infinie, Muzan Kibutsuji, l'ancêtre de tous les démons, passe à l'attaque ! Quelle sera la stratégie de Tanjiro face à une telle puissance ?",
                'manga_cover' => 'The_promised_neverland_21.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 22',
                'publication_date' => new DateTime('2022-05-18'),
                'synopsis' => "Les assauts de Muzan redoublent d'intensité tandis que le soleil est sur le point de se lever. Les pourfendeurs et les derniers piliers survivants, luttent de toutes leurs forces. Malheureusement, leurs lames semblent incapables d'atteindre leur ennemi juré… Le poison du démon originel ronge à présent Tanjiro qui est à terre, inerte. Parviendra-t-il à se relever et à continuer le combat ? Prêts à tout sacrifier, les pourfendeurs seront-ils capables de tenir suffisamment longtemps pour gagner ?",
                'manga_cover' => 'The_promised_neverland_22.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],

            [
                'title' => 'Tome 23',
                'publication_date' => new DateTime('2022-07-06'),
                'synopsis' => "Le combat acharné entre les pourfendeurs de démons et Muzan Kibutsuji, l’ancêtre et créateur de tous les démons, touche à sa fin. Les quatre sérums que Tamayo a inoculé à Muzan l’ont affaibli au point qu’il semble enfin vulnérable… Mais il n’y a rien de plus dangereux qu’un prédateur dos au mur et Muzan, prêt à tout pour survivre, n’a pas dit son dernier mot. Quel sort réserve le destin à Tanjiro, Nezuko et aux autres pourfendeurs de démons ? Vous allez assister à la conclusion spectaculaire d’une guerre millénaire contre les démons !!",
                'manga_cover' => 'The_promised_neverland_23.jpg',
                'average_rating' => null,
                'author_id' => 12, //Koyoharu Gotouge
                'series_id' => 11 //Demon Slayer
            ],


            //20th Century Boys - Perfect Édition
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2020-10-21'),
                'synopsis' => "Kenji est un commerçant lambda qui a repris le magasin familial. La police vient un jour l'interroger sur la disparition de la famille de l'un de ses clients. Le seul indice est un mystérieux symbole dessiné à côté d'une porte. Kenji ne se sent pas particulièrement concerné, jusqu'au jour où Donkey, un ami d'enfance, lui demande s'il se souvient de ce symbole. Kenji explore alors la vie de Donkey, son passé et celui du groupe d'amis dont il faisait partie dans sa jeunesse. Il découvre bientôt l'existence d'une organisation clandestine que dirige l'énigmatique Ami et qui utilise le symbole lié au passé de Kenji comme signe de ralliement. Une réédition à l’occasion des 20 ans du chef-d’œuvre de Naoki Urasawa - Une nouvelle édition enrichie de pages en couleurs- Une fin inédite qui reprend la conclusion de l’adaptation en film de 20th Century Boys",
                'manga_cover' => '20th_century_boys_1.jpg',
                'average_rating' => null,
                'author_id' => 13, //Naoki Urasawa
                'series_id' => 12 //20th Century Boys - Perfect Édition
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2020-10-21'),
                'synopsis' => "Enfant, Kenji avait imaginé un scénario catastrophe. Aujourd’hui, ces improbables attaques bactériologiques contre San Francisco et Londres sont devenues réalité. Que se passera-t-il ensuite ? Seul Kenji le sait et peut encore éviter le pire.",
                'manga_cover' => '20th_century_boys_2.jpg',
                'average_rating' => null,
                'author_id' => 13, //Naoki Urasawa
                'series_id' => 12 //20th Century Boys - Perfect Édition
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2020-12-02'),
                'synopsis' => "Le robot géant est terminé. Il n'attend plus que son réveil. Ami n'a toujours pas été identifié. Les jours se succèdent jusqu'au 31 décembre 2000. Le jour de la fin du monde… Les seuls à pouvoir sauver la Terre sont les « neuf amis » qui ont écrit le Cahier de Prédictions alors qu'ils étaient enfants. L'humanité connaîtra-t-elle le XXIe siècle ?",
                'manga_cover' => '20th_century_boys_3.jpg',
                'average_rating' => null,
                'author_id' => 13, //Naoki Urasawa
                'series_id' => 12 //20th Century Boys - Perfect Édition
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2020-12-30'),
                'synopsis' => "Que s’est-il réellement passé au cours du nouvel an sanglant qu’a connu l’humanité ? Comme s’ils ne pouvaient échapper à leur destin, Kenji et ses compagnons ont été pris de pulsions diaboliques. Mais l’héroïsme dont ils ont fait preuve pour empêcher la destruction de la Terre est gravé à jamais dans l’esprit de Kanna. L’inébranlable détermination de Kenji est en train de changer le cours de l’histoire…",
                'manga_cover' => '20th_century_boys_4.jpg',
                'average_rating' => null,
                'author_id' => 13, //Naoki Urasawa
                'series_id' => 12 //20th Century Boys - Perfect Édition
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2021-02-03'),
                'synopsis' => "Grâce à son pouvoir, Kanna gagne le respect des malfrats et des sans-abris de Shinjuku. Elle est enfin en mesure de se lancer dans le combat contre Ami et pourra ainsi venger son oncle Kenji. Mais voici qu'un homme surgit du passé pour la rencontrer.",
                'manga_cover' => '20th_century_boys_5.jpg',
                'average_rating' => null,
                'author_id' => 13, //Naoki Urasawa
                'series_id' => 12 //20th Century Boys - Perfect Édition
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2021-03-17'),
                'synopsis' => "Kyôko et Sadakiyo ont échappé aux Dreamnavigators, mais la course-poursuite ne semble pas terminé. De son côté, Kanna doit faire face à son destin et à celui de la Terre. Pourra-t-elle venir en aide à Kyôko ? Alors que tout s’accélère, les compagnons de Kenji refont surface…",
                'manga_cover' => '20th_century_boys_6.jpg',
                'average_rating' => null,
                'author_id' => 13, //Naoki Urasawa
                'series_id' => 12 //20th Century Boys - Perfect Édition
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2021-06-09'),
                'synopsis' => "Ami a été assassiné ! Si la mort du dirigeant plonge le monde dans l'affliction, elle est au contraire une délivrance pour les anciens compagnons de Kenji, puisqu'elle signifie la fin de leur combat. Mais la crise mondiale est-elle bel et bien terminée ? Rien n'est certain. En tant qu'héritière de la volonté de Kenji, Kanna a une nouvelle mission. Une série qui n'est plus à présenter !",
                'manga_cover' => '20th_century_boys_.7jpg',
                'average_rating' => null,
                'author_id' => 13, //Naoki Urasawa
                'series_id' => 12 //20th Century Boys - Perfect Édition
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2021-07-15'),
                'synopsis' => "La planète tremble de peur : un virus se répand sur le monde entier, alors que l'Exposition universelle de 2015 est sur le point d'ouvrir ses portes. Les espoirs de l'humanité reposent sur elle, cependant d'étranges rumeurs circulent au sujet de la cérémonie d'ouverture. Il se dit qu'un évènement devrait s'y produire, et il serait en rapport avec la sécurité du pape en personne.",
                'manga_cover' => '20th_century_boys_8.jpg',
                'average_rating' => null,
                'author_id' => 13, //Naoki Urasawa
                'series_id' => 12 //20th Century Boys - Perfect Édition
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2021-09-22'),
                'synopsis' => "Devenu président du monde, Ami règne depuis la ville de Tokyo, désormais entourée d'un haut mur d'enceinte. La majorité de la population croit en lui, mais la résistance commence à s'organiser autour de la Reine des Glaces. Les Rebelles s'apprêtent à prendre les armes, laissant entrevoir une lueur d'espoir…",
                'manga_cover' => '20th_century_boys_9.jpg',
                'average_rating' => null,
                'author_id' => 13, //Naoki Urasawa
                'series_id' => 12 //20th Century Boys - Perfect Édition
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2021-11-24'),
                'synopsis' => "Un mystérieux guitariste arrive à mobylette à la frontière nord de Tokyo. Tant de gens sont arrêtés et assassinés pour avoir tenté de franchir le mur d'enceinte sans laissez-passer. Tant de corps sont transportés et enterrés. Quelqu'un pourra-t-il sauver les prisonniers de cette partie de la ville ? Qui est cet étrange musicien ?",
                'manga_cover' => '20th_century_boys_10.jpg',
                'average_rating' => null,
                'author_id' => 13, //Naoki Urasawa
                'series_id' => 12 //20th Century Boys - Perfect Édition
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2022-01-12'),
                'synopsis' => "Il était une fois un petit garçon qui avait imaginé la fin du monde. Cela ne semblait être qu'un jeu d'enfant et pourtant, ce fût bien plus que cela… Alors qu'Ami peaufine son plan pour détruire l'humanité, l'homme qui a survécu au « nouvel an sanglant » approche de Tokyo. Les compagnons de Kenji se rassemblent progressivement. Le compte à rebours avant l'ultime combat a commencé.",
                'manga_cover' => '20th_century_boys_11.jpg',
                'average_rating' => null,
                'author_id' => 13, //Naoki Urasawa
                'series_id' => 12 //20th Century Boys - Perfect Édition
            ],


            //Spy x Family
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2020-09-10'),
                'synopsis' => "Twilight, le plus grand espion du monde, doit pour sa nouvelle mission créer une famille de toutes pièces afin de pouvoir s’introduire dans la plus prestigieuse école de l’aristocratie. Totalement dépourvu d’expérience familiale, il va adopter une petite fille en ignorant qu’elle est télépathe, et s’associer à une jeune femme timide, sans se douter qu’elle est une redoutable tueuse à gages. Ce trio atypique va devoir composer pour passer inaperçu, tout en découvrant les vraies valeurs d’une famille unie et aimante.",
                'manga_cover' => 'Spy_x_family_1.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2020-11-12'),
                'synopsis' => "Deux nations voisines partageant une haine réciproque, une paix fragile menacée par des hommes politiques ambitieux... Tel est le décor de SPYxFAMILY, avec, en premier rôle, Twilight, espion de Westalis missionné pour éviter la guerre qui se prépare en coulisses. Accompagné d'Anya, sa (fausse) fille adoptive, et de Yor, sa (fausse) épouse et vraie tueuse, Twilight alias Loid Forger doit approcher le chef du parti Nation Unifiée. Le plan consiste à faire admettre la petite Anya à la prestigieuse école Éden, où se retrouvent les enfants de l'élite d'Ostania, puis de la faire figurer parmi les meilleurs élèves de l'école. Un objectif qui relève de l'impossible, à moins de déployer des trésors de ruse et d'ingéniosité... Mais n'est-ce pas là, justement, le cœur du métier d'espion ?",
                'manga_cover' => 'Spy_x_family_2.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2021-02-11'),
                'synopsis' => "Pour Twilight, espion d'un État en froid avec son voisin, l'opération \"Strix\" consistant à approcher un dangereux homme politique est l'absolue priorité. Mais il lui faut aussi gérer sa vie de famille, factice, avec son épouse Yor, employée de mairie le jour, tueuse la nuit, et sa fille adoptive Anya, dont le don de capter les pensées des gens n'a d'égal que les difficultés scolaires. Et la famille ne s'arrête pas là, puisque Yor a un jeune frère, qui cache à tous son activité d'agent de la police secrète. Quand Yuri leur rend une visite inattendue, Twilight doit composer avec les différents mensonges mis en place depuis des semaines. Une mission compliquée, d'autant que le frère de Yor se méfie de ce mari dont il ignorait jusqu'à présent l'existence…",
                'manga_cover' => 'Spy_x_family_3.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2021-05-12'),
                'synopsis' => "Face à la menace d’attentat qui pèse sur un ministre de Westalis en visite à Ostania, Twilight et la cellule de WISE se mobilisent. Les conspirateurs comptent employer des chiens pour arriver à leurs fins, une curieuse coïncidence alors que la famille Forger souhaite adopter un canidé pour récompenser Anya d’avoir décroché sa première étoile à l’école Eden. Et voilà qu’Anya est enlevée par les terroristes au détour d’un salon canin ! Une fois de plus, son intervention (maladroite) comme celle (inattendue) de Yor mettront Twilight sur la bonne piste…",
                'manga_cover' => 'Spy_x_family_4.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2021-08-19'),
                'synopsis' => "Après avoir déjoué en deux temps trois mouvements un complot terroriste (rien que ça), la (fausse) famille Forger accueille un nouveau membre dont le nom est Bond, le chien Bond. Sous son abondante pilosité canine se cachent un amour infini pour Anya et, plus discret, un don de prescience. Alors que l'opération « Strix » semble enfin sur les rails, les examens qu’Anya doit passer dans le cadre de sa scolarité pourraient à nouveau mettre en péril la délicate mission de Loid Forger, alias Twilight, le meilleur espion du monde…",
                'manga_cover' => 'Spy_x_family_5.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2021-11-10'),
                'synopsis' => "Twilight doit impérativement récupérer un document menaçant le fragile équilibre des forces entre l'Est et l'Ouest. Pour cette mission, il fait équipe avec Nocturna, une collaboratrice secrètement éprise de lui. Tout va se jouer lors d'un tournoi de tennis clandestin, dont l'issue pourrait bien remettre en cause la position de Yor au sein de la famille Forger. En effet, Noctuna s'est juré de prendre la place de fausse épouse de Twilight dans le cadre de l'opération « Strix ». Consciente du danger qui la guette, Yor n'en éprouve pas moins des doutes sur son aptitude à jouer le rôle de Mme Forger. Dans le même temps, Twilight désespère de se rapprocher de sa cible, le dangereux et plus que jamais inatteignable Donovan Desmond…",
                'manga_cover' => 'Spy_x_family_6.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2022-02-10'),
                'synopsis' => "Twilight, vrai espion et faux père de famille, a enfin réussi à entrer en contact avec Donovan Desmond, sa cible sur l'opération « Strix ». Mais l'homme politique reste insaisissable. Anya demeure peut-être finalement la meilleure carte à jouer pour mener à bien la mission de son « père »…",
                'manga_cover' => 'Spy_x_family_7.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2022-06-30'),
                'synopsis' => "Gagnants d'une croisière à bord d'un paquebot de luxe, Loid et Anya embarquent sur le Princess Lorelei en même temps que Yor, chargée d'une mission ultra-dangereuse. Sous couvert de son travail à la mairie, la jeune femme doit en effet assurer la protection de l'épouse d'un mafieux assassiné…",
                'manga_cover' => 'Spy_x_family_8.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2022-09-01'),
                'synopsis' => "En pleine mer, le paquebot Princesse Lorelei est le théâtre d'un affrontement sanglant entre Yor et les tueurs envoyés aux trousses de la femme qu'elle doit protéger. Loin de se la couler douce, Loid et Anya se retrouvent eux aussi pris dans la tourmente. La menace d'une bombe sur le point d'exploser oblige Loid à intervenir, alors que le voici à deux doigts d'être démasqué…",
                'manga_cover' => 'Spy_x_family_9.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2022-12-01'),
                'synopsis' => "Suite aux mauvais résultats scolaires de la fillette, le plan de Twilight pour approcher Donovan Desmond est en train de prendre l'eau. Préserver la paix reste pourtant la priorité pour l'espion de Westalis. En ces temps de fragile équilibre entre des forces de l'Ouest et de l'Est, certains n'ont rien oublié de la guerre qui a fait rage il n'y a pas si longtemps. À Westalis, dans la ville frontalière de Ruen, vivait autrefois un petit garçon qui s'amusait à jouer aux soldats avec ses amis. Un jeu que son père n'appréciait guère, mais qui restait néanmoins un passe-temps sans conséquence.Et puis, un jour comme les autres, les premières bombes sont tombées sur Ruen. Et le monde, comme le petit garçon de Ruen, allaient à jamais changer de visage…",
                'manga_cover' => 'Spy_x_family_10.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2023-10-12'),
                'synopsis' => "Sauvez le monde avec l'élite des agents (très) spéciaux : la famille Forger ! Une comédie d'espionnage pétillante ! La rencontre entre Yor et Mélinda Desmond, l'épouse de la cible de Loid/Twilight, semble marquer un tournant dans la mission que l'espion doit accomplir, comme pour la fausse famille Forger. Anya espère en effet devancer Yor à la course à l'invitation chez les Desmond. Sa meilleure arme ? Sa relation très spéciale avec le benjamin du clan, Damien, excédé (et fasciné ?) par sa camarade de classe. Et lors d'une sortie scolaire, les élèves de l'école Éden basculent au cœur d'un drame où chacun se retrouve dépassé par les évènements…",
                'manga_cover' => 'Spy_x_family_11.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2024-03-14'),
                'synopsis' => "Après le détournement des bus scolaires de l'école Éden par des terroristes, les Forger sont heureux de se retrouver en famille. L'accalmie est cependant de courte durée, Yor s'étant mis en tête de créer des problèmes dans son couple pour que celui-ci soit \"comme les autres\". Plus grave encore, un agent de Westalis s'avère être une taupe…",
                'manga_cover' => 'Spy_x_family_12.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2024-10-10'),
                'synopsis' => "Twilight est acculé après son combat contre un agent d'Ostania. Nocturna pourra-t-elle renverser la situation, et récupérer les informations confidentielles que les deux agents sont venus chercher ? Et qu’en est-il de la crise que traverse le couple ? De son côté, Anya, qui mène l'opération « amitié », tente de recevoir des bonbons de Damien en guise de remerciement…",
                'manga_cover' => 'Spy_x_family_13.jpg',
                'average_rating' => null,
                'author_id' => 14, //Tatsuya Endo
                'series_id' => 13 //Spy x Family
            ],


            //Blue Lock
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2021-06-02'),
                'synopsis' => "Coupe du monde 2018, l'équipe de football du Japon est éliminée en huitièmes de finale… Ce nouvel échec incite l'Union japonaise de football à fonder le «Blue Lock» : un centre de formation révolutionnaire rassemblant les 300 meilleurs attaquants lycéens du pays. L'objectif du coach du Blue Lock, Jinpachi Ego, est clair : détecter l'unique attaquant qui écrasera tous ses rivaux par son talent et son hyper-individualisme ! Pour Yoichi Isagi, joueur bouillonnant encore inconnu, il n'y a pas d'alternative… S'il veut survivre au programme hautement sélectif qui l'attend, il devra abandonner le jeu collectif et se transcender pour devenir l'attaquant ultime !",
                'manga_cover' => 'Blue_lock_1.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2021-06-02'),
                'synopsis' => "En dépit des critiques enflammées du grand public et des médias, le projet Blue Lock a finalement été lancé. Bien que très décrié, son concept inédit a cependant su susciter l'intérêt de Sae Itoshi, le génie du football nippon… Ayant survécu au premier écrémage, Yoichi Isagi se retrouve dans l'équipe Z, formée exclusivement d'attaquants. Avec elle, il devra lutter dans une poule de cinq équipes où seules les deux meilleures resteront en lice. Après un premier match difficile, l'équipe Z n'aura qu'un seul moyen de survie : découvrir une arme capable de faire éclore l'égo de chacun !",
                'manga_cover' => 'Blue_lock_2.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2021-08-18'),
                'synopsis' => "L'équipe Z a remporté une victoire euphorique au cours d'un deuxième match couperet contre l'équipe Y. Gonflée à bloc, elle s'apprête à affronter sereinement l'équipe W pour son troisième match ! Malheureusement, tout ne va pas se passer aussi bien que prévu : l'équipe Z va devoir contenir les attaques tonitruantes des frères Wanima tandis que Hyôma Chigiri est en peine de retrouver l'explosivité de son football…",
                'manga_cover' => 'Blue_lock_3.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2021-10-13'),
                'synopsis' => "Le dernier match de la première sélection du Blue Lock va commencer ! Yoichi Isagi et ses coéquipiers s'apprêtent à livrer une partie couperet où seule une victoire leur permettra de rester en lice ! Leur adversaire ne sera autre que l'équipe V, la plus forte de la tour 5, qui compte le génie Seishirô Nagi parmi ses joueurs. Les efforts désespérés de l'équipe Z suffiront-ils face à l'écrasante attaque adverse ?",
                'manga_cover' => 'Blue_lock_4.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2021-11-24'),
                'synopsis' => "L’équipe Z est parvenue à égaliser face à l’équipe V et son buteur de génie, Seishirô Nagi. Chaque joueur espère maintenant le déclic qui lui permettra d’accéder à une nouvelle dimension. Yoichi parviendra-t-il à combler ses lacunes et à marquer contre ses redoutables adversaires ? Le moment est venu pour lui de dépasser ses limites afin de trouver l'arme de la victoire.",
                'manga_cover' => 'Blue_lock_5.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2022-02-02'),
                'synopsis' => "Les joueurs de l'équipe Z sont parvenus à franchir la première sélection. Chacun d'entre eux va maintenant devoir s'attaquer individuellement au \"Blue Lock Man\" qui garde les cages de leur deuxième épreuve. Les futurs qualifiés n'auront cependant que peu de répit, car des matchs d'un nouveau type et aux règles ahurissantes les attendent au cours d'une troisième sélection encore plus implacable !",
                'manga_cover' => 'Blue_lock_6.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2022-04-06'),
                'synopsis' => "À la suite de sa défaite contre le trio du top 3 mené par Rin Itoshi, l'équipe d'Isagi perd Bachira. Après avoir juré de tout faire pour le récupérer, Isagi, épaulé de Nagi, s'apprête à affronter Barô, le meilleur buteur de la tour 5. Au pied du mur, Isagi entreprend de vaincre «le roi» pour rejoindre «le camp des génies» !",
                'manga_cover' => 'Blue_lock_8.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2022-06-08'),
                'synopsis' => "La bataille des rivaux se poursuit. Après avoir récupéré Barô dans leur équipe, c'est à Kunigami, Chigiri et Reo qu'Isagi et Nagi vont devoir faire face. Les deux équipes étant de force égale, Isagi devra nécessairement créer l'alchimie avec ses coéquipiers et évoluer en cours de match. L'effet conjugué des égos d'Isagi et Nagi portera-t-il un coup fatal à l'individualisme de Barô ? L'issue du match s'avère des plus incertaines…",
                'manga_cover' => 'Blue_lock_8.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2022-08-24'),
                'synopsis' => "À la suite du réveil de Barô, Isagi et Nagi parviennent à battre Kunigami, Chigiri et Reo. Isagi désigne alors leur quatrième équipier… Ce dernier lui permettra enfin de se mesurer à nouveau au trio de tête qui lui a enlevé Bachira. Le moment est venu pour Isagi de retenter sa chance face à Rin Itoshi, l'attaquant de génie… Mais, qui des deux joueurs parviendra à s'imposer, cette fois-ci ?",
                'manga_cover' => 'Blue_lock_9.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2022-10-12'),
                'synopsis' => "La revanche contre le top 3 bat son plein. Chaque joueur confronte ses atouts à ceux des autres au cours d'une lutte acharnée. De son côté, Isagi tente de surpasser Rin Itoshi par tous les moyens afin de récupérer Bachira, qui est en proie aux doutes... Mais parviendra-t-il à l'emporter sur le potentiel hors norme de son adversaire et sa capacité à analyser le terrain encore plus tôt que lui ?",
                'manga_cover' => 'Blue_lock_10.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2022-12-07'),
                'synopsis' => "Le tournoi des rivaux de la deuxième sélection touche à sa fin ! C'est Rin Itoshi, le joueur de génie, qui scelle le destin de ce match acharné. Malgré l'échec de son équipe, Yoichi Isagi se retrouve qualifié après avoir été choisi par son adversaire. Ayant du mal à accepter la défaite qu'il considère uniquement due à un coup de malchance, Isagi se voit expliquer par Ego la vérité sur la \"chance dans le football\". Reste à savoir ce qui attend les qualifiés en troisième sélection et si les anciens coéquipiers d'Isagi parviendront à passer la deuxième...",
                'manga_cover' => 'Blue_lock_11.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2023-02-01'),
                'synopsis' => "35 attaquants ont passé la deuxième sélection. Pour la survie du Blue Lock, ils devront s'unir pour affronter l'équipe du Japon des moins de 20 ans lors d'un match couperet ! Le moment est venu de passer le test d'aptitude à l'issue duquel seront désignés les 11 titulaires qui défendront les couleurs du Blue Lock ! Isagi parviendra-t-il à s'imposer en surpassant le top 6 des meilleurs attaquants ?",
                'manga_cover' => 'Blue_lock_12.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2023-04-05'),
                'synopsis' => "Après le test d'aptitude, la liste des onze titulaires du Blue Lock qui affronteront l'équipe du Japon des moins de 20 ans est enfin révélée ! Les attaquants du Blue Lock parviendront-ils à transpercer la redoutable défense de l'équipe des U-20 menée par Sae Itoshi ? C'est ce que pense Jinpachi Ego, pour qui la clé de la victoire réside dans \"la zone\". Les joueurs du Blue Lock ne sont malheureusement pas au bout de leurs surprises, car un autre attaquant explosif s'apprête à rejoindre les U-20…",
                'manga_cover' => 'Blue_lock_13.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 14',
                'publication_date' => new DateTime('2023-06-07'),
                'synopsis' => "Le match tant attendu opposant le onze du Blue Lock à la sélection japonaise des moins de 20 ans débute enfin ! Cette redoutable équipe se targue de posséder une défense infranchissable centrée sur leur capitaine, Aiku. Les attaquants du Blue Lock, privés de Shidô, parviendront-ils à transpercer les filets adverses au péril de leur carrière ? Pour cela, il leur faudra réagir face aux actions extraordinaires de Sae Itoshi, un meneur de jeu d'une autre dimension !",
                'manga_cover' => 'Blue_lock_14.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 15',
                'publication_date' => new DateTime('2023-08-23'),
                'synopsis' => "Suite du match crucial contre la sélection U-20 qui va décider de l'avenir du Blue Lock. Grâce au renversement du score par Rin Itoshi, le onze du Blue Lock termine la première mi-temps avec l'avantage. Quel plan l'U-20 va-t-il élaborer pour rivaliser avec les individualistes exaltés qui ont stupéfifié le public ?! La réponse brille dans le regard sauvage de Ryûsei Shidô dont Sae Itoshi lui-même a reconnu la valeur ! Le moment est venu de marquer, Yoichi Isagi ! C'est l'unique moyen de prouver ton égo au cours de cette rencontre survoltée !",
                'manga_cover' => 'Blue_lock_15.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 16',
                'publication_date' => new DateTime('2023-10-04'),
                'synopsis' => "Suite aux attaques impétueuses de la sélection japonaise u-20 centrées sur Sae Itoshi et Ryûsei Shidô en état de grâce, le Blue Lock décide d'abattre son dernier atout, Shôei Barô. Le match prend des allures de combat à mort, au-delà des stratégies et des calculs. Les deux équipes se donnent à fond sur le champ de bataille, et chaque joueur tente d'atteindre l'état de grâce pour donner une nouvelle dimension au football japonais ! Isagi et ses coéquipiers vont-ils parvenir à s'offrir un avenir flamboyant au cours de cette seconde période extrêmement tendue ?!",
                'manga_cover' => 'Blue_lock_16.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 17',
                'publication_date' => new DateTime('2023-11-29'),
                'synopsis' => "Chaque joueur fournit une performance au-delà de ses limites au cours d'un match dantesque, mais la relation tendue qui lie les frères Itoshi engendre des actions imprévisibles et surréalistes. Cela n'empêchera cependant pas les joueurs du Blue lock, à commencer par Nagi, Bachira et Isagi, de se battre avec l'objectif de marquer individuellement. Les rêves et l'obstination de Jinpachi Ego parviendront-ils à briser le vieux modèle footballistique japonais ?",
                'manga_cover' => 'Blue_lock_1.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 18',
                'publication_date' => new DateTime('2024-02-07'),
                'synopsis' => "À la suite de leur victoire contre la sélection japonaise U-20, Yoichi Isagi et ses coéquipiers sont brusquement élevés au rang de stars. Les attaquants profitent à peine d'une courte pause bien méritée qu'une nouvelle épreuve concoctée par Jinpachi Ego les attend déjà… La deuxième phase du projet Blue Lock est lancée ! Les individualistes du Blue Lock, toujours animés par une ferveur ardente, devront à nouveau mettre leur carrière en jeu et prouver leur valeur sur un champ de bataille inédit !",
                'manga_cover' => 'Blue_lock_1.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 19',
                'publication_date' => new DateTime('2024-04-10'),
                'synopsis' => "Le premier match de la Ligue des néo-individualistes opposant le Bastard München et le FC Barcha débute enfin. Contrairement à Isagi, qui a entamé la rencontre sur le banc des remplaçants, Bachira est titularisé et prouve qu'il a fait d'énormes progrès ! C'est également le cas de Kunigami qui affiche une totale métamorphose, à la suite de son retour inattendu. Quant à Kaiser, le \"génie allemand\", il dévoile enfin son réel potentiel. Isagi obtiendra-t-il une chance de briller sur un champ de bataille régi par un système méritocratique où seules les données numériques comptent ?",
                'manga_cover' => 'Blue_lock_1.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 20',
                'publication_date' => new DateTime('2024-06-12'),
                'synopsis' => "Le club allemand a remporté son premier match à la suite d'une remarquable combinaison entre Isagi et Kunigami. Profitant de cette fièvre ambiante, Ego dévoile une nouveauté retentissante dans le fonctionnement de la Ligue des néo-individualistes : la valeur marchande des joueurs est exposée aux yeux du monde entier ! Cette nouvelle règle impose à chaque participant de revoir sa stratégie et transforme radicalement la rivalité qui anime Kaiser et Isagi. C'est désormais au tour de Nagi, Mikage et Chigiri de se dresser face à Isagi, leur ex-coéquipier, qui brûle d'envie de marquer au cours de son prochain match.",
                'manga_cover' => 'Blue_lock_20.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 21',
                'publication_date' => new DateTime('2024-08-28'),
                'synopsis' => "Suite de la troisième rencontre de la Ligue des néo-individualistes durant laquelle un Chigiri métamorphosé a magistralement ouvert le bal. Tandis qu'Isagi projette de contre-attaquer en formant un nouveau tandem avec Kurona, Nagi s'apprête à dévoiler son nouveau style révélé par Chris, son maître-instructeur. Kaiser, du Bastard Mu nchen, et Agi, de Manshine City, comptent également laisser libre cours à leurs talents afin de plonger la rencontre dans unetout autre dimension ! Sur le fil du rasoir, Isagi devra alors cogiter inlassablement pour découvrir le moyen de dépasser ses limites !",
                'manga_cover' => 'Blue_lock_21.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 22',
                'publication_date' => new DateTime('2024-10-30'),
                'synopsis' => "Le Bastard München a repris l'avantage au cours de ce troisième match de la Ligue des néo-individualistes, mais Isagi a juré de se venger de Kaiser qui l'a empêché de marquer. De son côté, Mikage qui s'était promis de progresser sans l'aide de personne, revient sur sa décision après la requête de Nagi qui lui réclame son aide. Le changement radical du duo provoque un chaos sans précédent sur le terrain ! Pour évoluer encore davantage, Yoichi Isagi n'aura pas d'autre choix que de maîtriser parfaitement la \"méta-vision\", s'il souhaite surpasser tous ses adversaires !",
                'manga_cover' => 'Blue_lock_22.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 23',
                'publication_date' => new DateTime('2024-11-20'),
                'synopsis' => "Troisième match de la Ligue des néoindividualistes. Toujours à égalité, l'équipe allemande et l'équipe anglaise entament la dernière phase de la rencontre. Après avoir anticipé la frappe décisive de Chris, Isagi passe en contre-attaque ! Mais Yukimiya, porté par la fatalité, compte bien lui voler la vedette ! Entre \"raison\" et \"idéal\", Isagi va devoir élaborer une nouvelle stratégie pour surpasser Kaiser. Qui sera l'ultime héros qui domptera l'exaltation sur le terrain ?",
                'manga_cover' => 'Blue_lock_23.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],

            [
                'title' => 'Tome 24',
                'publication_date' => new DateTime('2024-12-04'),
                'synopsis' => "Le club allemand a vaincu l'équipe anglaise grâce à une superbe combinaison d'Isagi et Yukimiya. Pour vaincre Kaiser au prochain match en marquant plus que lui, Isagi s'entraîne encore davantage pour rendre sa nouvelle théorie infaillible. Chez Hiori, qui n'a pas encore joué, c'est plutôt la morosité qui s'installe. Son vague à l'âme cache un lourd passé qui a influencé son opinion sur le football. C'est au tour du club italien de Barô d'affronter l'équipe allemande lors du prochain match ! Qui seront les onze joueurs à se tenir sur le champ de bataille de cette rencontre tant attendue ?",
                'manga_cover' => 'Blue_lock_24.jpg',
                'average_rating' => null,
                'author_id' => 15, //Muneyuki Kaneshiro
                'series_id' => 14 //Blue Lock
            ],


            //L'Attaque des Titans - Édition Colossale
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2015-10-07'),
                'synopsis' => "Le monde appartient désormais aux Titans, des êtres gigantesques qui ont presque décimé l’Humanité. Voilà une centaine d’années, les derniers rescapés ont bâti une place forte, une cité cernée d’une haute muraille au sein de laquelle vivent aujourd’hui leurs descendants. Parqués, ignorants tout du monde extérieur, ils s’estiment au moins à l’abri de ces effroyables êtres qui ne feraient d’eux qu’une bouchée. Hélas, cette illusion de sécurité vole en éclats le jour où surgit un Titan démesuré, encore bien plus colossal que tous les autres. S’engage alors un combat désespéré pour la survie du genre humain…",
                'manga_cover' => 'Lattaque_des_titans_1.jpg',
                'average_rating' => null,
                'author_id' => 16, //Hajime Isyama
                'series_id' => 15 //L'Attaque des Titans - Édition Colossale
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2015-11-12'),
                'synopsis' => "Le monde appartient désormais aux Titans, des êtres gigantesques qui ont presque décimé l’Humanité. Voilà une centaine d’années, les derniers rescapés ont bâti une place forte, une cité cernée d’une haute muraille au sein de laquelle vivent aujourd’hui leurs descendants. Parqués, ignorants tout du monde extérieur, ils s’estiment au moins à l’abri de ces effroyables êtres qui ne feraient d’eux qu’une bouchée. Hélas, cette illusion de sécurité vole en éclats le jour où surgit un Titan démesuré, encore bien plus colossal que tous les autres. S’engage alors un combat désespéré pour la survie du genre humain...",
                'manga_cover' => 'Lattaque_des_titans_2.jpg',
                'average_rating' => null,
                'author_id' => 16, //Hajime Isyama
                'series_id' => 15 //L'Attaque des Titans - Édition Colossale
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2016-04-13'),
                'synopsis' => "Après avoir réussi à refouler l’invasion du district de Trost grâce à la transformation d’Eren, le major Erwin Smith arrive à convaincre sa hiérarchie d’aller explorer la maison des Jäger à Shiganshina, afin d’élucider le mystère des Titans. Mais, lors de la première incursion à l’extérieur du Mur, les troupes du Bataillon d’exploration se font surprendre par un Titan de type féminin, particulièrement dangereux… Au prix de lourds sacrifices, les hommes d’Erwin parviennent tout de même à neutraliser le spécimen. Qui vont-ils extraire de la nuque du Titan ?",
                'manga_cover' => 'Lattaque_des_titans_3.jpg',
                'average_rating' => null,
                'author_id' => 16, //Hajime Isyama
                'series_id' => 15 //L'Attaque des Titans - Édition Colossale
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2016-11-09'),
                'synopsis' => "Partis inspecter le mur Rose afin de localiser la brèche à l’origine de la nouvelle intrusion, les membres de la 104e Brigade pensent avoir trouvé un abri sûr dans les ruines de la forteresse d’Utgard et s’apprêtent à prendre un peu de repos pour la nuit. Malheureusement, les Titans, pourtant censés être inactifs après le coucher du soleil, n’ont pas l’intention de leur laisser le moindre répit !",
                'manga_cover' => 'Lattaque_des_titans_4.jpg',
                'average_rating' => null,
                'author_id' => 16, //Hajime Isyama
                'series_id' => 15 //L'Attaque des Titans - Édition Colossale
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2017-04-12'),
                'synopsis' => "L’intervention du Bataillon d’exploration a permis d’arracher Eren des griffes de Reiner et Bertolt, mais Ymir, elle, a décidé de changer de camp. Le tribut humain est extrêmement lourd à payer pour cette mission de sauvetage... Pour éviter de tels massacres à l’avenir, Hansi force Eren à s’entraîner à se transformer en Titan afin de mieux maîtriser son pouvoir et être plus réactif et efficace lors des combats.",
                'manga_cover' => 'Lattaque_des_titans_5.jpg',
                'average_rating' => null,
                'author_id' => 16, //Hajime Isyama
                'series_id' => 15 //L'Attaque des Titans - Édition Colossale
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2017-06-28'),
                'synopsis' => "Le Bataillon d’exploration est parvenu à déjouer la machination orchestrée contre lui par les Brigades centrales et à renverser le gouvernement. À présent, il ne reste plus qu’à mettre Historia sur le trône. De son côté l’équipe de Livaï a réussi à localiser Eren et Historia mais les délivrer ne sera sans doute pas une mince affaire...",
                'manga_cover' => 'Lattaque_des_titans_6.jpg',
                'average_rating' => null,
                'author_id' => 16, //Hajime Isyama
                'series_id' => 15 //L'Attaque des Titans - Édition Colossale
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2017-11-29'),
                'synopsis' => "Bien décidé à découvrir le secret sommeillant dans le sous-sol de la maison Jäger, le Bataillon d’exploration doit avant tout reprendre le mur Maria. Il livre pour cela une lutte acharnée contre Reiner, Bertolt et le Titan bestial qui leur ont tendu un énième piège à Shiganshina. Après avoir réussi à reboucher le Mur grâce à sa faculté de durcissement, Eren et les siens parviendront-ils à vaincre cet infernal trio pour enfin accéder à de nouvelles révélations ?!",
                'manga_cover' => 'Lattaque_des_titans_7.jpg',
                'average_rating' => null,
                'author_id' => 16, //Hajime Isyama
                'series_id' => 15 //L'Attaque des Titans - Édition Colossale
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2018-09-12'),
                'synopsis' => "Après avoir vaincu le Titan bestial,  Eren  et les survivants du Bataillon d’exploration  découvrent enfin les fameux carnets de  Grisha  Jäger  et les secrets qu’ils renferment. L’accès  aux  souvenirs  de  ce dernier leur  permet de  comprendre  que le monde réel est  bien  différent de ce qu’ils  croyaient jusque-là  et que  les  ennemis  sont loin de se  cantonner à l’île du Paradis.  À présent qu’ils ont réalisé que ce n’est pas la liberté qui les attend au-delà des Murs, quelles options  leur reste-t-il  ?",
                'manga_cover' => 'Lattaque_des_titans_8.jpg',
                'average_rating' => null,
                'author_id' => 16, //Hajime Isyama
                'series_id' => 15 //L'Attaque des Titans - Édition Colossale
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2019-09-11'),
                'synopsis' => "Dans le but de protéger leur patrie et préserver leurs droits et leurs privilèges, les autorités Mahr ont réuni des personnalités du monde entier afin d’affirmer sur la scène internationale la dangerosité de l’île du Paradis. C’est ce moment que choisit Eren pour jaillir et commettre des ravages aussi bien dans la population que dans les rangs de la haute administration militaire. Mais, l’apparition soudaine d’un nouveau Titan va contrarier ses projets. Le plus féroce des combats s’engage alors...",
                'manga_cover' => 'Lattaque_des_titans_9.jpg',
                'average_rating' => null,
                'author_id' => 16, //Hajime Isyama
                'series_id' => 15 //L'Attaque des Titans - Édition Colossale
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2020-08-19'),
                'synopsis' => "Échaudée par l’arrivée de Sieg qui doterait pourtant l’île du Paradis de la puissance du “Grand Terrassement”, l’armée reste méfiante : peut-on vraiment être sûr qu’Eren n’est pas manipulé par son demi-frère ? Malgré l’emprisonnement des transfuges Mahr pour parer à tout risque, la grogne monte au sein de la population et d’une partie des troupes... C’est alors qu’Eren et ses partisans passent à l’action. Après a voir assassiné le général Zackley et neutralisé l’ensemble de l’État-major, ils partent rejoindre Sieg, dont Livaï s’apprête à découvrir les véritables intentions...",
                'manga_cover' => 'Lattaque_des_titans_10.jpg',
                'average_rating' => null,
                'author_id' => 16, //Hajime Isyama
                'series_id' => 15 //L'Attaque des Titans - Édition Colossale
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2021-07-07'),
                'synopsis' => "Après être entrés en contact, Eren révèle à Sieg que sa véritable intention est de  déclencher le Grand Terrassement pour dévaster  le monde entier. Prenant le dessus,  Eren s’empare du pouvoir d’Ymir, la grande  ancêtre, et se met en marche à la tête d’une  gigantesque meute de Titans. Incapables de déterminer s’il faut considérer  ces derniers comme une bénédiction ou au  contraire comme une calamité, Mikasa, Armin et les autres choisissent de faire tout  leur possible pour sauver l’humanité...",
                'manga_cover' => 'Lattaque_des_titans_11.jpg',
                'average_rating' => null,
                'author_id' => 16, //Hajime Isyama
                'series_id' => 15 //L'Attaque des Titans - Édition Colossale
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2022-03-09'),
                'synopsis' => "N’épargnant que l’île du Paradis, le Grand Terrassement poursuit son avancée, écrasant impitoyablement toute vie sur son passage, mais Armin, Mikasa et leurs compagnons savent quelle est la cible d’Eren. Ils le rattrapent enfin, et ne reculeront devant aucun sacrifice pour l’arrêter... Retrouvez des bonus exclusifs dans cet ultime tome : les storyboards des deux chapitres pilotes, le guide Characters, le comics du cross-over Attack on Avengers en couleurs, une galerie d’illustrations incluant des hommages de grands artistes et des dessins inédits de Hajime Isayama !",
                'manga_cover' => 'Lattaque_des_titans_12.jpg',
                'average_rating' => null,
                'author_id' => 16, //Hajime Isyama
                'series_id' => 15 //L'Attaque des Titans - Édition Colossale
            ],


            //L'Amour et la Mort
            [
                'title' => 'One-shot',
                'publication_date' => new DateTime('2020-01-08'),
                'synopsis' => "La ville de Nazumi est recouverte nuit et jour d'un épais manteau de brume. Dans ses ruelles nébuleuses, les adolescents s'adonnent à un étrange rituel de voyance consistant à demander son avenir au premier passant venu. Mais du jeu innocent naît un funeste cortège de suicides sanglants et une rumeur enfle : la Mort rôde aux intersections de la ville, sous les traits d'un séduisant jeune homme qui exacerbe toutes les passions. Plongez au cœur de dix récits d'amour et de mort orchestrés par le maître de l'horreur, dont deux nouvelles consacrées à la sinistre famille Hikizuri. Cette édition bénéficie d'une préface de Stéphane du Mesnildot et d'une analyse en fin d'ouvrage par Morolian, spécialiste francophone de l'auteur. Cette oeuvre, contenant de nombreux bonus, s'intègre dans une collection grand format, à la fabrication soignée, spécialement dédiée au maître de l'horreur.",
                'manga_cover' => 'Lamour_et_la_mort.jpg',
                'average_rating' => null,
                'author_id' => 17, //Junji Itô
                'series_id' => 16 //L'Amour et la Mort
            ],


            //Blame! - Édition Deluxe
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2018-11-07'),
                'synopsis' => "Peut-être sur Terre... Peut-être dans le futur... Killy est un cyborg taciturne qui erre dans une gigantesque cité labyrinthique, s'étendant sur des milliers de niveaux. Armé d'un revolver amplificateur de radiations et accompagné de la scintifique Shibo, il part en quête du \"net-gene\", un programme qui aurait échappé à la contamination globale d'un virus informatique, et qui serait capable de gérer le monde. Édité en 2000, Blame! est l'œuvre qui a révélé le génie de Tsutomu Nihei. Son univers si particulier mélangeant l'organique à l'inorganique et son trait unique ont depuis conquis les geeks du monde entier pour devenir une référence culte. En 2017, l'arrivée du film d'animation adapté du manga a permis à toute une nouvelle génération de connaître la licence. Avec cette édition Deluxe en 6 tomes, dans un format proche de la nouvelle édition d'Akira, vous pourrez redécouvrir les fondements de l'univers Nihei dans toute sa splendeur.",
                'manga_cover' => 'Blame_1.jpg',
                'average_rating' => null,
                'author_id' => 18, //Tsutomu Nihei
                'series_id' => 17 //Blame! - Édition Deluxe
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2019-01-16'),
                'synopsis' => "Killee poursuit sa quête des gènes d’accès réseau, seul moyen de se connecter à la Netsphere, le système virtuel qui régente le monde entier. Alors que lui et Shibo s’apprêtent à tenter de traverser la mégastructure, la gigantesque structure porteuse qui charpente la Ville et la divise en niveaux hermétiques, ils sont contactés par l’agence gouvernementale, le niveau de contrôle de la Netsphere, désireuse de leur apporter son aide pour tenter d’enrayer la progression du chaos qui dévore le monde.",
                'manga_cover' => 'Blame_2.jpg',
                'average_rating' => null,
                'author_id' => 18, //Tsutomu Nihei
                'series_id' => 17 //Blame! - Édition Deluxe
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2019-03-06'),
                'synopsis' => "Parvenus dans un autre niveau de la Ville, Killee et Shibo y font la connaissance d’une tribu de rescapés humains aux côtés desquels ils doivent faire face à un raid de la Contre-mesure. Shibo perd la vie au cours de l’assaut mais parvient à transférer sa conscience dans le corps de la contre-mesure d’élite Sanhakan tandis que les autres humains se réfugient de justesse dans le seul abri qu’il leur reste : une immense structure cylindrique, indépendante de la Netsphere, du nom de Toa Industries. Killee et Shibo partent eux aussi explorer ce bâtiment aux multiples secrets.",
                'manga_cover' => 'Blame_3.jpg',
                'average_rating' => null,
                'author_id' => 18, //Tsutomu Nihei
                'series_id' => 17 //Blame! - Édition Deluxe
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2019-05-02'),
                'synopsis' => "Le combat au sein de Toa Industries atteint son paroxysme. La petite tribu d’humains survivants qui s’est réfugiée entre les murs de cette immense structure fichée dans la Ville est prise entre les feux des IA folles censées la protéger, des envahisseurs siliciés et des contre-mesures venues exterminer tout le monde. Et après des années à partager tant bien que mal le même corps, Shibo et Sanhakan sont de nouveau séparées. Comment va réagir cette dernière ?",
                'manga_cover' => 'Blame_4.jpg',
                'average_rating' => null,
                'author_id' => 18, //Tsutomu Nihei
                'series_id' => 17 //Blame! - Édition Deluxe
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2019-07-03'),
                'synopsis' => "Parvenus dans un niveau officieux, opérant indépendamment du reste de la Ville, Killee et Shibo font la rencontre de Dhomochevsky et Ico, des contre-mesures provisoires qui n’exterminent pas les humains dépourvus de gènes d’accès comme leurs collègues réglementaires. Mais leur petit groupe est pris d’assaut par un terrible ennemi : un groupe d’organismes siliciés mené par Daphine Lu-Linvega, qui ambitionne de se connecter à la Netsphere et voit dans l’échantillon de code génétique que détient Shibo une occasion en or de parvenir à ses fins.",
                'manga_cover' => 'Blame_5.jpg',
                'average_rating' => null,
                'author_id' => 18, //Tsutomu Nihei
                'series_id' => 17 //Blame! - Édition Deluxe
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2019-08-16'),
                'synopsis' => "Une très longue période s’est écoulée depuis l’affrontement cataclysmique contre Daphine Lu-Linvega qui a vu l’immobilisation de Killee et le téléchargement d’une contre-mesure de dernier niveau dans le corps de Shibo. Mais l’agence gouvernementale a dépêché une vieille connaissance pour protéger celle-ci des organismes siliciés. En effet, il se pourrait bien qu’elle renferme en elle la clé de la quête de Killee et du salut de la Ville…",
                'manga_cover' => 'Blame_6.jpg',
                'average_rating' => null,
                'author_id' => 18, //Tsutomu Nihei
                'series_id' => 17 //Blame! - Édition Deluxe
            ],


            //Sidooh - Nouvelle Édition
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2021-01-27'),
                'synopsis' => "Milieu du dix-neuvième siècle au Japon. Une femme meurt emportée par l'épidémie de choléra qui ravage le pays, elle laisse deux jeunes enfants livrés à eux-mêmes : Shotaro, 14 ans et Gentaro, 10 ans. Suivant les dernières recommandations de leur mère, ils savent que pour survivre, ils devront devenir forts car les faibles sont voués à mourir. Ils se mettent alors en quête d'un maître qui leur apprendra à manier le sabre pour devenir comme leur défunt père, un samouraï. Ces innocents orphelins sont loin de s'imaginer combien le monde qui les entoure peut-être sans pitié envers ceux qui ne savent se défendre…",
                'manga_cover' => 'Sidooh_1.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2021-01-27'),
                'synopsis' => "Shotaro apprend qu'il va être sacrifié au cours d'un combat truqué, organisé par les « coeurs purs » dans le cadre d'un spectacle donné devant les dignitaires d'Edo. Sa seule chance de s'en sortir est de se battre. Mais en deux nuits, comment le jeune garçon pourrait-il apprendre à manier suffisamment bien le katana pour rivaliser avec un adversaire surentraîné ?",
                'manga_cover' => 'Sidooh_2.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2021-02-24'),
                'synopsis' => "Dans l'arène de la résidence des coeurs purs, Shotaro livre un combat difficile contre Asaji, un jeune prodige du combat appartenant à la terrible dorentaï. Malgré son manque d'entrainement, le jeune captif parvient à toucher son adversaire mais affamé, blessé et peu sûr de lui, le jeune garçon sent le piège se refermer.",
                'manga_cover' => 'Sidooh_3.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2021-02-24'),
                'synopsis' => "Désormais membres du bataillon blanc de Kiyozo Asakura, Gentaro et Shotaro se rendent à Edo, où ils ont rejoint les rebelles qui veulent renverser le Bakufu. Alors qu'ils s'apprêtent à partir pour Yokohama, ils sont attaqués de nuit par des hommes du gouvernement. Un baptême du feu sanglant pour le byakurentaï !",
                'manga_cover' => 'Sidooh_4.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2021-03-24'),
                'synopsis' => "Désormais privés de la couverture de « blanchisseurs » que les rebelles de Mito leur fournissaient avant d’être exterminés par le Bakufu, Kiyozo et les autres membres du Byakurentaï sont contraints d’élaborer un nouveau plan d’attaque pour remplir la mission qui leur a été confiée : couler le « navire noir » que les Américains ont amarré dans le port de Yokohama…",
                'manga_cover' => 'Sidooh_5.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2021-05-12'),
                'synopsis' => "Le « navire noir » est en flammes et les membres du Byakurentaï mènent leur attaque avec brio jusqu'au moment où les « étrangers » se mettent à utiliser les armes à feu. Ino est touché par une balle et s'écroule par terre. Il demande alors à Gen de le laisser et de s'enfuir, mais le garçon est furieux et ne compte pas en rester là. Dans un accès de rage, il fonce vers les membres du Bakufu, son sabre à la main. Le capitaine Johnson, qui était à bord d'un autre vaisseau, refuse de voir le Byakurentaï couler le « navire noir ». Il donne alors l'ordre de sortir les canons et de faire feu sur le bateau en flammes.",
                'manga_cover' => 'Sidooh_6.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2021-07-15'),
                'synopsis' => "Voilà maintenant un an que le Byakurentaï s'est installé à Edo, la capitale. Shotaro et son frère Gentaro, après un entraînement draconien, ont acquis une excellente maîtrise du sabre. Afin de tester leurs limites, ils décident de s'inscrire à un grand tournoi, auquel participent de nombreux et puissants combattants…",
                'manga_cover' => 'Sidooh_7.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2021-09-15'),
                'synopsis' => "« Si je perds, je me ferai seppuku. » C'est sur cette déclaration que Gentaro lance un défi à Kanbee Sagawa. Il est cependant vite dépassé par la force écrasante de son adversaire. Plus que son corps meurtri, c'est l'orgueil du jeune homme qui ne se remet pas des coups qu'il reçoit, c'est finalement vers lui-même qu'il pointe sa lame !",
                'manga_cover' => 'Sidooh_8.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2021-11-17'),
                'synopsis' => "Le Japon tremble. Engagés pour escorter maître Hayakawa, les membres du Byakurentaï quittent la tranquillité d’Aïzu pour rejoindre les troubles de Kyoto. Les aspirations des jeunes samouraïs vont être rudement mises à l’épreuve…",
                'manga_cover' => 'Sidooh_9.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2021-12-08'),
                'synopsis' => "Assoiffés de vengeance, les frères Yukimura sont en route pour Kyoto. Ils espèrent bien y trouver Rugi et lui faire payer sa trahison. Cependant, une armée de ronins se dirige elle aussi vers cette ville pour escorter le shogun Iemochi Tokugawa…",
                'manga_cover' => 'Sidooh_10.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2022-02-09'),
                'synopsis' => "Arrivé à Kyoto, le Byakurentaï devient l'unité spéciale de surveillance de la capitale. Avec l'arrivée prochaine du shogun Iemochi Togukawa et de son armée de ronins, la tension monte en ville et des débordements sont à craindre. Mais une décision politique et stratégique du shogunat pourrait changer la donne… En une trentaine d'années de carrière et une quinzaine d'oeuvres, Tsutomu Takahashi s'est imposé comme l'un des grands noms du seinen au pays du Soleil Levant. Il a également formé Tsutomu Nihei, l'auteur de Blame! Repéré en 1987 par la maison d'édition Kodansha, il prend son indépendance en 1989 avec Jiraishin. C'est un maître du suspense et du surnaturel. Il aime mettre en scène des anti-héros non conformistes confrontés à un destin surnaturel ou violent. Takahashi raconte dans Sidooh un pan de l'histoire du Japon : le Bakumatsu. Ce mot désigne une période mouvementée durant laquelle le Japon s'ouvrait au monde extérieur. À travers le périple de ses deux jeunes protagonistes, il nous conte cette histoire douloureuse qui a vu s'effondrer le shogunat, remplacé par un régime impérial moderne.",
                'manga_cover' => 'Sidooh_11.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2022-02-09'),
                'synopsis' => "Les frères Yukimura et leurs hommes arrivent dans le quartier des étrangers de Kobe et découvrent avec stupeur le chaos qui y règne. Après l'attaque menée par les hommes de Choshu, la tension est palpable et nos protagonistes devront décider de quel côté se ranger. Shotaro et Gentaro resteront-ils unis face à cette nouvelle donne ?",
                'manga_cover' => 'Sidooh_12.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2022-03-23'),
                'synopsis' => "Quelle sera l’issue du duel entre Shotaro Yukimura et Shinsaku Takasugi ? Et que trame encore Rugi ? Tsutomu Takahashi fait monter la pression d’un cran.",
                'manga_cover' => 'Sidooh_13.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 14',
                'publication_date' => new DateTime('2022-04-20'),
                'synopsis' => "Bien qu'il ait affronté de multiples menaces, Gentaro manque encore d'expérience, ses lacunes coûteront malheureusement la vie à un homme et mettront en danger plusieurs autres personnes.",
                'manga_cover' => 'Sidooh_14.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 15',
                'publication_date' => new DateTime('2022-11-05'),
                'synopsis' => "Sous le ciel de Kyoto, le chaos règne. Les différentes factions s'affrontent dans un conflit où se joue l'avenir du Japon. Shotaro et Gentaro affûtent leurs lames, déterminés à se venger de celui qui les a trahis : Rugi.",
                'manga_cover' => 'Sidooh_15.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 16',
                'publication_date' => new DateTime('2022-06-15'),
                'synopsis' => "Les flammes de la bataille ravagent Kyoto suite à l'affrontement opposant les fiefs d'Aizu, Satsuma et Choshu. Shotaro et Mozu profitent du changement qui est en train de s'opérer au sein de la société et du gouvernement, pour essayer d'atteindre leurs propres objectifs. Non loin de là, Ryoma Sakamoto et Shintaro Nakaoka entament les derniers préparatifs du coup d'État. Cependant, ils ne s'attendaient pas à se retrouver devant Kaishu Katsu, Takamori Saigo et Shinsaku Takasugi…",
                'manga_cover' => 'Sidooh_16.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 17',
                'publication_date' => new DateTime('2022-07-13'),
                'synopsis' => "Suite aux derniers événements, le shogunat et le fief de Choshu se séparent. Les batailles sont de plus en plus acharnées. Shotaro Yukimura, meneur du Iwasotai, ignore cette scission. Il continue sa route vers son ennemi juré : Choshu. En chemin, il tombe sur des troupes adverses et la rencontre vire au drame. La situation est critique et c'est alors que Tasuke Samejima, combattant en première ligne, aperçoit le drapeau de Byakushinkyo…",
                'manga_cover' => 'Sidooh_17.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 18',
                'publication_date' => new DateTime('2022-09-14'),
                'synopsis' => "Capturé par l'armée de Choshu, Samejima est dans un état critique. Si les frères Yukimura tentent en vain de le délivrer, Samejima fait passer l'intérêt du bataillon avant le sien, et demande une mort par seppuku. Takasugi quant à lui très affaibli par la maladie, choisit également la mort, et il s'éteint à l'âge de 27 ans. Le gouvernement impérial est ainsi restauré et le pays peut entrer dans une nouvelle ère. Quelle sera la place de ceux qui restent ?",
                'manga_cover' => 'Sidooh_18.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 19',
                'publication_date' => new DateTime('2022-11-09'),
                'synopsis' => "Shotaro et Gentaro échouent face à leur première mission. Afin de sauver leur honneur, ils en acceptent une nouvelle. Cette fois, Katsu les envoie s'en prendre à Ryoma Sakamoto. Les deux guerriers décident de profiter de la rencontre entre Sakamoto et Rugi pour agir. Gentaro décide d'attirer l'attention de sa cible à l'aide d'un ballon dirigeable et de puissantes fusées d'artifice. Pendant ce temps, Shotaro s'infiltre dans l'auberge et se retrouve face à Nakaoka et Sakamoto. Comment se terminera ce face-à-face sanglant ?",
                'manga_cover' => 'Sidooh_19.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 20',
                'publication_date' => new DateTime('2023-01-25'),
                'synopsis' => "Saigo Takamori parvient à pénétrer dans le fort du Byakushinkyo et, malgré la tension qui règne, Rugi l'accueille comme un prince. Le discours que tient son hôte quant à l'avenir fascine Saigo. C'est à cet instant que Shotaro, Gentaro et Liang entrent à leur tour. Fatalement, leur chemin croise celui de Rugi. Un moment que Gentaro attendait depuis très longtemps ! Ainsi débute la plus grande guerre civile que le Japon n'ait jamais connue : la guerre de Boshin.",
                'manga_cover' => 'Sidooh_20.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 21',
                'publication_date' => new DateTime('2023-03-08'),
                'synopsis' => "La tentative d'assassinat de Rugi fomentée par Shotaro, Gentaro et Ryan avec la complicité de Takamori Saigo a échoué. L'alliance du Byakushinkyo avec les Han de Satsuma et Choshu tarde à porter ses fruits, et pendant ce temps, le Shinsengumi se prépare à défendre Kyoto. Ces évènements ne sont que le prélude à l'arrivée d'une nouvelle ère. Le Japon vit l'un des plus grands tournants de son histoire...",
                'manga_cover' => 'Sidooh_21.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 22',
                'publication_date' => new DateTime('2023-05-24'),
                'synopsis' => "Le pouvoir est à nouveau entre les mains de l'empereur. Suite à cet acte, la guerre de Boshin a éclaté. Shotaro et ses hommes sont arrivés à Edo, épuisés. Ils apprennent alors que Mozu est elle aussi présente en ville, avec son fils. Gentaro est quant à lui très inquiet pour Kikuno et décide de se rendre au mont bandai pour prendre des nouvelles.",'manga_cover' => 'Sidooh_22.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 23',
                'publication_date' => new DateTime('2023-07-12'),
                'synopsis' => "Le pouvoir est à nouveau entre les mains de l'empereur. Suite à cet acte, la guerre de Boshin a éclaté. Shotaro et ses hommes sont arrivés à Edo, épuisés. Ils apprennent alors que Mozu est elle aussi présente en ville, avec son fils. Gentaro est quant à lui très inquiet pour Kikuno et décide de se rendre au mont bandai pour prendre des nouvelles.",
                'manga_cover' => 'Sidooh_23.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 24',
                'publication_date' => new DateTime('2023-09-20'),
                'synopsis' => "Katsu veut empêcher Rugi de détruire Edo. Il envoie alors Yoshinobu, dernier shogun Tokugawa, au bord de la folie, mener des négociations…",
                'manga_cover' => 'Sidooh_24.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],

            [
                'title' => 'Tome 25',
                'publication_date' => new DateTime('2023-11-15'),
                'synopsis' => "Les forces d'Aizu ont vaincu Rugi et son armée de fanatiques. Shotaro est gravement blessé, mais porté par Gentaro, ils se mettent en route pour Aizu. En chemin, ils aperçoivent le mont Bandai dont ils n'avaient cessé de rêver… Shotaro pense à sa famille et à ses amis, et il ferme les yeux… Alors que la guerre de Boshin prend des allures d'épreuve dévastatrice, Gentaro doit prendre une importante décision !",
                'manga_cover' => 'Sidooh_25.jpg',
                'average_rating' => null,
                'author_id' => 19, //Tsutomu Takahashi
                'series_id' => 18 //Sidooh - Nouvelle Édition
            ],


            //Fire Punch
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2017-06-21'),
                'synopsis' => "Dans un monde où tout est recouvert de glace, la famine et le chaos règnent sur la Terre. Parmi les quelques humains qui tentent de survivre, certains sont dotés de pouvoir surnaturels. Agni et sa soeur, Luna, font partis de ces « élus » et possèdent la faculté de se régénérer. Agni utilise ce pouvoir pour nourrir les habitants de son village. Pourtant cela ne suffira pas à les préserver du terrible malheur qui va s’abattre sur eux… Agni sera le seul survivant du massacre qui a brûlé tous ses proches. Il part alors dans une quête effrénée pour assouvir sa soif de vengeance !",
                'manga_cover' => 'Fire_punch_1.jpg',
                'average_rating' => null,
                'author_id' => 20, //Tatsuki Fujimoto
                'series_id' => 19 //Fire Punch
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2017-08-23'),
                'synopsis' => "Plongés dans une nouvelle ère glaciaire, où le chaos et la famine règnent sur terre, les hommes sont prêts à tout pour survivre. Parmi eux, certains, possèdent des dons surnaturels. Agni et sa soeur Luna font partis de ces \"élus\" et utilisent leur pouvoir de régénération pour nourrir les habitants de leur village. Mais un jour, un terrible malheur les frappe. Agni sera le seul survivant d’un massacre qui a brûlé ses proches. Il part alors dans une quête effrénée pour assouvir sa soif de vengeance.",
                'manga_cover' => 'Fire_punch_2.jpg',
                'average_rating' => null,
                'author_id' => 20, //Tatsuki Fujimoto
                'series_id' => 19 //Fire Punch
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2017-10-25'),
                'synopsis' => "Plongés dans une nouvelle ère glaciaire, où le chaos et la famine règnent sur terre, les hommes sont prêts à tout pour survivre. Parmi eux, certains, possèdent des dons surnaturels. Agni et sa soeur Luna font partis de ces \"élus\" et utilisent leur pouvoir de régénération pour nourrir les habitants de leur village. Mais un jour, un terrible malheur les frappe. Agni sera le seul survivant d’un massacre qui a brûlé ses proches. Il part alors dans une quête effrénée pour assouvir sa soif de vengeance.",
                'manga_cover' => 'Fire_punch_3.jpg',
                'average_rating' => null,
                'author_id' => 20, //Tatsuki Fujimoto
                'series_id' => 19 //Fire Punch
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2017-12-13'),
                'synopsis' => "Plongés dans une nouvelle ère glaciaire, où le chaos et la famine règnent sur terre, les hommes sont prêts à tout pour survivre. Parmi eux, certains, possèdent des dons surnaturels. Agni et sa soeur Luna font partis de ces \"élus\" et utilisent leur pouvoir de régénération pour nourrir les habitants de leur village. Mais un jour, un terrible malheur les frappe. Agni sera le seul survivant d’un massacre qui a brûlé ses proches. Il part alors dans une quête effrénée pour assouvir sa soif de vengeance.",
                'manga_cover' => 'Fire_punch_4.jpg',
                'average_rating' => null,
                'author_id' => 20, //Tatsuki Fujimoto
                'series_id' => 19 //Fire Punch
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2018-03-07'),
                'synopsis' => "Plongés dans une nouvelle ère glaciaire, où le chaos et la famine règnent sur terre, les hommes sont prêts à tout pour survivre. Parmi eux, certains, possèdent des dons surnaturels. Agni et sa soeur Luna font partis de ces \"élus\" et utilisent leur pouvoir de régénération pour nourrir les habitants de leur village. Mais un jour, un terrible malheur les frappe. Agni sera le seul survivant d’un massacre qui a brûlé ses proches. Il part alors dans une quête effrénée pour assouvir sa soif de vengeance.",
                'manga_cover' => 'Fire_punch_5.jpg',
                'average_rating' => null,
                'author_id' => 20, //Tatsuki Fujimoto
                'series_id' => 19 //Fire Punch
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2018-06-06'),
                'synopsis' => "Plongés dans une nouvelle ère glaciaire, où le chaos et la famine règnent sur terre, les hommes sont prêts à tout pour survivre. Parmi eux, certains, possèdent des dons surnaturels. Agni et sa soeur Luna font partis de ces \"élus\" et utilisent leur pouvoir de régénération pour nourrir les habitants de leur village. Mais un jour, un terrible malheur les frappe. Agni sera le seul survivant d’un massacre qui a brûlé ses proches. Il part alors dans une quête effrénée pour assouvir sa soif de vengeance.",
                'manga_cover' => 'Fire_punch_6.jpg',
                'average_rating' => null,
                'author_id' => 20, //Tatsuki Fujimoto
                'series_id' => 19 //Fire Punch
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2018-09-05'),
                'synopsis' => "Plongés dans une nouvelle ère glaciaire, où le chaos et la famine règnent sur terre, les hommes sont prêts à tout pour survivre. Parmi eux, certains, possèdent des dons surnaturels. Agni et sa soeur Luna font partis de ces \"élus\" et utilisent leur pouvoir de régénération pour nourrir les habitants de leur village. Mais un jour, un terrible malheur les frappe. Agni sera le seul survivant d’un massacre qui a brûlé ses proches. Il part alors dans une quête effrénée pour assouvir sa soif de vengeance.",
                'manga_cover' => 'Fire_punch_7.jpg',
                'average_rating' => null,
                'author_id' => 20, //Tatsuki Fujimoto
                'series_id' => 19 //Fire Punch
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2018-11-28'),
                'synopsis' => "Plongés dans une nouvelle ère glaciaire, où le chaos et la famine règnent sur terre, les hommes sont prêts à tout pour survivre. Parmi eux, certains, possèdent des dons surnaturels. Agni et sa soeur Luna font partis de ces \"élus\" et utilisent leur pouvoir de régénération pour nourrir les habitants de leur village. Mais un jour, un terrible malheur les frappe. Agni sera le seul survivant d’un massacre qui a brûlé ses proches. Il part alors dans une quête effrénée pour assouvir sa soif de vengeance.",
                'manga_cover' => 'Fire_punch_8.jpg',
                'average_rating' => null,
                'author_id' => 20, //Tatsuki Fujimoto
                'series_id' => 19 //Fire Punch
            ],


            //Adieu Eri
            [
                'title' => 'One-Shot',
                'publication_date' => new DateTime('2020-01-08'),
                'synopsis' => "« Je veux que tu me filmes jusqu'à ma mort. » Yûta, adolescent mordu de cinéma, accomplit cette dernière volonté de sa mère avec un brio... explosif. Dépité par la réception de son court-métrage, il s'apprête à en finir à son tour. Lorsqu'il rencontre Eri. Cinéphile, comme lui, la mystérieuse jeune fille va inspirer Yûta et l'aider à réaliser un nouveau film... Après Look Back, Tatsuki Fujimoto revient explorer la frontière floue entre le réel et la fiction, pour livrer, dans ce troublant court-métrage dessiné, une vibrante déclaration d'amour au septième art.",
                'manga_cover' => 'Adieu_eri.jpg',
                'average_rating' => null,
                'author_id' => 20, //Tatsuki Fujimoto
                'series_id' => 20 //Adieu Eri
            ],


            //Orange
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2014-10-09'),
                'synopsis' => "Un matin, alors qu'elle se rend au lycée, Naho reçoit une drôle de lettre… une lettre du futur ! La jeune femme qu'elle est devenue dix ans plus tard, rongée par de nombreux remords, souhaite aider celle qu'elle était autrefois à ne pas faire les mêmes erreurs qu'elle. Aussi, elle a décrit, dans un long courrier, les évènements qui vont se dérouler dans la vie de Naho lors des prochains mois, lui indiquant même comment elle doit se comporter. Mais Naho, a bien du mal à y croire, à cette histoire… Et de toute façon, elle manque bien trop d'assurance en elle pour suivre certaines directives indiquées dans ce curieux courrier. Pour le moment, la seule chose dont elle est sûre, c'est que Kakeru, le nouvel élève de la classe, ne la laisse pas indifférent…",
                'manga_cover' => 'Orange_1.jpg',
                'average_rating' => null,
                'author_id' => 21, //Ichigo Takano
                'series_id' => 19 ////Orange
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2014-12-04'),
                'synopsis' => "Un matin, alors qu'elle se rend au lycée, Naho reçoit une drôle de lettre… une lettre du futur ! La jeune femme qu'elle est devenue dix ans plus tard, rongée par de nombreux remords, souhaite aider celle qu'elle était autrefois à ne pas faire les mêmes erreurs qu'elle. Aussi, elle a décrit, dans un long courrier, les évènements qui vont se dérouler dans la vie de Naho lors des prochains mois, lui indiquant même comment elle doit se comporter. Mais Naho, a bien du mal à y croire, à cette histoire… Et de toute façon, elle manque bien trop d'assurance en elle pour suivre certaines directives indiquées dans ce curieux courrier. Pour le moment, la seule chose dont elle est sûre, c'est que Kakeru, le nouvel élève de la classe, ne la laisse pas indifférent…",
                'manga_cover' => 'Orange_2.jpg',
                'average_rating' => null,
                'author_id' => 21, //Ichigo Takano
                'series_id' => 19 ////Orange
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2015-02-12'),
                'synopsis' => "Un matin, alors qu'elle se rend au lycée, Naho reçoit une drôle de lettre… une lettre du futur ! La jeune femme qu'elle est devenue dix ans plus tard, rongée par de nombreux remords, souhaite aider celle qu'elle était autrefois à ne pas faire les mêmes erreurs qu'elle. Aussi, elle a décrit, dans un long courrier, les évènements qui vont se dérouler dans la vie de Naho lors des prochains mois, lui indiquant même comment elle doit se comporter. Mais Naho, a bien du mal à y croire, à cette histoire… Et de toute façon, elle manque bien trop d'assurance en elle pour suivre certaines directives indiquées dans ce curieux courrier. Pour le moment, la seule chose dont elle est sûre, c'est que Kakeru, le nouvel élève de la classe, ne la laisse pas indifférent…",
                'manga_cover' => 'Orange_3.jpg',
                'average_rating' => null,
                'author_id' => 21, //Ichigo Takano
                'series_id' => 19 ////Orange
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2015-07-02'),
                'synopsis' => "Un matin, alors qu'elle se rend au lycée, Naho reçoit une drôle de lettre… une lettre du futur ! La jeune femme qu'elle est devenue dix ans plus tard, rongée par de nombreux remords, souhaite aider celle qu'elle était autrefois à ne pas faire les mêmes erreurs qu'elle. Aussi, elle a décrit, dans un long courrier, les évènements qui vont se dérouler dans la vie de Naho lors des prochains mois, lui indiquant même comment elle doit se comporter. Mais Naho, a bien du mal à y croire, à cette histoire… Et de toute façon, elle manque bien trop d'assurance en elle pour suivre certaines directives indiquées dans ce curieux courrier. Pour le moment, la seule chose dont elle est sûre, c'est que Kakeru, le nouvel élève de la classe, ne la laisse pas indifférent…",
                'manga_cover' => 'Orange_4.jpg',
                'average_rating' => null,
                'author_id' => 21, //Ichigo Takano
                'series_id' => 19 ////Orange
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2016-03-24'),
                'synopsis' => "Un matin, alors qu'elle se rend au lycée, Naho reçoit une drôle de lettre… une lettre du futur ! La jeune femme qu'elle est devenue dix ans plus tard, rongée par de nombreux remords, souhaite aider celle qu'elle était autrefois à ne pas faire les mêmes erreurs qu'elle. Aussi, elle a décrit, dans un long courrier, les évènements qui vont se dérouler dans la vie de Naho lors des prochains mois, lui indiquant même comment elle doit se comporter. Mais Naho, a bien du mal à y croire, à cette histoire… Et de toute façon, elle manque bien trop d'assurance en elle pour suivre certaines directives indiquées dans ce curieux courrier. Pour le moment, la seule chose dont elle est sûre, c'est que Kakeru, le nouvel élève de la classe, ne la laisse pas indifférent…",
                'manga_cover' => 'Orange_5.jpg',
                'average_rating' => null,
                'author_id' => 21, //Ichigo Takano
                'series_id' => 19 ////Orange
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2018-01-11'),
                'synopsis' => "Un matin, alors qu'elle se rend au lycée, Naho reçoit une drôle de lettre… une lettre du futur ! La jeune femme qu'elle est devenue dix ans plus tard, rongée par de nombreux remords, souhaite aider celle qu'elle était autrefois à ne pas faire les mêmes erreurs qu'elle. Aussi, elle a décrit, dans un long courrier, les évènements qui vont se dérouler dans la vie de Naho lors des prochains mois, lui indiquant même comment elle doit se comporter. Mais Naho, a bien du mal à y croire, à cette histoire… Et de toute façon, elle manque bien trop d'assurance en elle pour suivre certaines directives indiquées dans ce curieux courrier. Pour le moment, la seule chose dont elle est sûre, c'est que Kakeru, le nouvel élève de la classe, ne la laisse pas indifférent…",
                'manga_cover' => 'Orange_6.jpg',
                'average_rating' => null,
                'author_id' => 21, //Ichigo Takano
                'series_id' => 19 ////Orange
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2022-11-17'),
                'synopsis' => "Un matin, alors qu'elle se rend au lycée, Naho reçoit une drôle de lettre… une lettre du futur ! La jeune femme qu'elle est devenue dix ans plus tard, rongée par de nombreux remords, souhaite aider celle qu'elle était autrefois à ne pas faire les mêmes erreurs qu'elle. Aussi, elle a décrit, dans un long courrier, les évènements qui vont se dérouler dans la vie de Naho lors des prochains mois, lui indiquant même comment elle doit se comporter. Mais Naho, a bien du mal à y croire, à cette histoire… Et de toute façon, elle manque bien trop d'assurance en elle pour suivre certaines directives indiquées dans ce curieux courrier. Pour le moment, la seule chose dont elle est sûre, c'est que Kakeru, le nouvel élève de la classe, ne la laisse pas indifférent…",
                'manga_cover' => 'Orange_7.jpg',
                'average_rating' => null,
                'author_id' => 21, //Ichigo Takano
                'series_id' => 19 ////Orange
            ],


            //17 ans Une chronique du mal
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2020-09-25'),
                'synopsis' => "Sachiko, 17 ans, est séquestrée, agressée et torturée par un groupe de garçons dont le seul but est de s'amuser. Personne ne veut la libérer par peur de faire face aux conséquences. Devant l'inaction de la police et de ses parents, sa soeur jumelle poursuit sans relâche ses recherches.",
                'manga_cover' => '17ans_1.jpg',
                'average_rating' => null,
                'author_id' => 22, //Seiji Fujii
                'series_id' => 22 //17 ans Une chronique du mal
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2021-01-29'),
                'synopsis' => "La bande de Miyamoto continue de tourmenter Sachiko, dont l'état physique et moral se dégrade de plsu en plus. Miyamoto devient d eplsu en plus virulent et ne supporte plus aucune contradiction, ce qui tend de plus en plus les relations entre les membres du gang. Kazuya, chez qui Sachiko est séquestrée, fait désormais régner la terreur à la maison et s'en prend physiquement a ses parents qui n'osent rien dire…",
                'manga_cover' => '17ans_2.jpg',
                'average_rating' => null,
                'author_id' => 22, //Seiji Fujii
                'series_id' => 22 //17 ans Une chronique du mal
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2021-05-14'),
                'synopsis' => "La recherche de Sachiko se poursuit tandis que les tensions grandissent entre les membres du gang. Certains jugent qu'ils sont allés trop loin mais le chef, Miyamoto, est bien décidé à garder la jeune fille indéfiniment et à faire taire les voix dissonantes.",
                'manga_cover' => '17ans_3.jpg',
                'average_rating' => null,
                'author_id' => 22, //Seiji Fujii
                'series_id' => 22 //17 ans Une chronique du mal
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2021-12-10'),
                'synopsis' => "La bande de Miyamoto continue de tourmenter Sachiko, dont l'état physique et moral se dégrade de plus en plus. Miyamoto devient plus virulent et ne supporte plus aucune contradiction, ce qui tend de plus en plus les relations entre les membres du gang. Kazuya, chez qui Sachiko est séquestrée, fait désormais régner la terreur à la maison et s'en prend physiquement à ses parents qui n'osent rien dire.",
                'manga_cover' => '17ans_4.jpg',
                'average_rating' => null,
                'author_id' => 22, //Seiji Fujii
                'series_id' => 22 //17 ans Une chronique du mal
            ],


            //Le péché originel de Takopi
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2023-01-25'),
                'synopsis' => "Takopi est un petit extraterrestre arrivé tout droit de la planète Happy, pour répandre la joie sur Terre ! Sauf que la première personne à lui tendre la main est Shizuka, une fillette au visage infiniment triste... Aussitôt, Takopi se donne pour mission de lui rendre le sourire à l'aide de ses fantastiques \"happy gadgets\" ! Mais le petit alien est loin d'imaginer la noirceur de l'environnement dans lequel évolue l'écolière. L'innocence et la bonne volonté de Takopi vont peu à peu l'entraîner dans une situation inextricable... Jusqu'à ce que le pire se produise.",
                'manga_cover' => 'Takopi_1.jpg',
                'average_rating' => null,
                'author_id' => 23, //Taizan5
                'series_id' => 23 //Le péché originel de Takopi
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2023-01-25'),
                'synopsis' => "Le corps sans vie de Marina a été retrouvé. Mais Shizuka, imperturbable lors des interrogatoires de la police, continue de s'adonner aux préparatifs de son voyage. Azuma, de son côté, fait tout son possible pour dissiper le moindre soupçon. Une fois les vacances d'été arrivées, Shizuka se rendra enfin chez son père à Tokyo, avec Takopi à ses côtés... Mais la jeune fille y trouvera-t-elle seulement ce qu'elle espère ? La série phénomène qui a secoué la planète manga !",
                'manga_cover' => 'Takopi_2.jpg',
                'average_rating' => null,
                'author_id' => 23, //Taizan5
                'series_id' => 23 //Le péché originel de Takopi
            ],


            //Gannibal
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2020-07-29'),
                'synopsis' => "Daigo Agawa, policier de son état, a été détaché à Kuge, un village de montagne reculé. Bien que la communauté l’accueille chaleureusement lui et sa famille, la mort d’une vieille villageoise fait jaillir des doutes quant à la normalité de ce lieu...",
                'manga_cover' => 'Gannibal_1.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2020-10-14'),
                'synopsis' => "Le policier Daigo Agawa suspecte des cas de cannibalisme à Kuge, village de montagne reculé où il a été détaché. Cependant, son enquête le forcera à faire face à son propre passé.",
                'manga_cover' => 'Gannibal_2.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2020-12-17'),
                'synopsis' => "Bien que conscient de la part d'ombre du village, Daigo tente de s'adapter à sa nouvelle vie. Cependant, de nombreux habitants commencent à délier leurs langues. Une femme en particulier lui raconte la vérité sur l'enlèvement de son nourrisson…",
                'manga_cover' => 'Gannibal_3.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2021-02-24'),
                'synopsis' => "L'antagonisme entre les villageois et Daigo s'aggrave à mesure que les jours passent. En enquêtant sur le cannibalisme du village, il sera plongé au sein d'un conflit duquel il tirera une conclusion. Il ne s'agit cependant pas de fuir le village, mais bien d'affronter directement le clan Gotô.",
                'manga_cover' => 'Gannibal_4.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2021-05-21'),
                'synopsis' => "Daigo a finalement trouvé des alliés au sein et hors des forces policières. Désormais, c'est toute la police qui mène l'enquête. C'est aussi elle qui lui ordonne d'évacuer les lieux. Cependant, Daigo ne peut retenir sa colère intérieure. La folie villageoise fait désormais face à une folie justicière.",
                'manga_cover' => 'Gannibal_5.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2021-08-10'),
                'synopsis' => "Daigo s’est finalement rendu seul à Kuge afin de sauver les enfants. Dans ses recherches, il tombe sur Keisuke et lui pose enfin la question qui le hante depuis son arrivée. La réponse aura de quoi surprendre le policier !",
                'manga_cover' => 'Gannibal_6.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2021-11-18'),
                'synopsis' => "Daigo, ayant perdu connaissance lors de son affrontement contre \"Lui\", se réveille dans un endroit inconnu. De son côté, le chef du bureau d'investigation, Gô Kanamura, s'attèle à reprendre le contrôle du village grâce aux troupes armées de la police. Tout se passait comme prévu, jusqu'à son intervention. La violence appelle la violence.",
                'manga_cover' => 'Gannibal_7.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2022-02-23'),
                'synopsis' => "La folie et la rage des Gotô dépassent ce qu'on pouvait imaginer. Elles leur donneront peut-être assez d'énergie pour décimer les forces armées de la police, et de passer au niveau supérieur, quitte à se sacrifier.",
                'manga_cover' => 'Gannibal_8.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2022-05-31'),
                'synopsis' => "Obsédé par son désir d'anéantir le clan Gotô, Agawa sombre dans la folie. Déplorant sa propre faiblesse, Keisuke trouve enfin sa détermination. Pour lui, cela signifie mettre fin à la funeste malédiction qui règne sur son clan et le village… malédiction qu'il déteste tant.",
                'manga_cover' => 'Gannibal_9.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2022-07-22'),
                'synopsis' => "\"Je vais les bouffer. Bouffer. Jusqu'à satiété !\" Comment Gin Gotô a-t-elle assise son emprise sur Kuge ? La réponse se trouve dans sa jeunesse triste et pleine d'ambition, plusieurs décennies en arrière. C'est à ce moment que tout a commencé… Découvrez les sources de la terrible malédiction qui domine encore aujourd'hui Kuge dans ce tome 10 !!",
                'manga_cover' => 'Gannibal_10.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2022-12-09'),
                'synopsis' => "« Donnez-le en offrande à votre nouveau dieu. » Une obstination sans pareille a ressuscité Gin d'entre les morts. Sa soif de meurtres et ses machinations lui permettent de s'emparer de Kuge et d'y implanter un ordre basé sur la peur. Le monde construit par la vieille Gotô s'effrite avec sa mort. Découvrez dans le tome 11 comment la malédiction lie le passé au présent.",
                'manga_cover' => 'Gannibal_11.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2023-03-10'),
                'synopsis' => "Perdus dans les déboires de la dernière fête de l'offrande, les Gotô ont choisi la guerre contre l'état japonais. Face à Mashiro donnée en offrande à « Lui », le nouveau chef du clan décide enfin d'agir. « Pardonne-moi, Shirogane... » Les mots d'amour et de tendresse de son fils forceront la réincarnation du dieu Kuru à décider de son propre sort. Cependant, la folie des Gotô pourrait en cacher une autre, encore bien pire !",
                'manga_cover' => 'Gannibal_12.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2023-08-10'),
                'synopsis' => "Ils ont vaincu la malédiction. Dieu est mort, et avec lui l'ordre qui tenait ce monde. La haine des villageois envers les Gotô explose, non sans une lueur d'espoir…",
                'manga_cover' => 'Gannibal_13.jpg',
                'average_rating' => null,
                'author_id' => 24, //Masaki Ninomiya
                'series_id' => 24 //Gannibal
            ],


            //Les carnets de l'apothicaire
            [
                'title' => 'Tome 1',
                'publication_date' => new DateTime('2021-01-21'),
                'synopsis' => "À 17 ans, Mao Mao a une vie compliquée. Formée dès son jeune âge par un apothicaire du quartier des plaisirs, elle se retrouve enlevée et vendue comme servante dans le quartier des femmes du palais impérial ! Entouré de hauts murs, il est coupé du monde extérieur. Afin de survivre dans cette prison de luxe grouillant de complots et de basses manœuvres, la jeune fille tente de cacher ses connaissances pour se fondre dans la masse. Mais, quand les morts suspectes de princes nouveau-nés mettent la cour en émoi, sa passion pour les poisons prend le dessus. Elle observe, enquête… et trouve la solution ! En voulant bien faire, la voilà repérée… Jinshi, haut fonctionnaire aussi beau que calculateur, devine son talent et la promeut goûteuse personnelle d’une des favorites de l’empereur. Au beau milieu de ce nid de serpents, le moindre faux pas peut lui être fatal !",
                'manga_cover' => 'Les_carnets_de_lapothicaire_1.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],

            [
                'title' => 'Tome 2',
                'publication_date' => new DateTime('2021-03-04'),
                'synopsis' => "Désormais dame de compagnie et goûteuse au service de Gyokuyo, l’une des concubines favorites de l’empereur, Mao Mao commence une nouvelle vie ! Alors qu’elle vient tout juste d’arriver au pavillon de Jade, elle se forge très vite une réputation d’excellente apothicaire, à tel point que l’empereur en personne la convoque… Il lui faut maintenant s’acquitter d’une mission de taille : trouver la cause du mal qui ronge Lifa, la mère du petit prince décédé. Malheureusement, la tâche est encore plus difficile que prévu ! En effet, pour guérir sa patiente, la jeune fille va d’abord devoir se confronter aux femmes du pavillon de Cristal…",
                'manga_cover' => 'Les_carnets_de_lapothicaire_2.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],

            [
                'title' => 'Tome 3',
                'publication_date' => new DateTime('2021-05-06'),
                'synopsis' => "Après avoir réussi à sauver Lifa, Mao Mao est conviée à la réception d'hiver, un grand banquet qui réunit les personnalités les plus importantes de la cour intérieure. La jeune apothicaire ne s'y rend pas seulement en tant que dame de compagnie, mais aussi comme goûteuse de Gyokuyo… C'est donc devant une assemblée médusée que Mao Mao déguste une soupe empoisonnée… qui n'était pas destinée à sa maîtresse ! En effet, c'est la cadette des quatre concubines, Lishu, qui semblait visée. Quelle vérité se cache derrière cette étrange manigance ?",
                'manga_cover' => 'Les_carnets_de_lapothicaire_3.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],

            [
                'title' => 'Tome 4',
                'publication_date' => new DateTime('2021-07-01'),
                'synopsis' => "Alors que Mao Mao se rend dans le quartier des plaisirs pour profiter de quelques jours de repos bien mérités aux côtés de son père, la voilà de nouveau amenée à enquêter ! En effet, une courtisane et son client ont été retrouvés empoisonnés dans une des maisons closes environnantes… Une affaire que la petite apothicaire parvient à résoudre avec beaucoup de sang-froid. Mais, de retour au pavillon de Jade, la jeune fille est mandatée par Jinshi pour éclaircir un tout autre mystère : le corps d'une servante de la cour intérieure vient d'être découvert dans les eaux glacées des douves…",
                'manga_cover' => 'Les_carnets_de_lapothicaire_4.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],

            [
                'title' => 'Tome 5',
                'publication_date' => new DateTime('2021-09-02'),
                'synopsis' => "Après la dernière enquête de Mao Mao, le palais impérial s'apprête à connaître un grand changement : en effet, Aduo, la douce concubine, va être remplacée… mais ce n'est pas tout ! À la suite d'un quiproquo, l'apothicaire se voit contrainte de quitter la cour intérieure, pour le plus grand malheur de Jinshi. Au désespoir, le fonctionnaire se rend au banquet d'un aristocrate fortuné pour espérer se changer les idées… et se retrouve face à une Mao Mao devenue courtisane ! C'est sans la moindre hésitation qu'il achète alors la jeune fille et la prend à son service…",
                'manga_cover' => 'Les_carnets_de_lapothicaire_5.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],

            [
                'title' => 'Tome 6',
                'publication_date' => new DateTime('2021-09-04'),
                'synopsis' => "Désormais entièrement au service de Jinshi à la cour extérieure, Mao Mao se retrouve à résoudre plusieurs enquêtes : qu'il s'agisse d'un empoisonnement, d'un incendie suspect ou d'un testament indéchiffrable, rien ne semble résister à l'apothicaire ! Seulement, un nouveau défi l'attend, et pas des moindres : la voilà amenée à transformer radicalement l'apparence du jeune homme à la beauté dévastatrice. En effet, Jinshi souhaite passer pour un homme du peuple… mais dans quel but ?",
                'manga_cover' => 'Les_carnets_de_lapothicaire_6.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],

            [
                'title' => 'Tome 7',
                'publication_date' => new DateTime('2022-01-06'),
                'synopsis' => "Tandis que Mao Mao continue d'enquêter sur diverses affaires suspectes, la voilà qui finit par se demander si toutes ne seraient pas liées. En effet, quelqu'un semble agir dans le plus grand secret afin de parvenir à un but précis… Grâce à sa vivacité d'esprit, la jeune fille comprend très vite que les accidents des derniers mois étaient en réalité des crimes destinés à atteindre une personne de haut rang. Elle se rend alors sur place au péril de sa vie et réussit à sauver in extremis la cible du meurtre… qui n'était autre que Jinshi !",
                'manga_cover' => 'Les_carnets_de_lapothicaire_7.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],

            [
                'title' => 'Tome 8',
                'publication_date' => new DateTime('2022-04-07'),
                'synopsis' => "Mao Mao s'interroge sur les intentions de Lacan, qui n'a de cesse de vouloir se rapprocher d'elle malgré toutes ses rebuffades. L'apothicaire lui lance donc un défi : s'il gagne au xiangqi, elle devra le reconnaître en tant que père biologique, mais si c'est elle qui parvient à le vaincre, alors il devra acheter une des courtisanes du palais vert-de-gris ! Malheureusement pour le stratège, la jeune fille réussit à l'emporter, non sans ruse. Tandis qu'il tombe inconscient, les souvenirs de Lacan refont surface, révélant un passé douloureux aux côtés d'une mystérieuse femme à la beauté ensorcelante…",
                'manga_cover' => 'Les_carnets_de_lapothicaire_8.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],

            [
                'title' => 'Tome 9',
                'publication_date' => new DateTime('2022-07-07'),
                'synopsis' => "Après s'être lancée dans de nombreuses enquêtes et avoir sauvé un chaton qui porte désormais son nom, Mao Mao profite d'un moment d'accalmie. En effet, une caravane de marchands est de passage en ville pour proposer les plus beaux articles aux concubines comme aux dames de compagnie : vêtements, bijoux, poudres diverses, thé, épices… Seulement, rien n'échappe à l'œil acéré de la jeune fille, et plusieurs éléments attirent très vite son attention ! Même lorsque tout semble aller pour le mieux à la cour intérieure, le danger rôde…",
                'manga_cover' => 'Les_carnets_de_lapothicaire_9.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],

            [
                'title' => 'Tome 10',
                'publication_date' => new DateTime('2023-01-05'),
                'synopsis' => "Un nouveau défi attend Mao Mao : pour satisfaire l'émissaire d'un pays étranger, elle doit retrouver une danseuse à la splendeur telle qu'elle ressemblait à une déesse de la lune. Hélas, aujourd'hui, la femme en question n'est autre que la tenancière du palais vert-de-gris, dont la beauté a quelque peu fané... Heureusement, la jeune apothicaire n'est jamais à court d'idées ! Grâce à ses ressources et à son imagination, elle organise un spectacle dont les invitées d'honneur se souviendront longtemps...",
                'manga_cover' => 'Les_carnets_de_lapothicaire_10.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],

            [
                'title' => 'Tome 11',
                'publication_date' => new DateTime('2023-05-04'),
                'synopsis' => "Alors qu'elle enquêtait sur la disparition d'une servante malade, Mao Mao découvre que la dame de compagnie de Lifa, qui est également sa cousine, complotait pour espérer prendre sa place ! Une manigance aux très lourdes conséquences… Peu après, l'empereur en personne demande à la jeune apothicaire de l'accompagner au temple du choix, dans lequel il faut résoudre une énigme et emprunter le bon passage afin de prouver son statut d'héritier de la reine mère. Hélas, le souverain ne parvient pas à percer le secret des lieux… Mao Mao saura-t-elle comprendre le message qui s'y cache ?",
                'manga_cover' => 'Les_carnets_de_lapothicaire_11.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],

            [
                'title' => 'Tome 12',
                'publication_date' => new DateTime('2023-11-16'),
                'synopsis' => "Une nouvelle enquête a été confiée à Mao Mao… par l'impératrice douairière, cette fois ! En effet, la noble dame se demande si, à l'époque, elle n'aurait pas jeté un sort à son époux, décédé après avoir perdu la raison. L'apothicaire découvre alors le lourd secret de la famille impériale… Peu de temps après, elle est conviée à une étrange soirée où des jeunes filles se racontent des histoires effrayantes dans une salle à l'atmosphère sinistre… Quelle est donc l'énigme que Mao Mao est censée résoudre ? Découvrez la face cachée du lieu le plus secret de la cité impériale ! Dans ce monde de femmes régi par les hommes, Mao Mao aura besoin de toute son intelligence et de tout son savoir pour démêler les intrigues de la cour… Avec son héroi?ne hors norme et ses décors magnifiques, ce manga événement adapté d'un roman à succès a tout pour plaire ! Et vous, aurez-vous le courage de gou?ter à ses délices ?",
                'manga_cover' => 'Les_carnets_de_lapothicaire_12.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],

            [
                'title' => 'Tome 13',
                'publication_date' => new DateTime('2024-07-04'),
                'synopsis' => "Pour échapper aux tirs d'un mystérieux attaquant, Jinshi et Mao Mao sont contraints de se réfugier dans une grotte… Alors qu'ils tentent d'en sortir, une certaine proximité et un geste malheureux amènent l'apothicaire à découvrir le secret jusqu'ici bien gardé de l'eunuque. Pendant ce temps, Basen et Gaoshun s'efforcent de retrouver leur maître ainsi que son assaillant. L'enquête pourrait bien prendre un nouveau tour grâce au chien de chasse dont s'occupe Lihaku…",
                'manga_cover' => 'Les_carnets_de_lapothicaire_13.jpg',
                'average_rating' => null,
                'author_id' => 1, //Natsu Hyuuga
                'series_id' => 25 //Les carnets de l'apothicaire
            ],
        ];

        foreach ($mangasData as $data)
        {
            $manga = new Mangas();
            $manga -> setTitle($data['title']);
            $manga -> setPublicationDate($data['publication_date']);
            $manga -> setSynopsis($data['synopsis']);
            $manga -> setMangaCover($data['manga_cover']);
            $manga -> setAverageRating($data['average_rating']);

            // Récupérer l'auteur et la série via leur ID à partir des class (entity) Authors et Series
            $authors = $manager -> getRepository(Authors::class) -> find($data['author_id']);
            $series = $manager -> getRepository(Series::class) -> find($data['series_id']);


            if ($authors)
            {
                $manga -> setIdAuthor($authors);
            }

            if ($series)
            {
                $manga -> setMangaSerie($series);
            }

            $manager -> persist($manga);
        }

        //Envoi des modifications à la bdd
        $manager -> flush();
    }

    //Executer les fixtures AuthorsFixtures et SeriesFixtures avant d'executer MangasFixtures (pour que les ID author et serie existe déjà)
//    public function getDependencies()
//    {
//        // Retourne les dépendances de fixtures pour que les fixtures Authors et Series soient chargées avant Mangas
//        return [
//            AuthorsFixtures::class,
//            SeriesFixtures::class,
//        ];
//    }
}
