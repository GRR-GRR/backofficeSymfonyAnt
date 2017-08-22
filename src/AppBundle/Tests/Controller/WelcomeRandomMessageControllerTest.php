<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WelcomeRandomMessageControllerTest extends WebTestCase
{
    public function testRadommessage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/RadomMessage');
    }

}
