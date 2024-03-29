# php-unit-tests

## Introduction

Ce repository github a pour but de rassembler un ensemble de simples fonctions php (~15 fonctions).
Chaque fonction doit posséder au moins un test unitaire.

Ces fonctions sont destinées à être utilisées lors des Portes Ouvertes de l'ETML du 4 Décembre 2021.
Elles ont été écrites par les élèves du Groupe 2A.

## Comment lancer les tests unitaires ?

### Prérequis

- Avoir installé git
- Avoir installé php
- Avoir installé composer

### Installation des dépendances

Pour pouvoir lancer les tests unitaires, il faut commencer par installer les dépendances.

Pour cela, il y a un fichier `composer.json` qui contient la liste des dépendances.

Pour installer les dépendances, il suffit de faire un `composer install`.

Cette commande va créer un répertoire `vendor` et va installer les dépendances dans ce répertoire.

### Tout est prêt pour lancer les tests unitaires

Il suffit de lancer la commande suivante dans `git bash` :

```vendor/bin/phpunit tests/ ```

<img title="run unit tests" alt="run unit tests" src="images/run-unit-tests.png">
