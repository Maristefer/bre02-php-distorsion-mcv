<?php

class CategoryManager extends AbstractManager
{
    public function __construct()
    {
         parent:: __construct();
    
    }
    
    public function findAllCategories() : array
    {
        $categories = [];
        
        $query=$this->db->prepare("SELECT * FROM categories");
        $query->execute();
        
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
        //transforme le résultat de données en Objets Category
        foreach ($result as $item) {//Parcourt chaque élément du tableau $result.
            $category = new Category($item["name"]);//crée un nouvel objet Category en utilisant la valeur du champ name de la base de données.
            $category->setId($item["id"]);//Utilise la méthode setId pour assigner l'ID de la catégorie à l'objet Category.

            $categories[] = $category;//Ajoute l'objet Category au tableau $categories.
        }

        return $categories;//Retourne le tableau de catégories ($categories) contenant tous les objets Category créés.
    }
    
    
}