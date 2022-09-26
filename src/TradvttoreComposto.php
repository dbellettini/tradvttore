<?php

declare(strict_types=1);

namespace LVI;

class TradvttoreComposto implements PassoDiTradvzione
{
    /**
     * @var PassoDiTradvzione[]
     */
    private array $passi;

    public function __construct(PassoDiTradvzione ...$passi)
    {
        $this->passi = $passi;
    }

    public function tradvci(string $messaggio): string
    {
        return array_reduce($this->passi, function (string $messaggio, PassoDiTradvzione $passoDiTradvzione) {
            return $passoDiTradvzione->tradvci($messaggio);
        }, $messaggio);
    }
}