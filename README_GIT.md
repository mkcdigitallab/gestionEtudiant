# Guide Git & GitHub — StoreManager Pro

Ce fichier est un mémo court pour travailler sur le dépôt `StoreManager` depuis votre machine.

## Raccourci des commandes utiles

Configuration (une seule fois) :

```bash
git config --global user.name "Votre Nom"
git config --global user.email "votre.email@example.com"
```

Cloner le dépôt :

```bash
git clone git@github.com:mkcdigitallab/StoreManager.git
cd StoreManager
```

Flux de travail simple (faire ceci pour chaque changement logique) :

```bash
git status
git pull --rebase origin main
# modifier les fichiers
git add chemin/fichier       # ou git add -A
git commit -m "type(scope): message concis"
git push origin main
```

Messages de commit recommandés (exemples) :

- `feat(entity): ajout Produit.php`
- `fix(vue): correction affichage liste produits`
- `docs(devlog): mise à jour DEVLOG.md`
- `docs(uml): ajout diagramme de classes`

Branching (optionnel pour travail par fonctionnalité) :

```bash
git checkout -b feat/ma-fonction
# travail, add, commit
git push -u origin feat/ma-fonction
# ouvrir une Pull Request sur GitHub
```

Résolution de conflits (résumé) :

```bash
git pull --rebase origin main
# si conflit: editez les fichiers, enlever les marqueurs <<<< >>>>
git add fichier_résolu
git rebase --continue  # si rebase
# ou git commit si merge
git push
```

Conseils pour la charte du projet

- Faites des commits fréquents et atomiques (objectif ≥ 15 commits répartis).
- Tenez `DEVLOG.md` à jour à chaque étape importante.
- Ne poussez pas un seul gros commit final.

Aide

- Si vous êtes bloqué sur un conflit ou une erreur, copiez le message et demandez-moi — je vous guiderai pas à pas.

Bonne continuation — travaillez petit à petit et commentez bien chaque commit.
