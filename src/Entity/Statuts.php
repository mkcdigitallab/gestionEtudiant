<?php

class Statuts
{
    private ?string $nomRole = null;

    public function __construct(?string $nomRole = null)
    {
        $this->nomRole = $nomRole;
    }

    public function getNomRole(): ?string
    {
        return $this->nomRole;
    }

    public function setNomRole(string $nomRole): void
    {
        $this->nomRole = $nomRole;
    }
}
