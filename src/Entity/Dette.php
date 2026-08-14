<?php

namespace App\Entity;

class Dette
{
    private int $id;
    private int $clientId;
    private float $montant;

    public function __construct(int $id = 0, int $clientId = 0, float $montant = 0.0)
    {
        $this->id = $id;
        $this->clientId = $clientId;
        $this->montant = $montant;
    }
}
