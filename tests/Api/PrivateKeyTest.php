<?php

declare(strict_types=1);

namespace PH7\OpenAi\Tests\Api;

use InvalidArgumentException;
use PH7\OpenAi\Api\PrivateKey;
use PHPUnit\Framework\TestCase;

final class PrivateKeyTest extends TestCase
{
    public function testGetPrivateKey(): void
    {
        $key = '29383JHJDHDJ293(*#(@';

        $privateKey = new PrivateKey($key);
        $this->assertSame($key, $privateKey->getValue());
    }

    public function testValidPrivateKeyWithSpaces(): void
    {
        $privateKey = new PrivateKey(' 123 ');
        $this->assertSame('123', $privateKey->getValue());
    }

    public function testInvalidPrivateKey(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new PrivateKey('');
    }
}
