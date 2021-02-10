<?php

namespace App\DataFixtures;

use App\Entity\Tuteur;
use App\Entity\Formation;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $takwa=new Tuteur();
        $takwa->setNom('takwa');
        $takwa->setPrenom('mhadhbi');
        $takwa->setTel(12365);
        $takwa->setSpecialite('developpement');
        $nesrine=new Tuteur();
        $nesrine->setNom('nesrine');
        $nesrine->setPrenom('ben salah');
        $nesrine->setTel(12365);
        $nesrine->setSpecialite('IA');
         $manager->persist($takwa);
         $manager->persist($nesrine);
         $angular=new Formation();
         $angular->setLibelle("Angular");
         $angular->setPrix(1000);
         $angular->setTuteur($takwa);
         $ml=new Formation();
         $ml->setLibelle("machine learning");
         $ml->setPrix(900);
         $ml->setTuteur($nesrine);
         $manager->persist($angular);
         $manager->persist($ml);
             

        $manager->flush();
    }
}
