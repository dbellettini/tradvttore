<?php

declare(strict_types=1);

namespace LVI;

use Romans\Filter\IntToRoman;

class NvmeriRomani implements PassoDiTradvzione
{
    private IntToRoman $filter;

    public function __construct()
    {
        $this->filter = new IntToRoman();
    }

    public function tradvci(string $messaggio): string
    {
        return $this->filter->filter((int) $messaggio);
    }
}