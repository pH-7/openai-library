<?php

declare(strict_types=1);

namespace PH7\OpenAi\Provider;

use InvalidArgumentException;

class PrivateKey
{
    public function __construct(private string $privateKey)
    {
        if (!$this->isValid($this->privateKey)) {
            throw new InvalidArgumentException(
                sprintf('The key "%s" is invalid.', $this->privateKey)
            );
        }
    }

    private function isValid(?string $key): bool
    {
        return !empty($key) && is_string($key);
    }

    public function getValue(): string
    {
        return $this->privateKey;
    }
}
