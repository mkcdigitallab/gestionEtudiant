<?php

namespace App\Entity;

class LigneVente
{
    private int $id;
    private int $venteId;
    private int $produitId;
    private int $quantite;

    public function __construct(int $id = 0, int $venteId = 0, int $produitId = 0, int $quantite = 0)
    {
        $this->id = $id;
        $this->venteId = $venteId;
        $this->produitId = $produitId;
        $this->quantite = $quantite;
    }
}
