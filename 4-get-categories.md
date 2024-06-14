# CategoryController et getCategories

## Créer le CategoryController 

dans le dossier controllers, créez un fichier CategoryController.php, 
dans lequel vous allez définir une classe CategoryController avec une méthode publique getCategories.

Pour l'instant, laissez la méthode vide.


Faites un require de ce Controller dans votre fichier autoload.

Puis ajoutez ce Controlleur comme attribut de votre Router et instanciez le dans le constructeur du Router.

Enfin dans la condition pour get categories appelez la méthode getCategories du Controller.


## Prochaine étape : créer le modèle pour les Category 

Dans votre dossier `models` vous allez créer un fichier `Category.php` dans lequel vous allez définir 
une classe Category qui correspond à la table `categories` de la base de données.


## Woups Mari a oublié un truc

Vous allez pouvoir rajouter votre model Category tout en haut de l'autoload, avant le controller

## Et ensuite on crée notre premier Manager 🎉

Pour aller chercher les catégories dans la base de données on va avoir besoin d'un Manager. 
Et comme on sait qu'on aura plusieurs Managers, on a besoin d'un AbstractManager dont ils pourront hériter.

On va commencer par lui :

Dans le dossier `managers` vous allez créer une classe AbstractManager. Elle a un seul attribut (au dessus du constructeur) :

un protected PDO $db

qu'elle instancie dans son constructeur en créant une connexion vers votre base de données. 


## Woups Mari avait oublié deux fois le même truc

Vous allez pouvoir ajouter un require de votre AbstracManager dans votre autoload, après les modèles mais avant les controllers.


Ensuite il va falloir créer un CategoryManager qui héritera de AbstractManager 
(et donc appelera le constructeur d'AbstractManager dans le sien) et qui aura pour le moment une seule méthode :

public function findAllCategories() : array

qui renvoie un tableau remplie d'instance de Category correspondant à celles trouvées dans la base de données.


Vous allez pouvoir ajouter votre CategoryManager dans l'autoload (après AbstractManager mais avant les controllers)


### Rajouter des catégories de démonstration dans la base de données

Rajoutez 3 catégories : 

Dev

Jeux Video

Blagues pourries


### Retour au Controller

Vous allez ajouter un attribut (au dessus du constructeur) à votre CategoryController :

private CategoryManager $cm;

que vous allez instancier dans le constructeur du Controller.

Puis dans votre méthode getCategories vous allez créer une variable $categories que vous remplirez avec le résultat de la 
méthode findAllCategories du CategoryManager.

### Template get_categories

Vous allez créer un fichier `get_categories.phtml` dans votre dossier `templates`. 
Pour l'instant dedans placez simplement le code suivant :

```php
echo "<pre>";
var_dump($categories);
echo "</pre>"
```

Ensuite vous allez remplir une variable $template avec le chemin de ce template dans la méthode getCategories du CategoryController.
Ensuite faites un require du fichier `templates/layout.phtml`.


Lorque vous testerez dans votre navigateur vous devriez voir un var_dump qui contient les catégories de démonstration 
que vous mis dans la base de données. 


### Mettre en forme le template

Vous allez ensuite remplacer le `var_dump` dans votre template get_categories.phtml par le code que vous trouverez 
dans le fichier `categories.html` sur l'IDE BRE02. Vous allez également faire en sorte que votre layout.phtml charge un fichier style.css que vous placerez dans le dossier assets.
Dans style.css vous pouvez copier le code présent dans le fichier style.css sur l'IDE BRE02.

Une fois tout ça copíe vous allez faire en sorte de dynamiser l'intégration du template en utilisant la variable $categories.
Pour l'instant vous ne pouvez pas dynamiser les href des liens, laissez-les vides.