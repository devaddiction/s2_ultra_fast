<?php
namespace Alvarez\DevAddictionBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/adictos');
        $this->assertTrue($crawler->filter('html:contains'.
            '("Welcome to DevAddictionBundle Default Controller!")')->count() > 0);
    }
}
