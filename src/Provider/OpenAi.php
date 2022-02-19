<?php

namespace PH7\OpenAi\Provider;

use GuzzleHttp\Client as GuzzleClient;

class OpenAi implements Providable
{
    private const OPEN_AI_URL = 'https://api.openapi.com/';
    private const API_VERSION = 'v1';
    private const CONTENT_TYPE = 'application/json';
    private const GET_HTTP_METHOD = 'GET';

    public function __construct(private PrivateKey $privateKey, private GuzzleClient $client)
    {
        $this->client = new GuzzleClient(
            [
                'base_uri' => self::OPEN_AI_URL,
                'headers' => [
                    'Authorization' => sprintf('Bearer %s', $this->privateKey->getValue()),
                    'Accept' => self::CONTENT_TYPE
                ]
            ]
        );
    }

    public function getClient(): GuzzleClient
    {
        return $this->client;
    }
}
