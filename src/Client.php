<?php

declare(strict_types=1);

namespace PH7\OpenAi;

use PH7\OpenAi\Provider\Providable;
use Psr\Http\Message\ResponseInterface;

class Client
{
    public function __construct(protected Providable $provider)
    {
    }

    public function search(string $engine): ResponseInterface
    {
        return $this->provider->getClient()->request(
            'POST',
            sprintf('/engines/%s/search', $engine)
        );
    }

    public function classifications(): ResponseInterface
    {
        return $this->provider->getClient()->request(
            'POST',
            '/classifications'
        );
    }
}
