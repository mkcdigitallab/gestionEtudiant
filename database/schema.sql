CREATE TABLE anneeScolaires(
    id SERIAL PRIMARY KEY,
    nom VARCHAR (30) UNIQUE NOT NULL,
    date DATE DEFAULT CURRENT_DATE
);

ALTER TABLE anneeScolaires
ADD COLUMN actif int DEFAULT;

UPDATE anneeScolaires
set actif = 0
WHERE id != 1;



SELECT * FROM anneeScolaires
WHERE id = 1;

 CREATE TABLE eleves(
    id SERIAL PRIMARY KEY,
    nom VARCHAR (50) NOT NULL,
    prenom VARCHAR (50) NOT NULL,
    matricule VARCHAR (30) UNIQUE NOT NULL,
    etablissement VARCHAR (30) UNIQUE NOT NULL,
    responsble_id INT REFERENCES responsable(id) ON DELETE CASCADE
    statut_id INT REFERENCES statut(id) ON DELETE CASCADE
    classe_id INT REFERENCES classes(id) ON DELETE CASCADE
);
 CREATE TABLE responsables(
    id SERIAL PRIMARY KEY,
    nom VARCHAR (50) NOT NULL,
    prenom VARCHAR (50) NOT NULL,
    telephone VARCHAR (30) UNIQUE NOT NULL,

);

 CREATE TABLE statuts(
    id SERIAL PRIMARY KEY,
    nomRole VARCHAR (50) NOT NULL
);
CREATE TABLE classes(
    id SERIAL PRIMARY KEY,
    nomClasse VARCHAR (30) UNIQUE NOT NULL

);

SELECT * FROM classes;

 CREATE TABLE inscriptions(
    id SERIAL PRIMARY KEY,
    annee_id INT REFERENCES anneeScolaires(id) ON DELETE CASCADE,
    eleve_id INT REFERENCES eleves(id) ON DELETE CASCADE,
    classe_id INT REFERENCES classes(id) ON DELETE CASCADE
);

SELECT * FROM inscriptions;

 CREATE TABLE roles(
    id SERIAL PRIMARY KEY,
    nomRole VARCHAR (50) NOT NULL
);

SELECT * FROM roles;


 CREATE TABLE utilisateurs(
    id SERIAL PRIMARY KEY,
    nom VARCHAR (50) NOT NULL,
    prenom VARCHAR (50) NOT NULL,
    telephone VARCHAR (30) UNIQUE NOT NULL,
    email VARCHAR (30) UNIQUE NOT NULL,
    role_id INT REFERENCES roles(id)
);

SELECT * FROM utilisateurs;

SELECT ROUND(COALESCE(AVG(moyenne_eleve),0),2) as moyenne_general 
FROM(
    SELECT inscription_id,
ROUND(AVG((COALESCE(devoir1,0)+COALESCE(devoir2,0)+2*COALESCE(composition,0))/4),2) AS moyenne_eleve
FROM evaluations ev
INNER JOIN 
inscriptions i ON i.id = ev.inscription_id
WHERE 
i.classe_id=2
AND ev.matiere_id=1
AND ev.periode_id=1
GROUP BY inscription_id);




SELECT * FROM evaluations;


INSERT INTO roles(nomRole)
VALUES ('Direction D etablissement'), ('Proffeseur'), ('Surveillant');


INSERT INTO utilisateurs(nom, prenom, telephone, email, role_id)
VALUES ('Fatou', 'Sall', '77888888', 'fatouSall@gmail.com', 1)


INSERT INTO anneeScolaires (nom) VALUES ('2025-2026');


INSERT INTO classes (nomClasse) VALUES 
('3em A'), 
('3em B'), 
('4em A'), 
('4em B');


INSERT INTO eleves (nom, prenom, matricule) VALUES
('Fall', 'Moussa', 'JE-26002'),
('Ndiaye', 'Fatou', 'JE-26003'),
('Diallo', 'Ibrahima', 'JE-26004'),
('Sow', 'Khadija', 'JE-26005'),
('Faye', 'Ousmane', 'JE-26006');


INSERT INTO inscriptions (annee_id, eleve_id, classe_id) VALUES
(1, 1, 3),
(1, 2, 3),
(1, 3, 3),
(1, 4, 1),
(1, 5, 1);


alter table utilisateurs 
add column password VARCHAR  UNIQUE;



SELECT u.*,r.* from utilisateurs u
inner join roles r on u.role_id=r.id
 WHERE
email=:email 
;
select * from anneeScolaires;

INSERT INTO anneescolaires (nom)
VALUES ('2024-2025'),
        ('2023-2024');