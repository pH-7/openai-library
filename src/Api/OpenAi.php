<?php

declare(strict_types=1);

namespace PH7\OpenAi\Api;

use GuzzleHttp\Client as GuzzleClient;

class OpenAi implements Pluggable
{
    public function __construct(private PrivateKey $privateKey)
    {
        $this->client = new GuzzleClient(
            [
                'base_uri' => OpenAiApi::URL->value . OpenAiApi::VERSION->value,
                'headers' => [
                    'Authorization' => sprintf('Bearer %s', $this->privateKey->getValue()),
                    'Accept' => OpenAiApi::CONTENT_TYPE->value
                ]
            ]
        );
    }

    public function getClient(): GuzzleClient
    {
        return $this->client;
    }
}
