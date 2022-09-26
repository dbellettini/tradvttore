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
        return preg_replace_callback(
            '/\d+/',
            fn(array $matches) => $this->filter->filter((int) $matches[0]),
            $messaggio
        );
    }
}
