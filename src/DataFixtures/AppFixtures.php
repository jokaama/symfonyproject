<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for ($i = 0; $i <= 10; $i++) {
            $onePost = new Post();
            $onePost->setTitle($faker->sentence($nbWords = 6, $variableNbWords = true));
            $onePost->setDescription($faker->paragraph($nbSentences = 3, $variableNbSentences = true));
            $onePost->setYearEvent($faker->year());
            $onePost->setCategorySport($faker->word());
            $onePost->setDatepost($faker->dateTimeBetween('-1 month', '-1 week'));
            $onePost->setUrlimage($faker->imageUrl());
            $manager->persist($onePost);
        }

        $manager->flush();
    }
}
