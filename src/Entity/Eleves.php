<?php

class Eleves
{
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $matricule = null;
    private ?string $etablissement = null;
    private ?int $responsable_id = null;
    private ?int $statut_id = null;
    private ?int $classe_id = null;

    public function __construct(?string $nom = null, ?string $prenom = null, ?string $matricule = null, ?string $etablissement = null, ?int $responsable_id = null, ?int $statut_id = null, ?int $classe_id = null)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
        $this->etablissement = $etablissement;
        $this->responsable_id = $responsable_id;
        $this->statut_id = $statut_id;
        $this->classe_id = $classe_id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): void
    {
        $this->matricule = $matricule;
    }

    public function getEtablissement(): ?string
    {
        return $this->etablissement;
    }

    public function setEtablissement(string $etablissement): void
    {
        $this->etablissement = $etablissement;
    }

    public function getResponsableId(): ?int
    {
        return $this->responsable_id;
    }

    public function setResponsableId(int $id): void
    {
        $this->responsable_id = $id;
    }

    public function getStatutId(): ?int
    {
        return $this->statut_id;
    }

    public function setStatutId(int $id): void
    {
        $this->statut_id = $id;
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
