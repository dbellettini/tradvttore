<?php

namespace LVI\Tests;

use LVI\NoSchwa;
use PHPUnit\Framework\TestCase;

class NoSchwaTest extends TestCase
{
    private NoSchwa $noSchwa;
    protected function setUp(): void
    {
        $this->noSchwa = new NoSchwa();
    }

    public function testFraseNormale(): void
    {
        $this->assertSame($testo = 'Ciao a tutti!', $this->noSchwa->tradvci($testo));
    }

    public function testSchwa(): void
    {
        $this->assertSame("No all'ideologia Gender!", $this->noSchwa->tradvci('Ciao a tuttə!'));
    }
}