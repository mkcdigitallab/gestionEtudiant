<?php

namespace App\Entity;

class Approvisionnement
{
    private int $id;
    private int $produitId;
    private int $quantite;

    public function __construct(int $id = 0, int $produitId = 0, int $quantite = 0)
    {
        $this->id = $id;
        $this->produitId = $produitId;
        $this->quantite = $quantite;
    }
}
