<?php

namespace App\DataFixtures;

use App\Entity\Proposal;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class ProposalFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create();

        $author= new User();
        $author->setEmail($faker->email );

        $password = $this->encoder->encodePassword($author, '1234');
        $author->setPassword($password);

        $author->setUsername($faker->userName);

        $manager->persist($author);

        for( $i = 0; $i < 10; $i++){
            $faq = (new Proposal())
                ->setContent($faker->sentence)
                ->setMark(0)
                ->setAuthor($author);
            $manager->persist($faq);

        }
        $manager->flush();
    }
}
