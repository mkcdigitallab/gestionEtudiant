<?php

class AnneeScolaires
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $date = null;
    private ?int $actif = null;

    public function __construct(?int $id = null, ?string $nom = null, ?string $date = null, ?int $actif = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->date = $date;
        $this->actif = $actif;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getActif(): ?int
    {
        return $this->actif;
    }

    public function setActif(int $actif): void
    {
        $this->actif = $actif;
    }
}
