<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 20; $i++) { 
            $article = new Article();
            $date = new \DateTime(date("Y-m-d",mt_rand(strtotime('2015-01-01'),strtotime('2021-07-01'))));
            $article->setTitle('Article' . $i);
            $article->setPicture('https://www.publicdomainpictures.net/pictures/320000/velka/background-image.png');
            $article->setCreationDate($date);
            $article->setDescription('Lorem ipsum etc etc');
            $manager->persist($article);
        }

        $manager->flush();
    }
}
