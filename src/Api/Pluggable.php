<?php

namespace PH7\OpenAi\Api;

use Psr\Http\Client\ClientInterface;

interface Pluggable
{
    public function getClient(): ClientInterface;
}
