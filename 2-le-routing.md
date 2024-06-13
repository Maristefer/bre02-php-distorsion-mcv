# routing du site

- home (la page d'accueil de l'application qu'on voit sur la maquette)
- add-category (pour ajouter une catégorie)
- add-room (pour ajouter un salon à une catégorie)
- add-message (pour envoyer un message dans un salon)
- show-room (pour voir les messges d'un salon)

## Créer le repository

par exemple `bre02-distorsion`

## Ensuite la structure de dossiers

- assets
- config
- controllers
- managers
- models
- templates
index.php

## Créer une classe Router

dans le dossier `config`, créez une classe `Router` dans un fichier `Router.php`.

en suivant l'exemple des projets précédents on va lui creer une méthode handleRequest

elle reçoit la route et se chargera de faire correspondre la route à une méthode de controller

1 URL === 1 ROUTE === UNE MÉTHODE DE CONTROLLER

pour l'instant on laisse cette méthode vide


## Créer les conditions des routes

Dans la méthode handleRequest du Router

Faire une condition if / elseif / else if/ .. / else qui correspond aux routes suivantes :

- home 
- add-category 
- add-room 
- add-message 
- show-room 
- 404
- pas de route 


Une fois que c'est fait : add / commit / push :)


## Appeler le routeur dans l'index

Maintenant qu'on a un Router, on va pouvoir l'appeler depuis notre index.php.

En premier on va créer le fichier `config/autoload.php` qui nous permettra de faire des require de toutes nos classes à un seul endroit.

Dedans on va donc require notre class Router. Puis on va require l'autoload dans notre index.

ATTENTION : dans l'autoload tous les liens de vos fichiers pour les require, considérez que vous êtes au niveau de l'index.


Ensuite ans notre index.php nous allons récupérer, s'il existe, la valeur du paramètre `$_GET['route']` dans une variable $route. 
Si le paramètre n'existe pas, $route vaudra null.

s'il existe => if(isset($_GET['route']))
je récupère la valeur de `$_GET['route']` dans une variable $route => $route = $_GET['route'];
s'il n'existe pas => else
$route vaudra null => $route = null;


Nous allons ensuite instancier un Router, et appeler sa méthode handleRequest à qui nous allons envoyer la variable $route.

instancier un router => $router = new Router()
appeler la méthode => $router->handleRequest()
en lui envoyant la $route => $router->handleRequest($route)


## Tester

Dans les condition du routeur, pour tester on va faire des echo :

par exemple echo "Je veux appeler la route pour ajouter une catégorie<br>";
ou echo "je n'ai pas reçu de route<br>";

un echo différent par condition :)

Dans l'URL du navigateur vous allez taper votreurl/index.php?route=add-category ou votreurl/index.php?route=home

Et ce pour chacune des conditions afin de tout tester :)


