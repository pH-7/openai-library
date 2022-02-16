<?php

namespace PH7\OpenAi\Provider;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class OpenAi implements Providable
{
    private const OPEN_AI_URL = 'https://api.openapi.com/';
    private const API_VERSION = 'v1';
    private const CONTENT_TYPE = 'application/json';

    public function __construct(private string $privateKey, private Client $client)
    {
        $this->client = new Client();
    }

    /**
     * @throws GuzzleException
     */
    private function get(): ResponseInterface
    {
        $headers = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->privateKey,
                'Accept' => self::CONTENT_TYPE
            ]
        ];

        return $this->client->request('GET', self::OPEN_AI_URL . self::API_VERSION, $headers);
    }
}
