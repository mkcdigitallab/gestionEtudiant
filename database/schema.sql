-- Schema SQL initial
CREATE TABLE produit (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prix NUMERIC(10, 2) NOT NULL,
    stock INTEGER DEFAULT 0
);