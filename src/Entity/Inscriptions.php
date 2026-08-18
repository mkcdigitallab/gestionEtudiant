<?php

class Inscriptions
{
    private ?int $annee_id = null;
    private ?int $eleve_id = null;
    private ?int $classe_id = null;

    public function __construct(?int $annee_id = null, ?int $eleve_id = null, ?int $classe_id = null)
    {
        $this->annee_id = $annee_id;
        $this->eleve_id = $eleve_id;
        $this->classe_id = $classe_id;
    }

    public function getAnneeId(): ?int
    {
        return $this->annee_id;
    }

    public function setAnneeId(int $id): void
    {
        $this->annee_id = $id;
    }

    public function getEleveId(): ?int
    {
        return $this->eleve_id;
    }

    public function setEleveId(int $id): void
    {
        $this->eleve_id = $id;
    }

    public function getClasseId(): ?int
    {
        return $this->classe_id;
    }

    public function setClasseId(int $id): void
    {
        $this->classe_id = $id;
    }
}
