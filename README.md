<p align="center">Passord Vault</p>

## à propos de la technologie

La technologie choisie est php avec le framework Laravel et le moteur de template blade, et avec tailwindcss pour le CSS.

## Installation du projet
en ligne de commande, rendez-vous dans le dossier du projet

taper la commande 'composer i', afin d'installer les dépendances.

taper la commande 'php artisan migrate' afin de déployer la base de donnée.

taper la commande 'php artisan serve' pour lancer le serveur.

via une nouvelle invite de commande, lancer la commande npm run dev (toujours dans le dossier du projet).

## à propos du projet

Bienvenus dans ce projet de sauvegarde de mots de passe.

Le but de ce projet est uniquement de faire une démonstration du CRUD.

Il ne vous serra demander à aucun moment d'utiliser de véritables identifiant de connexion, adresses mail ou mots de passe.

Vous pouvez créer un compte sur ce site en utilisant n'importe quelle adresse factice (utilisateur@exemple.test).
Ainsi que nimporte quel mot de passe factice.

Vous pourrez vous connecter en utilisant les identifiants ainsi créés

Ce projet vous permettra de tester une sauvegarde d'identifiants, adresses mail, mots de passe... factices

Les données ainsi saugardées pourront ensuite étre modifiées ou supprimées

## Le système de base de données

La base de donnée dispose de deux tables: users et vaults

-users contient les données concernant les utilisateurs.

-vaults continent les données appartenant aux utilisateurs.

Les tables sont associées par une relation One To Many (un utilisateur pouvant posséder plusieurs vault, un vault ne pouvant avoir qu'un seul propriétaire).

## fonctionnement du back

Le back fonctionne grâce au design pattern modele-view-controller.
et une base de donnée mysql.

Les modeles (App\Models\...) User et Vault permettent de communiquer avec la base de données avec Eloquent.

Les Controller (App\Http\Controllers\...) 

-ProfileController: fabriquer par laravel permet de gérer l'enregistrement et l'identification de l'utilisateur.

-VaultController: fabriquer par moi-même permet d'agir sur la base de donnée avec les actions: 

    -show: affiche toutes les entrées liées à l'utilisateur,     
    -store: sauvarde une nouvelle entrée dans la table, 
    -update: met à jour l'entrée modifiée par l'utilisateur, 
    -destroy: supprime l'entrée sélectionnée par l'utilisateur,

Ces actions sont déclanchée par des routes (routes\web.php).

Ces routes sont appelées par les action de l'utilisateur sur le front.

## fonctionnement du Front

- la page d'accueil ne dispose que d'un titre, une explication rapide du projet et deux liens pour les utilisateur

-Register permet de créer rapidement un compte utilisateur.
-Log in permet de se connecter avec les bons identifiants.

-les pages de connection et d'inscription sont les pages par défault générées par Laravel.

-la page de l'utilisateur dispose d'un menu pour la gestion du compte utilisateur (Laravel default)

-la page contient deux section:

-un formulaire permettant de créer une nouvelle entrée avec un bouton create.

-un formulaire permettant de modifier les entrée existante avec un bouton Update.

-et un bouton permettant de supprimer l'entrée associée.

