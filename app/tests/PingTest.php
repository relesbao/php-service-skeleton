<?php

use Silex\WebTestCase;

class PingTest extends WebTestCase
{

    public function createApplication()
    {
        $app = require __DIR__.'/../config/test.php';
        require __DIR__.'/../config/routes.php';
        return $app;
    }

    public function testPing()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/ping');
        $this->assertTrue($client->getResponse()->isOk());
        $this->assertEquals($client->getResponse()->getContent(), 'OK');
    }
}