<?php

namespace App\Entity;

class Vente
{
    private int $id;
    private int $clientId;
    private float $total;

    public function __construct(int $id = 0, int $clientId = 0, float $total = 0.0)
    {
        $this->id = $id;
        $this->clientId = $clientId;
        $this->total = $total;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getClientId(): int
    {
        return $this->clientId;
    }
    public function getTotal(): float
    {
        return $this->total;
    }
}
