<?php

class AbstractManager
{
    protected PDO $db;//1 attribut qui est instancié dans le constructeur poure créer un connecxion à la BDD
    
    public function __construct()
    {
        
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "marieevamirtil_php_distorsion";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = "marieevamirtil";
        $password = "298bd4f37ef5f7fa0395445666351fa6";
        
     $this->db = new PDO(
            $connexionString,
            $user,
            $password); 
    
    echo "<pre>";
    var_dump($this->pdo);
    echo "</pre>";
    }
    
   
}
}