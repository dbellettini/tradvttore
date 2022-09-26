<?php

declare(strict_types=1);

namespace LVI\Tests;

use LVI\SostituisciParole;
use PHPUnit\Framework\TestCase;

class SostituisciParoleTest extends TestCase
{
    public function testSostituzione(): void
    {
        $sp = new SostituisciParole(['flashback' => 'retrolampo']);

        $this->assertSame('Ho avuto un retrolampo!', $sp->tradvci('Ho avuto un flashback!'));
    }

    public function testSostituzioneConMaiuscole(): void
    {
        $sp = new SostituisciParole(['flashback' => 'retrolampo']);

        $this->assertSame('Ho avuto un retrolampo!', $sp->tradvci('Ho avuto un Flashback!'));
    }
}
