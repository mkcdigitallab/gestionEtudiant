# 📓 Journal de Développement (DEVLOG)

**Nom & Prénom** : [Votre Nom & Prénom]
**Projet** : StoreManager Pro (ERP PHP/POO)

---

## 1. Suivi Chronologique des Phases

### 🌃 [Vendredi - Phase 1] : Conception & BDD Fallback

- **Heure de réalisation** : 09:00 - 12:00
- **Ce qui a été fait** :
 	- Création du scaffold du projet `StoreManager-Pro` : arborescence `src/`, `public/`, `views/`, `docs/UML`, `database/`, `tests/`.
 	- Ajout d'entités placeholder dans `src/Entity` (`Produit`, `Client`, `Vente`, `LigneVente`, `Dette`, `Approvisionnement`).
 	- Implémentation d'un singleton minimal `src/Database/Database.php` (connexion PDO).
 	- Copie des diagrammes UML (`docs/UML/diagrammeDesClasses.puml`, `docs/UML/usecase.puml`) et génération des PNG correspondants.
 	- Ajout de README d'aide : `README_GIT.md`, `docs/UML/README.md`, `src/Entity/README.md`.
 	- Initialisation du dépôt Git local pour le dossier Desktop, ajout du remote `git@github.com:mkcdigitallab/StoreManager.git` et push initial sur `main`.
- **Difficultés / Obstacles** :
 	- Confusion entre deux dépôts locaux (`Téléchargements/gestionNotes_poo` vs `Bureau/StoreManager-Pro`).
 	- Solution : initialiser et pousser explicitement le dépôt sur le Bureau.
- **Commits associés** :
 	- `chore(project): initial scaffold from desktop`
 	- `docs(uml): ajout README pour les diagrammes UML`
 	- `docs(devlog): ajout DEVLOG initial`
 	- `feat(entity): ajout README et description des entites de base`
 	- `docs(git): ajout README_GIT.md guide utilisateur`

### ☀️ [Samedi - Phase 2] : POO, Repositories & Ventes POS

- **Heure de réalisation** : (à compléter)
- **Ce qui a été fait** :
 	- (ex : création des entités complètes, repositories, et premières méthodes de `VenteService`)
- **Difficultés / Obstacles** :
 	- (à remplir)
- **Commits associés** :
 	- (ex : `feat(entity): ...`, `feat(repository): ...`)

### 🚀 [Dimanche - Phase 3] : Dettes, Approvisionnements & Rôles

- **Heure de réalisation** : (à compléter)
- **Ce qui a été fait** :
 	- (ex : implémentation des paiements, approvisionnements, gestion des rôles)
- **Difficultés / Obstacles** :
 	- (à remplir)
- **Commits associés** :
 	- (ex : `feat(dettes): ...`, `feat(supplies): ...`)

---

## 2. Autopsie de 3 Méthodes Clés (Indispensable pour l'oral)

### Méthode 1 : `Database::getInstance()`

- **Fichier** : `src/Database/Database.php`
- **Rôle** : Fournir une instance PDO singleton réutilisable par l'application; gérer les paramètres de connexion et configurer les options PDO (ERRMODE, ATTRS).
- **Explication (à compléter ligne par ligne)** :
 	- Initialisation du DSN et tentative de connexion PostgreSQL.
 	- Si échec, mécanisme de fallback sur SQLite (fichier local `erp.db`).
 	- Configuration des attributs PDO et gestion des exceptions.

### Méthode 2 : `VenteService::validerVente()`

- **Fichier** : `src/Service/VenteService.php`
- **Rôle** : Valider un panier/vente, vérifier les stocks, appliquer transactions PDO (beginTransaction/commit/rollback), décrémenter le stock, enregistrer la vente et les lignes de vente.
- **Explication (à compléter ligne par ligne)** :
 	- Vérifier l'intégrité du panier et la disponibilité des produits.
 	- Démarrer une transaction PDO.
 	- Enregistrer l'entité `Vente` et ses `LigneVente`.
 	- Mettre à jour les quantités de stock.
 	- Commit si OK, rollback et gestion d'erreur si problème.

### Méthode 3 : `DetteService::enregistrerPaiement()`

- **Fichier** : `src/Service/DetteService.php`
- **Rôle** : Enregistrer un paiement sur une dette, recalculer le reste dû, éventuellement marquer la dette comme soldée, et enregistrer un `Paiement`.
- **Explication (à compléter ligne par ligne)** :
 	- Vérifier la dette ciblée et le montant du paiement.
 	- Début de transaction si modification de plusieurs tables.
 	- Enregistrer le paiement et mettre à jour le montant payé / reste.
 	- Commit ou rollback selon le résultat.

---

## 3. Notes techniques & décisions d'architecture

- **Architecture** : MVC / Layered (Core, Entity/Model, Repository, Service, Controller, Views).
- **Base de données** : Utiliser PDO (requêtes préparées) — aucune requête SQL non paramétrée.
- **Transactions** : Utiliser `beginTransaction` / `commit` pour ventes et approvisionnements.
- **Tests** : Ajouter tests unitaires pour les services critiques (`VenteService`, `DetteService`).

---

## 4. Rappel des exigences de la charte

- Minimum 15 commits répartis durant le projet ; messages explicites.
- Fournir les diagrammes UML dans `docs/UML` (PUML + PNG).
- Fournir `DEVLOG.md` à jour avec les phases et l'autopsie de 3 méthodes.

---

_(Remplissez les sections Phase 2 / Phase 3 et les explications ligne par ligne des méthodes lors de votre travail; gardez une entrée DEVLOG par étape/commit.)_
