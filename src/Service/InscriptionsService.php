<?php

class InscriptionsService
{
    public static function fetchAll(PDO $pdo): array
    {
        return [];
    }

    public static function fetchById(PDO $pdo, int $id): ?array
    {
        return null;
    }

    public static function create(PDO $pdo, array $data): bool
    {
        return false;
    }

    public static function update(PDO $pdo, int $id, array $data): bool
    {
        return false;
    }

    public static function delete(PDO $pdo, int $id): bool
    {
        return false;
    }
}
