<?php
namespace Database\Seeders;

use App\Models\Professional;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Professional::create([
        'name'=>'Nicola',
        'lastname'=>'Casini',
        'email'=>'ncasini@gmail.com',
        'password'=>bcrypt('12345'),
        'phone'=>'0645670987',
        'city'=>'Paris',
        'company'=>'NC Architecture',
        'experience'=>'25',
        'works'=>'70',
        'description'=>"NC-Architecture est une agence qui s'inscrit dans une ligne contemporaine. Créée après plusieurs années d'expérience, elle est le fruit d'un métissage d'influences entre l'Italie, la France, l'Espagne, les États-Unis et l'Amérique Latine. Nicola Casini est né en 1973 à Florence en Italie. Il vit et travaille comme architecte à Paris depuis 1997. Il s'est d'abord formé auprès de l'Ecole d'Art de Florence et ensuite à l'Université d'Architecture de la même ville. En 1997, il intègre l'Ecole d'Architecture de Paris La Villette, où en janvier 2000 il se diplôme comme Architecte DPLG. Après avoir travaillé à Cuba au Mexique en Argentine, en Italie et en France comme chef de projet dans divers cabinets d'architectes, en 2005 il ouvre sa propre agence à Paris.",
        //'profession_id' => 1,
      ]);
      Professional::create([
        'name'=>'Angélique',
        'lastname'=>'Dutoit',
        'email'=>'adutoit@gmail.com',
        'password'=>bcrypt('12345'),
        'phone'=>'0645670986',
        'city'=>'Paris',
        'company'=>'Arkala',
        'experience'=>'6',
        'works'=>'42',
        'description'=>"Une reconversion professionnelle réussie après des années dans la conservation des oeuvres d'art : Angélique est à votre écoute pour tous vos projets d'aménagements intérieurs. A votre écoute, elle a le souci de l'esthétique et de l'adéquation de votre désir de changement et d'aménagement avec le projet qu'elle conçoit sur mesure ! Accordez lui votre confiance, vous ne serez pas déçu...",
        //'profession_id' => 1,
      ]);
      Professional::create([
        'name'=>'Sandra',
        'lastname'=>'Bouzid',
        'email'=>'sbouzid@gmail.com',
        'password'=>bcrypt('12345'),
        'phone'=>'0645670985',
        'city'=>'Asnières-sur-Seine',
        'company'=>'Agence Studio B',
        'experience'=>'2',
        'works'=>'7',
        'description'=>"Je suis Décoratrice d'intérieur installée à Asnières-sur-Seine. Grâce à un réseau d'artisans de confiance, je peux vous proposer mes services de conseil en décoration sur toute l'Ile-de-France, mais aussi partout en France à distance, aux particuliers et aux professionnels. Suite à une reconversion professionnelle, j'ai créé mon entreprise Studio B. Passionnée de décoration d'intérieur depuis de nombreuses années, ce que je recherche avant tout c'est de créer des atmosphères qui ressemblent à mes clients. J'aime jouer avec les lumières, les matières, les matériaux, les couleurs, raconter l'histoire d'un objet. Je trouve l'inspiration de la décoration en ouvrant les yeux et en admirant la beauté du monde : voilà ce qui m'anime ! Je suis à l'écoute de mes clients. En tant que Décoratrice d'intérieur, avant de vous donner mes conseils de professionnelle, j'analyse le lieu pour y découvrir les secrets qui reflètent votre personnalité, le tout pour une décoration personnalisée.",
        //'profession_id' => 4,
      ]);
    }
}
