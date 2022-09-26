<?php

declare(strict_types=1);

namespace LVI;

final class SostituisciParole implements PassoDiTradvzione
{
    /**
     * @param array<string,string> $sostituzioni
     */
    public function __construct(private readonly array $sostituzioni)
    {
    }

    public static function predefinito(): self
    {
        return new self(include(__DIR__ . '/parole.php'));
    }

    public function tradvci(string $messaggio): string
    {
        return str_ireplace(array_keys($this->sostituzioni), array_values($this->sostituzioni), $messaggio);
    }
}
