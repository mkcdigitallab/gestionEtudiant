<?php

class Classes
{
    private ?int $id = null;
    private ?string $nomClasse = null;

    public function __construct(?int $id = null, ?string $nomClasse = null)
    {
        $this->id = $id;
        $this->nomClasse = $nomClasse;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomClasse(): ?string
    {
        return $this->nomClasse;
    }

    public function setNomClasse(string $nomClasse): void
    {
        $this->nomClasse = $nomClasse;
    }
}
