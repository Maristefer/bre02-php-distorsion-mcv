<?php

//Et comme on sait que notre Router va appeler nos controllers, on va mettre le require avant celui du Router.
require "models/Category.php";

require "managers/AbstractManager.php";
require "managers/CategoryManager.php";

require "controllers/DefaultController.php";
require "controllers/CategoryController.php";



require "config/Router.php";