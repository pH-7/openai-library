<?php

namespace PH7\OpenAi\Provider;

use GuzzleHttp\Client as GuzzleClient;

class OpenAi implements Providable
{
    public function __construct(private PrivateKey $privateKey, private GuzzleClient $client)
    {
        $this->client = new GuzzleClient(
            [
                'base_uri' => OpenAiApi::URL . OpenAiApi::VERSION,
                'headers' => [
                    'Authorization' => sprintf('Bearer %s', $this->privateKey->getValue()),
                    'Accept' => OpenAiApi::CONTENT_TYPE
                ]
            ]
        );
    }

    public function getClient(): GuzzleClient
    {
        return $this->client;
    }
}
