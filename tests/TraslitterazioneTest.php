<?php

declare(strict_types=1);

namespace LVI\Tests;

use LVI\Traslitterazione;
use PHPUnit\Framework\TestCase;

class TraslitterazioneTest extends TestCase
{
    private Traslitterazione $traslitterazione;

    protected function setUp(): void
    {
        $this->traslitterazione = new Traslitterazione();
    }

    public function testTestSemplice(): void
    {
        $this->assertSame(
            "QVANDO C'ERA LVI I TRENI ARRIVAVANO IN ORARIO",
            $this->traslitterazione->tradvci("Quando c'era lui i treni arrivavano in orario")
        );
    }
}
