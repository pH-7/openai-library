<?php

declare(strict_types=1);

namespace PH7\OpenAi;

use PH7\OpenAi\Api\Pluggable;
use Psr\Http\Message\ResponseInterface;

class Client
{
    public function __construct(protected Pluggable $api)
    {
    }

    public function search(string $engine): ResponseInterface
    {
        return $this->api->getClient()->request(
            'POST',
            sprintf('/engines/%s/search', $engine)
        );
    }

    public function classifications(): ResponseInterface
    {
        return $this->api->getClient()->request(
            'POST',
            '/classifications'
        );
    }
}
