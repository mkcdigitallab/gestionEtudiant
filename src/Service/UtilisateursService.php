<?php

class UtilisateursService
{
    public static function fetchAll(PDO $pdo): array
    {
        $stmt = $pdo->query('SELECT * FROM utilisateurs');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function fetchById(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare('SELECT * FROM utilisateurs WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row === false ? null : $row;
    }

    public static function create(PDO $pdo, array $data): bool
    {
        $stmt = $pdo->prepare('INSERT INTO utilisateurs (nom, prenom, telephone, email, role_id, password) VALUES (:nom, :prenom, :telephone, :email, :role_id, :password)');
        return $stmt->execute([
            'nom' => $data['nom'] ?? null,
            'prenom' => $data['prenom'] ?? null,
            'telephone' => $data['telephone'] ?? null,
            'email' => $data['email'] ?? null,
            'role_id' => $data['role_id'] ?? null,
            'password' => $data['password'] ?? null,
        ]);
    }

    public static function update(PDO $pdo, int $id, array $data): bool
    {
        $stmt = $pdo->prepare('UPDATE utilisateurs SET nom = :nom, prenom = :prenom, telephone = :telephone, email = :email, role_id = :role_id, password = :password WHERE id = :id');
        return $stmt->execute([
            'nom' => $data['nom'] ?? null,
            'prenom' => $data['prenom'] ?? null,
            'telephone' => $data['telephone'] ?? null,
            'email' => $data['email'] ?? null,
            'role_id' => $data['role_id'] ?? null,
            'password' => $data['password'] ?? null,
            'id' => $id,
        ]);
    }

    public static function delete(PDO $pdo, int $id): bool
    {
        $stmt = $pdo->prepare('DELETE FROM utilisateurs WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
