<?php

class ElevesService
{
    public static function fetchAll(PDO $pdo): array
    {
        $stmt = $pdo->query('SELECT * FROM eleves');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function fetchById(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare('SELECT * FROM eleves WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row === false ? null : $row;
    }

    public static function create(PDO $pdo, array $data): bool
    {
        $stmt = $pdo->prepare('INSERT INTO eleves (nom, prenom, matricule, etablissement, responsble_id, statut_id, classe_id) VALUES (:nom, :prenom, :matricule, :etablissement, :responsble_id, :statut_id, :classe_id)');
        return $stmt->execute([
            'nom' => $data['nom'] ?? null,
            'prenom' => $data['prenom'] ?? null,
            'matricule' => $data['matricule'] ?? null,
            'etablissement' => $data['etablissement'] ?? null,
            'responsble_id' => $data['responsable_id'] ?? null,
            'statut_id' => $data['statut_id'] ?? null,
            'classe_id' => $data['classe_id'] ?? null,
        ]);
    }

    public static function update(PDO $pdo, int $id, array $data): bool
    {
        $stmt = $pdo->prepare('UPDATE eleves SET nom = :nom, prenom = :prenom, matricule = :matricule, etablissement = :etablissement, responsble_id = :responsble_id, statut_id = :statut_id, classe_id = :classe_id WHERE id = :id');
        return $stmt->execute([
            'nom' => $data['nom'] ?? null,
            'prenom' => $data['prenom'] ?? null,
            'matricule' => $data['matricule'] ?? null,
            'etablissement' => $data['etablissement'] ?? null,
            'responsble_id' => $data['responsable_id'] ?? null,
            'statut_id' => $data['statut_id'] ?? null,
            'classe_id' => $data['classe_id'] ?? null,
            'id' => $id,
        ]);
    }

    public static function delete(PDO $pdo, int $id): bool
    {
        $stmt = $pdo->prepare('DELETE FROM eleves WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
