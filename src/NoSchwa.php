<?php

namespace LVI;

class NoSchwa implements PassoDiTradvzione
{
    public function tradvci(string $messaggio): string
    {
        if (str_contains($messaggio, 'ə')) {
            return "No all'ideologia Gender!";
        }

        return $messaggio;
    }
}