<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ArticleFixtures extends Fixture
{
        public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i=0; $i < 15; $i++) { 
            $product = new Article();
            $product->setTitle($faker->sentence);
            $product->setContent($faker->paragraph);
            $manager->persist($product);
        }
        $manager->flush();
    }
}
