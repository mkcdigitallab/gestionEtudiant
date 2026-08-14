<?php

namespace App\Entity;

class Produit
{
    private int $id;
    private string $nom;
    private float $prix;
    private int $stock;

    public function __construct(int $id = 0, string $nom = '', float $prix = 0.0, int $stock = 0)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->stock = $stock;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function getPrix(): float
    {
        return $this->prix;
    }
    public function getStock(): int
    {
        return $this->stock;
    }
}
