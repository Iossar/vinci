<?php

namespace app\controllers;

use Symfony\Component\HttpClient\HttpClient;

class GitController
{
    private $client;

    public function __construct()
    {
        $this->client = HttpClient::create();
    }

    public function getUsers()
    {
        $method = 'users';
        return $this->request($method);
    }

    private function request($method): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.github.com/' . $method
        );

        return $response->toArray();
    }
}