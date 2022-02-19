<?php

namespace PH7\OpenAi\Api;

enum OpenAiApi: string
{
    case URL = 'https://api.openapi.com/';
    case VERSION = 'v1';
    case CONTENT_TYPE = 'application/json';
}
