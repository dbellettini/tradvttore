<?php

declare(strict_types=1);

namespace LVI;

use Transliterator;

class Traslitterazione implements PassoDiTradvzione
{
    private Transliterator $transliterator;

    public function __construct()
    {
        $this->transliterator = Transliterator::create('Latin-ASCII; Upper()', Transliterator::FORWARD);
    }

    public function tradvci(string $messaggio): string
    {
        return str_replace('U','V', $this->transliterator->transliterate($messaggio));
    }
}