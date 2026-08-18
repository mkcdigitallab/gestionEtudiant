<?php

class utilisateurs
{
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $telephone = null;
    private ?string $email = null;
    private ?int $role_id = null;
    private ?string $password = null;

    public function __construct(?string $nom = null, ?string $prenom = null, ?string $telephone = null, ?string $email = null, ?int $role_id = null, ?string $password = null)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->role_id = $role_id;
        $this->password = $password;
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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getRoleId(): ?int
    {
        return $this->role_id;
    }

    public function setRoleId(int $id): void
    {
        $this->role_id = $id;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}
