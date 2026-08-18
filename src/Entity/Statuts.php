<?php

class Statuts
{
    private ?int $id = null;
    private ?string $nomRole = null;

    public function __construct(?int $id = null, ?string $nomRole = null)
    {
        $this->id = $id;
        $this->nomRole = $nomRole;
    }

    public function getId(): ?int
    {
        return $this->id;
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
