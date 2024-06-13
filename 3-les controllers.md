# Les controlleurs

1 URL === 1 ROUTE === 1 METHODE DE CONTROLLER

- home
- add-category
- add-room
- add-message
- show-room
- 404

On va pouvoir en tirer 4 Controllers différents :

- DefaultController :
    - la home
    - la page 404

- CategoryController :
    - add category 
    - get categories
    - get category

- RoomController :
    - add room
    - get rooms
    - show room

- MessageController :
    - add message 


## Ajouter les routes au Router :

Nous avons des nouvelles conditions à ajouter dans le routeur :

- get categories
- get category
- get rooms


## On va faire votre truc préféré : créer des Controllers 🎉


### DefaultController

On va créer le DefaultController qui a deux méthodes :

- home
- notFound

Pour l'instant dans les méthodes recopiez simplement les echo du Router.

On va ensuite require ce controller dans notre fichier autoload
Et comme on sait que notre Router va appeler nos controllers, on va mettre le require avant celui du Router.

### Appeler les méthodes dans le Router

Dans notre Router on va ajouter un attribut à notre classe (au dessus du constructeur). cet attribut sera un DefaultController
privé, appelé $dc.

Dans notre constructeur, nous allons instancier cet attribut $dc.

Dans la condition home de handleRequest, effacez l'echo et remplacez-le par un appel à la méthode home du DefaultController
Dans la condition notFound de handleRequest effacez l'echo et remplacez le par un appel à la méthode notFound du DefaultController

Il y a une troisième modification à faire, je vous laisse devenir laquelle.


### Création du premier template 

Dans le dossier templates, créez un fichier layout.phtml.

Dedans mettez le code que vous trouverez sur Discord.

Puis à l'emplacement pour le code PHP on va ajouter de quoi charger le template que notre Controller aura préparé :

`require $template;`

### Les templates home et 404

Dans le dossier templates, créez un fichier home.phtml et dans mettez simplement :

`<h1>Je suis la page d'accueil</h1>`

Dans le dossier templates, créez un fichier 404.phtml et dedans mettez simplement :

`<h1>Page introuvable</h1>`


### Y'a plus qu'à charger les templates dans le controller 

Dans la méthode home de votre controller, vous allez créer une variable $template qui contiendra le chemin
(depuis l'index) du template permettant d'afficher la home.

Puis vous ferez un require du template layout.

Dans la méthode notFound de votre controller, vous allez créer une variable $template qui contiendra le chemin
(depuis l'index) du template permettant d'afficher la 404.

Puis vous ferez un require du template layout.