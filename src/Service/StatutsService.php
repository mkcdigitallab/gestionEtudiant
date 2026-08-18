<?php

class StatutsService
{
    public static function fetchAll(PDO $pdo): array
    {
        $stmt = $pdo->query('SELECT * FROM statuts');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function fetchById(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare('SELECT * FROM statuts WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row === false ? null : $row;
    }

    public static function create(PDO $pdo, array $data): bool
    {
        $stmt = $pdo->prepare('INSERT INTO statuts (nomRole) VALUES (:nomRole)');
        return $stmt->execute(['nomRole' => $data['nomRole'] ?? null]);
    }

    public static function update(PDO $pdo, int $id, array $data): bool
    {
        $stmt = $pdo->prepare('UPDATE statuts SET nomRole = :nomRole WHERE id = :id');
        return $stmt->execute(['nomRole' => $data['nomRole'] ?? null, 'id' => $id]);
    }

    public static function delete(PDO $pdo, int $id): bool
    {
        $stmt = $pdo->prepare('DELETE FROM statuts WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
