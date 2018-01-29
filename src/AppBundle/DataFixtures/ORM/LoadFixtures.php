<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Organization;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $org1 = new Organization();
        $org1->setName('Market Stub');
        $org2 = new Organization();
        $org2->setName('Live sound place');
        $org3 = new Organization();
        $org3->setName('Hifi low');

        $manager->persist($org1);
        $manager->persist($org2);
        $manager->persist($org3);
        $manager->flush();
    }
}