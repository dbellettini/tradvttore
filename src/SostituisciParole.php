<?php

declare(strict_types=1);

namespace LVI;

final class SostituisciParole implements PassoDiTradvzione
{
    /**
     * @param array<string,string> $sostitvzioni
     */
    public function __construct(private readonly array $sostitvzioni)
    {
    }

    public static function predefinito(): self
    {
        return new self(include(__DIR__ . '/parole.php'));
    }

    public function tradvci(string $messaggio): string
    {
        return str_ireplace(array_keys($this->sostitvzioni), array_values($this->sostitvzioni), $messaggio);
    }
}
