php -S localhost:8000
# Médiathèque IPNET – Catalogue dynamique

Projet réalisé dans le cadre du **TP 1 – PHP** de l'UE **IT 231 – Développement Web I**
(Licence 2, Semestre 3, année académique 2026-2027, IPNET Institute of Technology).

**Auteur :** [NOM Prénoms] – Filière [GL / WIM / DWM / IG / IA]
**Chargé du cours :** M. EDOU Dodji

## Description

Site web dynamique qui affiche le catalogue de livres de la médiathèque IPNET.
Aucune base de données n'est utilisée : les livres sont stockés dans un tableau
associatif PHP (`data/livres.php`). Le projet utilise PHP 8+ uniquement, sans framework.

## Prérequis

- **PHP 8.0 ou supérieur** (vérifier avec `php -v`)
- Un navigateur web
- Au choix : le serveur intégré de PHP, ou XAMPP / WAMP / MAMP
- Git (pour cloner le dépôt)

## Installation et lancement

1. Cloner le dépôt :
   ```bash
   git clone [URL-du-depot]
   cd mediatheque-mp1
   ```
2. Lancer le serveur intégré de PHP depuis la racine du projet :
   ```bash
   php -S localhost:8000
   ```
3. Ouvrir [http://localhost:8000](http://localhost:8000) dans le navigateur.

**Avec XAMPP / WAMP :** copier le dossier `mediatheque-mp1` dans `htdocs` (XAMPP)
ou `www` (WAMP), démarrer Apache, puis ouvrir `http://localhost/mediatheque-mp1/`.

## Fonctionnalités réalisées

- **Accueil** (`index.php`) : message de bienvenue, lien vers le catalogue,
  nombre total de livres et nombre de livres disponibles (calculés en PHP).
- **Catalogue** (`catalogue.php`) : tableau de tous les livres (titre, auteur, année,
  catégorie, prix, disponibilité) et compteur de livres affichés.
- **Filtrage par catégorie** : via le paramètre URL `?categorie=roman`, avec
  validation du paramètre, message d'erreur si la catégorie n'existe pas
  et lien pour revenir à l'affichage complet.
- **Détail d'un livre** (`detail.php?id=3`) : informations complètes, vérification de
  l'identifiant et message d'erreur propre si l'identifiant est absent ou invalide.
- **À propos** (`apropos.php`) : présentation statique et date du jour via une fonction PHP.
- **Sécurité de base** : toutes les données affichées passent par `htmlspecialchars()`
  et les paramètres GET sont validés.

## Structure du projet

```
mediatheque-mp1/
├── index.php
├── catalogue.php
├── detail.php
├── apropos.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── fonctions.php
├── data/
│   └── livres.php
├── css/
│   └── style.css
└── README.md
```

## Fonctions principales (`includes/fonctions.php`)

| Fonction | Rôle |
|----------|------|
| `afficherLivre(array $livre): string` | Génère la ligne HTML d'un livre (données échappées) |
| `filtrerParCategorie(array $livres, string $categorie): array` | Retourne les livres d'une catégorie |
| `trouverLivreParId(array $livres, int $id): ?array` | Retourne un livre par son id, ou `null` |
| `compterLivresDisponibles(array $livres): int` | Compte les livres disponibles |
| `listerCategories(array $livres): array` | Liste les catégories distinctes |
| `dateDuJour(): string` | Retourne la date du jour en français |

## Données

Le catalogue contient 20 livres répartis en 6 catégories : roman, informatique,
histoire, science, poésie et théâtre. Chaque livre possède les clés :
`id`, `titre`, `auteur`, `annee`, `categorie`, `prix`, `disponible`.