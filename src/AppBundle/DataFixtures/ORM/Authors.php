<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Authors extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 5; $i++) {
            $author = new Author();
            $author->setName('Author '.$i);
            $author->setPseudo(("Pseudo " . $i));
            $manager->persist($author);
        }

        $manager->flush();
    }
}