📓 Journal de Développement (DEVLOG)
Nom & Prénom : Malang Kiya Cisse. Projet : gestionEtudiant

1. Suivi Chronologique des Phases
🌃 [LUNDi - Phase 1] : Conception & BDD Fallback
Heure de réalisation : 09:00 - 10:00

Ce qui a été fait : Création de le structure du projet gestionEtudiant : arborescence . ├── database │ └── schema.sql ├── DEVLOG.md ├── docs │ └── UML ├── public │ ├── index.php │ └── style.css ├── src │ ├── Config │ ├── Controller │ ├── Database │ ├── Entity │ │ ├── AnneeScolaires.php │ │ ├── Classes.php │ │ ├── Eleves.php │ │ ├── Inscriptions.php │ │ ├── Responsables.php │ │ ├── Roles.php │ │ ├── Statuts.php │ │ └── utilisateurs.php │ ├── Repository │ ├── Router │ └── Service │ └── tests └── views

Ajout d'entités placeholder dans src/Entity (Produit, Client, Vente, LigneVente, Dette, Approvisionnement).
Implémentation d'un singleton minimal src/Database/Database.php (connexion PDO).
Copie des diagrammes UML (docs/UML/diagrammeDesClasses.puml, docs/UML/usecase.puml) et génération des PNG correspondants.
Ajout de README d'aide : README_GIT.md, docs/UML/README.md, src/Entity/README.md.
Initialisation du dépôt Git local pour le dossier Desktop, ajout du remote git@github.com:mkcdigitallab/StoreManager.git et push initial sur main.
