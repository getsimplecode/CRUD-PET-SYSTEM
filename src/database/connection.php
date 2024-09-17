<?php

class Connection{
    protected $pdo;

    public function __construct()
    {
        $host       = 'localhost:3307';
        $dbname     = 'petdatabase';
        $password   = '';
        $username   = 'root';

        try{
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
        
        } catch (PDOException $e){
            echo "Connection Failed" . $e->getMessage();
        }
       
    }
}

?>

