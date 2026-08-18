<?php

class ClassesService
{
    public static function fetchAll(PDO $pdo): array
    {
        $stmt = $pdo->query('SELECT * FROM classes');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function fetchById(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare('SELECT * FROM classes WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row === false ? null : $row;
    }

    public static function create(PDO $pdo, array $data): bool
    {
        $stmt = $pdo->prepare('INSERT INTO classes (nomClasse) VALUES (:nomClasse)');
        return $stmt->execute(['nomClasse' => $data['nomClasse'] ?? null]);
    }

    public static function update(PDO $pdo, int $id, array $data): bool
    {
        $stmt = $pdo->prepare('UPDATE classes SET nomClasse = :nomClasse WHERE id = :id');
        return $stmt->execute(['nomClasse' => $data['nomClasse'] ?? null, 'id' => $id]);
    }

    public static function delete(PDO $pdo, int $id): bool
    {
        $stmt = $pdo->prepare('DELETE FROM classes WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
