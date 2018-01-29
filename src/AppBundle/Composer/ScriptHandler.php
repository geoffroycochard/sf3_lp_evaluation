<?php
namespace AppBundle\Composer;

use Doctrine\Common\DataFixtures\Loader;
use AppBundle\DataFixtures\ORM\LoadFixtures;
use Composer\Script\Event;

class ScriptHandler
{

    public static function loadOrganization(Event $event)
    {



        $loader = new Loader();
        $loader->addFixture(new LoadFixtures());
        $event->getIO()->write('Load Organization');

    }

}