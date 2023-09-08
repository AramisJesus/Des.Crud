<?php 

require_once $_SERVER ['DOCUMENT_ROOT'] .'/' .FOLDER. '/database/Database.php';

class EstudanteModel {
    private int $idade;

    private string $nome;
    
    PRIVATE $database;

    //Getters and setters

    public function __construct()
    {
        $this->database = new Database();
    }


    public function salvarModel(string $nome, int $idade){
    
        $sql = "INSERT INTO estudantes (nome, idade ) values ('$nome', '$idade')";
        $this->database->insert($sql);

        
    }
    

     

    public function listar (): array 
    {
        $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes");
       
        
        //Obter e retornar os dados do BD
        return $dadosArray;

    }
}










