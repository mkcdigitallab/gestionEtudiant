<?php

class AnneeScolairesService
{
    public static function fetchAll(PDO $pdo): array
    {
        $stmt = $pdo->query('SELECT * FROM anneeScolaires');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function fetchById(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare('SELECT * FROM anneeScolaires WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row === false ? null : $row;
    }

    public static function create(PDO $pdo, array $data): bool
    {
        $stmt = $pdo->prepare('INSERT INTO anneeScolaires (nom, date, actif) VALUES (:nom, :date, :actif)');
        return $stmt->execute([
            'nom' => $data['nom'] ?? null,
            'date' => $data['date'] ?? null,
            'actif' => $data['actif'] ?? 0,
        ]);
    }

    public static function update(PDO $pdo, int $id, array $data): bool
    {
        $stmt = $pdo->prepare('UPDATE anneeScolaires SET nom = :nom, date = :date, actif = :actif WHERE id = :id');
        return $stmt->execute([
            'nom' => $data['nom'] ?? null,
            'date' => $data['date'] ?? null,
            'actif' => $data['actif'] ?? 0,
            'id' => $id,
        ]);
    }

    public static function delete(PDO $pdo, int $id): bool
    {
        $stmt = $pdo->prepare('DELETE FROM anneeScolaires WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
