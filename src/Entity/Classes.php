<?php

class Classes
{
    private ?string $nomClasse = null;

    public function __construct(?string $nomClasse = null)
    {
        $this->nomClasse = $nomClasse;
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
