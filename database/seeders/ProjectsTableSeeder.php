<?php

namespace Database\Seeders;
use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Project::create([
        'name'=>'Un duplex atypique de 80 m2',
        'budget'=>'50000',
        'duration'=>'12',
        'area'=>'80',
        'city'=>'Paris',
        'professional_id'=> 3,
        'attribute_id'=> 1,
        'type_id'=> 1,
        'description'=>"Ce duplex atypique et très lumineux, entre appartement et maison, présente un bel espace de vie.

Sa configuration offre des fonctions bien distinctes. Ici, on retrouve une belle entrée d'une teinte bleu nuit, comme un cocon pour l'isoler du reste de l'appartement avec ses portes qui se fondent dans les murs. Rappel de l'entrée, la couleur des murs des toilettes apporte élégance et se marie à la perfection avec le papier peint aux portraits abstraits, créant une sensation d'intimité.

L'escalier accolé au mur dispose d'un rangement sur mesure qui a été créé sous celui-ci pour y ranger manteaux, chaussures, trottinettes et vide-poches. Un autre mobilier sur-mesure avec des caissons ouverts et fermés a été conçu pour intégrer la télé.

La cuisine noire qui était semi-ouverte l'est à présent entièrement. L'espace repas a été installé à proximité pour plus de praticité mais également pour créer un espace où toute la famille peut se retrouver. A présent, c'est une cuisine beige rosé qui a pris place, elle apporte convivialité et chaleur à la pièce.

Pour délimiter les différentes zones de ce duplex sans perdre de place, nous avons utilisé un tapis, des panneaux de papier-peint et des fauteuils pour l'espace salon.

Confortable et cocooning, la chambre parentale s'offre désormais une salle de bain délimitée par une verrière. La pièce bénéficie ainsi d'une belle luminosité tout en offrant une sensation d'intimité. Dans le coin nuit, un papier-peint encadré par des chants plats noirs nous offre une tête de lit comme un tableau . Le mur, peint en bleu nuit, rend hommage à ce magnifique papier peint floral. Le tout apporte beaucoup de caractère à cette chambre et de la profondeur à la pièce.

Pour le coin nuit à l'étage, les deux jeunes filles bénéficient désormais chacune leur chambre. L'une avec un papier peint granite pour un design brut et coloré et l'autre avec un soubassement bleu vif, chaud et intemporel pour délimiter le coin nuit et le coin bureau.

Une ambiance apaisante, relaxante et douce avec ses teintes beiges rosées et bleues, un cocon familial, ouvert et décontracté, un joli choix de matières et un équilibre des couleurs. Une nouvelle ambiance pour une nouvelle vie !

(Travaux prévus fin février 2022)",
      ]);
      Project::create([
        'name'=>'Molitor',
        'budget'=>'50000',
        'duration'=>'4',
        'area'=>'41',
        'city'=>'Paris',
        'professional_id'=> 2,
        'attribute_id'=> 2,
        'type_id'=> 2,
        'description'=>"Un exploit pour ce beau pied à terre parisien qui permet aux utilisateurs de se sentir à l'aise dans ce 40m2/. En effet, arkala a conçu un projet qui privilégie un espace de vie confortable, gardant 15 m2 pour toutes les fonctions 'techniques' : cuisine, salle de bain et chambre. Pour cette dernière arkala a pensé à une cabine de bateau très cosy sans rien sacrifier aux dimensions du lit qui fait bien 2x1,60 m. Pour la pièce de reception un beau papier peint panoramique contribue à agrandir l'espace ! ",
      ]);
      Project::create([
        'name'=>'Junot Paris 18',
        'budget'=>'65000',
        'duration'=>'3',
        'area'=>'48',
        'city'=>'Paris',
        'professional_id'=> 1,
        'attribute_id'=> 1,
        'type_id'=> 3,
        'description'=>"Un appartement d'origine que nous avons inversé: la chambre à la place du séjour, la cuisine et le séjour à la place de la chambre et de la salle de bain d'origine, la chambre d'enfant à la place de la cuisine. une 'ligne' noire contenant les toilettes, la salle de bain, des armoires et enfin la nouvelle cuisine, divise et redistribue les différents espaces tout en laissant imaginer, sur le plafond, l'ancienne distribution des pièces.",
      ]);
      Project::create([
        'name'=>'Poissonnière Paris 10',
        'budget'=>'67000',
        'duration'=>'3',
        'area'=>'61',
        'city'=>'Paris',
        'professional_id'=> 1,
        'attribute_id'=> 1,
        'type_id'=> 3,
        'description'=>"Un projet que se dilate... comme par magie.
        nous avons utilisé un obstacle ( le mur porteur entre le séjour et les chambres d'origine, comme un atout pour 'dilater' l'espace de vie.",
      ]);
    }
}
