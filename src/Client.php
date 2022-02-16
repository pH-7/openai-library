<?php

declare(strict_types=1);

namespace PH7\OpenAi;

use PH7\OpenAi\Provider\Providable;

class Client
{

    public function __construct(private Providable $provider)
    {
    }

    public function search()
    {
        $this->provider->
    }
}
