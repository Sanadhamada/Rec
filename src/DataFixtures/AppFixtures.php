<?php

namespace App\DataFixtures;


use App\Entity\Condidate;
use Doctrine\Bundle\FixturesBundle\Fixture;

use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Generator;



class AppFixtures extends Fixture
{
 
  private  $faker;
  public function __construct()
  {
    $this->faker = Factory::create('fr_FR');
  }
    public function load(ObjectManager $manager): void
    {
     for ($i = 0;$i<50 ;$i++){
      $condidate = new Condidate();
      $condidate ->setUsername($this->faker->word())
                 ->setFullname('Condidate ' . $i)
                 ->setEmail('sanad@gmail.com' . $i)
                 ->setProfile('condidate' . $i);
                
        $manager ->persist($condidate);
     }
        $manager->flush();
    }

  
 }


