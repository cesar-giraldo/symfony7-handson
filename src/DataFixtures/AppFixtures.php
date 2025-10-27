<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\MicroPost;
use DateTime;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $micropost1 = new MicroPost();
        $micropost1->setTitle('Welcome to Colombia');
        $micropost1->setText('This is my first micro post!');
        $micropost1->setCreatedAt(new DateTime());
        $manager->persist($micropost1);

        $micropost2 = new MicroPost();
        $micropost2->setTitle('Welcome to USA');
        $micropost2->setText('This is my second micro post!');
        $micropost2->setCreatedAt(new DateTime());
        $manager->persist($micropost2);

        $micropost3 = new MicroPost();
        $micropost3->setTitle('Welcome to Canada');
        $micropost3->setText('This is my third micro post!');
        $micropost3->setCreatedAt(new DateTime());
        $manager->persist($micropost3);

        $manager->flush();
    }
}
