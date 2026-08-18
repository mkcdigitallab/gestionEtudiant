<?php

class InscriptionsService
{
    public static function fetchAll(PDO $pdo): array
    {
        $stmt = $pdo->query('SELECT * FROM inscriptions');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function fetchById(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare('SELECT * FROM inscriptions WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row === false ? null : $row;
    }

    public static function create(PDO $pdo, array $data): bool
    {
        $stmt = $pdo->prepare('INSERT INTO inscriptions (annee_id, eleve_id, classe_id) VALUES (:annee_id, :eleve_id, :classe_id)');
        return $stmt->execute([
            'annee_id' => $data['annee_id'] ?? null,
            'eleve_id' => $data['eleve_id'] ?? null,
            'classe_id' => $data['classe_id'] ?? null,
        ]);
    }

    public static function update(PDO $pdo, int $id, array $data): bool
    {
        $stmt = $pdo->prepare('UPDATE inscriptions SET annee_id = :annee_id, eleve_id = :eleve_id, classe_id = :classe_id WHERE id = :id');
        return $stmt->execute([
            'annee_id' => $data['annee_id'] ?? null,
            'eleve_id' => $data['eleve_id'] ?? null,
            'classe_id' => $data['classe_id'] ?? null,
            'id' => $id,
        ]);
    }

    public static function delete(PDO $pdo, int $id): bool
    {
        $stmt = $pdo->prepare('DELETE FROM inscriptions WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
