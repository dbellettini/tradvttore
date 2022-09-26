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

    public function testSchwa(): void
    {
        $this->assertSame("NO ALL'IDEOLOGIA GENDER!", $this->tradvttore->tradvci('Ciao a tuttə!'));
    }

    public function testMisto(): void
    {
        $this->assertSame(
            'HO AVVTO VN RETROLAMPO DEL MCMXXX',
            $this->tradvttore->tradvci('Ho avuto un flashback del 1930')
        );
    }
}
