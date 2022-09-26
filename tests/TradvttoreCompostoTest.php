<?php

declare(strict_types=1);

namespace LVI\Tests;

use LVI\PassoDiTradvzione;
use LVI\TradvttoreComposto;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class TradvttoreCompostoTest extends TestCase
{
    private PassoDiTradvzione&MockObject $passo1, $passo2;
    private TradvttoreComposto $tradvttore;

    protected function setUp(): void
    {
        $this->passo1 = $this->createMock(PassoDiTradvzione::class);
        $this->passo2 = $this->createMock(PassoDiTradvzione::class);
        $this->tradvttore = new TradvttoreComposto($this->passo1, $this->passo2);
    }

    public function testComposizione(): void
    {
        $this
            ->passo1
            ->expects($this->once())
            ->method('tradvci')
            ->with('Tizio')
            ->willReturn('Caio');

        $this
            ->passo2
            ->expects($this->once())
            ->method('tradvci')
            ->with('Caio')
            ->willReturn('Sempronio');

        $this->assertSame('Sempronio', $this->tradvttore->tradvci('Tizio'));
    }
}