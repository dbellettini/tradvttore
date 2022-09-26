<?php

declare(strict_types=1);

namespace LVI;

class Fabbrica
{
    public function costrvisci(): PassoDiTradvzione
    {
        return new TradvttoreComposto(
            new NvmeriRomani(),
            new Traslitterazione()
        );
    }
}
