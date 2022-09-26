<?php

declare(strict_types=1);

namespace LVI\Tests;

use LVI\NvmeriRomani;
use PHPUnit\Framework\TestCase;

class NvmeriRomaniTest extends TestCase
{
    private NvmeriRomani $nr;

    protected function setUp(): void
    {
        $this->nr = new NvmeriRomani();
    }

    public function testCinqvntasei(): void
    {
        $this->assertSame('LVI', $this->nr->tradvci('56'));
    }

    public function testIlRestoVienePreservato(): void
    {
        $this->assertSame('salute a LVI', $this->nr->tradvci('salute a 56'));
    }
}