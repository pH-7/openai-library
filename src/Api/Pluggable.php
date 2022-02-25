<?php

namespace PH7\OpenAi\Api;

use GuzzleHttp\Client as GuzzleClient;

interface Pluggable
{
    public function getClient(): GuzzleClient;
}
