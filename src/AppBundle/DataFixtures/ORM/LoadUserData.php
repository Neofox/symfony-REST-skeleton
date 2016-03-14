<?php
/**
 * Created by PhpStorm.
 * User: Neofox
 * Date: 11/03/2016
 * Time: 11:03
 */
namespace Fresh\ApiTestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     *
     */
    public function load(ObjectManager $manager)
    {
        $toto = new User();
        $toto->setUsername('toto');
        $toto->setPassword('toto');
        $toto->setEmail('toto@toto.org');

        $titi  = new User();
        $titi->setUsername('titi');
        $titi->setPassword('titi');
        $titi->setEmail('titi@titi.org');

        $tata  = new User();
        $tata->setUsername('tata');
        $tata->setPassword('tata');
        $tata->setEmail('tata@tata.org');

        $manager->persist($toto);
        $manager->persist($titi);
        $manager->persist($tata);

        $manager->flush();
    }

}