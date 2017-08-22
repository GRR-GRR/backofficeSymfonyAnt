<?php

namespace HomeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RandomMessagesControllerTest extends WebTestCase
{
    public function testMessage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'hello');
    }

}
