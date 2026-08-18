<?php

class ResponsablesService
{
    public static function fetchAll(PDO $pdo): array
    {
        $stmt = $pdo->query('SELECT * FROM responsables');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function fetchById(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare('SELECT * FROM responsables WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row === false ? null : $row;
    }

    public static function create(PDO $pdo, array $data): bool
    {
        $stmt = $pdo->prepare('INSERT INTO responsables (nom, prenom, telephone) VALUES (:nom, :prenom, :telephone)');
        return $stmt->execute([
            'nom' => $data['nom'] ?? null,
            'prenom' => $data['prenom'] ?? null,
            'telephone' => $data['telephone'] ?? null,
        ]);
    }

    public static function update(PDO $pdo, int $id, array $data): bool
    {
        $stmt = $pdo->prepare('UPDATE responsables SET nom = :nom, prenom = :prenom, telephone = :telephone WHERE id = :id');
        return $stmt->execute([
            'nom' => $data['nom'] ?? null,
            'prenom' => $data['prenom'] ?? null,
            'telephone' => $data['telephone'] ?? null,
            'id' => $id,
        ]);
    }

    public static function delete(PDO $pdo, int $id): bool
    {
        $stmt = $pdo->prepare('DELETE FROM responsables WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
