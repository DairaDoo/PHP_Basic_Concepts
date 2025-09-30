<?php

try {
    $pdo = new PDO("sqlite:contacts.db"); // sqlite file
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // manejamos errores
    $pdo->exec("CREATE TABLE IF NOT EXISTS contacts (
        id INTEGER PRIMARY KEY,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        phone TEXT,
        image TEXT
    );"); // creamos la tabla si no existe
    return $pdo;
} catch (PDOException $e) {
    return null;
}
