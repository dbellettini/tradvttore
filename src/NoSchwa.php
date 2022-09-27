<?php

declare(strict_types=1);

namespace LVI;

class NoSchwa implements PassoDiTradvzione
{
    public function tradvci(string $messaggio): string
    {
        if (str_contains($messaggio, 'ə')) {
            return "No all'ideologia di genere!";
        }

        return $messaggio;
    }
}
