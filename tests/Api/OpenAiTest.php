<?php

declare(strict_types=1);

namespace PH7\OpenAi\Tests\Api;

use GuzzleHttp\Client as GuzzleClient;
use PH7\OpenAi\Api\OpenAi;
use Phake;
use Phake\IMock;
use PHPUnit\Framework\TestCase;

final class OpenAiTest extends TestCase
{
    private OpenAi|IMock $openAi;

    protected function setUp(): void
    {
        parent::setUp();

        $this->openAi = Phake::mock(OpenAi::class);
    }

    public function testGetClientInstance(): void
    {
        $this->assertInstanceOf(GuzzleClient::class, $this->openAi->getClient());
    }
}
