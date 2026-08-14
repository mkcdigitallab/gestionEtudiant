<?php

namespace App\Entity;

class Client
{
    private int $id;
    private string $nom;

    public function __construct(int $id = 0, string $nom = '')
    {
        $this->id = $id;
        $this->nom = $nom;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
}
