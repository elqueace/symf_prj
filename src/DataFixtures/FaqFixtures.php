<?php

namespace App\DataFixtures;

use App\Entity\Faq;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class FaqFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create();

        for( $i = 0; $i < 10; $i++){
            $faq = (new Faq())
                ->setAnswer($faker->sentence)
                ->setQuestion($faker->sentence);
            $manager->persist($faq);

        }
        $manager->flush();
    }
}
