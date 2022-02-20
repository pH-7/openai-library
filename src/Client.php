<?php

declare(strict_types=1);

namespace PH7\OpenAi;

use GuzzleHttp\Exception\ConnectException;
use PH7\OpenAi\Api\Pluggable;
use Psr\Http\Message\ResponseInterface;

class Client
{
    public function __construct(protected Pluggable $api)
    {
    }

    /**
     * @throws ConnectException
     */
    public function search(string $engine): ResponseInterface
    {
        return $this->api->getClient()->request(
            'GET',
            sprintf('/engines/%s/search', $engine)
        );
    }

    /**
     * @throws ConnectException
     */
    public function answers(): ResponseInterface
    {
        return $this->api->getClient()->request(
            'POST',
            '/answers'
        );
    }

    /**
     * @throws ConnectException
     */
    public function classifications(): ResponseInterface
    {
        return $this->api->getClient()->request(
            'POST',
            '/classifications'
        );
    }
}
