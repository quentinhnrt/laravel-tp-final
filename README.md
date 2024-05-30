# Dashboard de Gestion de Projet

## Table des Matières

1. [Installation](#installation)
2. [Utilisation](#utilisation)
3. [Fonctionnalités](#fonctionnalités)
    - [Administration](#administration)
        - [Ajouter un projet](#ajouter-un-projet)
        - [Ajouter un client](#ajouter-un-client)
        - [Ajouter un chef de projet](#ajouter-un-chef-de-projet)
        - [Ajouter un développeur](#ajouter-un-développeur)
        - [Ajouter une tâche](#ajouter-une-tâche)
    - [Chef de projet](#chef-de-projet)
    - [Développeur](#développeur)
4. [Bonus](#bonus)

## Installation

1. Clonez le repository.
    ```bash
    git clone https://github.com/quentinhnrt/laravel-tp-final.git
    cd laravel-tp-final
    ```
2. Installez les dépendances.
    ```bash
    composer install
    ```
3. Installez les dépendances.
    ```bash
    npm install
    ```
4. Lancer la compilation
    ```bash
    npm run dev
    ```
5. Lancer les migrations
    ```bash
    php artisan migrate
    ```
6. Lancer les migrations
    ```bash
    php artisan key:generate
    ```
7. Lancer le serveur
    ```bash
    php artisan serve
    ```

## Utilisation

### Page de Garde

La page de garde vous permet d'accéder aux différentes sections de l'application :

-   [ ] Administration
-   [ ] Chef de projet
-   [ ] Développeur

### Administration

Dans cette section, vous pouvez gérer les projets, les clients, les chefs de projet, les développeurs et les tâches.

#### Ajouter un projet

-   [ ] Affiche la liste des projets existants.
-   [ ] Permet d'ajouter un nouveau projet avec les champs suivants :
    -   [ ] Nom
    -   [ ] Description
    -   [ ] Client
    -   [ ] Chef de projet
-   [ ] Possibilité d'éditer les projets.
-   [ ] Accès à la page dédiée du client et du chef de projet depuis la fiche du projet.

#### Ajouter un client

-   [ ] Affiche la liste des clients existants.
-   [ ] Permet d'ajouter un nouveau client avec les champs suivants :
    -   [ ] Nom de la société
    -   [ ] Adresse
    -   [ ] Site web
    -   [ ] Liste de ses projets
-   [ ] Possibilité d'éditer les clients.
-   [ ] Accès à la page dédiée d'un projet depuis la fiche du client.

#### Ajouter un chef de projet

-   [ ] Affiche la liste des chefs de projet existants.
-   [ ] Permet d'ajouter un nouveau chef de projet avec les champs suivants :
    -   [ ] Nom
    -   [ ] Prénom
    -   [ ] Fonction
    -   [ ] Liste des projets qu'il gère
    -   [ ] Liste des tâches qui lui sont affiliées
-   [ ] Possibilité d'éditer les chefs de projet.
-   [ ] Accès à la page dédiée d'un projet depuis la fiche du chef de projet.

#### Ajouter un développeur

-   [ ] Affiche la liste des développeurs existants.
-   [ ] Permet d'ajouter un nouveau développeur avec les champs suivants :
    -   [ ] Nom
    -   [ ] Prénom
    -   [ ] Fonction
    -   [ ] Liste des tâches auxquelles il est affilié
-   [ ] Possibilité d'éditer les développeurs.
-   [ ] Accès à la page d'une tâche depuis la fiche du développeur.

#### Ajouter une tâche

-   [ ] Affiche la liste des tâches existantes.
-   [ ] Permet d'ajouter une nouvelle tâche avec les champs suivants :
    -   [ ] Projet affilié
    -   [ ] Nom
    -   [ ] Description
    -   [ ] Développeurs ou Chefs de projets affiliés
    -   [ ] Liste de tags (Front/Back)
    -   [ ] Liste de tags pour les phases : TODO, En cours, Bloqué, A livrer en préproduction, A livrer en production, A recetter, A voir avec le client.
-   [ ] Possibilité de modifier les tâches.

### Chef de projet

-   [ ] Affiche une liste des chefs de projet.
-   [ ] En cliquant sur un chef de projet, on accède à une vue détaillée comprenant :
    -   [ ] Informations sur les projets auxquels le chef de projet est affilié : Nom du projet, liste des tâches affiliées.
-   [ ] En cliquant sur une tâche, on accède à la page dédiée à la tâche.

### Développeur

-   [ ] Affiche une liste des développeurs.
-   [ ] En cliquant sur un développeur, on accède à une vue détaillée comprenant :
    -   [ ] Liste des tâches affiliées, rangées par projet.
-   [ ] En cliquant sur une tâche, on accède à la page dédiée à la tâche.

## Bonus

-   [ ] Design de l'interface avec Bootstrap, Tailwind, ou autre framework CSS (+2).
-   [ ] Navigation intuitive entre les éléments (+2).
