<?php

declare(strict_types=1);

namespace LVI\Tests;

use LVI\Fabbrica;
use LVI\PassoDiTradvzione;
use PHPUnit\Framework\TestCase;

class FabbricaTest extends TestCase
{
    private Fabbrica $fabbrica;
    private PassoDiTradvzione $tradvttore;

    protected function setUp(): void
    {
        $this->fabbrica = new Fabbrica();
        $this->tradvttore = $this->fabbrica->costrvisci();
    }

    public function testSemplice(): void
    {
        $this->assertSame(
            "QVANDO C'ERA LVI I TRENI ARRIVAVANO IN ORARIO",
            $this->tradvttore->tradvci("Quando c'era 56 i treni arrivavano in orario")
        );
    }
}
