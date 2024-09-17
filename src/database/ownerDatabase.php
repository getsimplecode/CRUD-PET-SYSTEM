<?php 
include_once 'connection.php';

Class ownerdatabase extends Connection{

    public $start = 0;
    public $limit = 6;

    function ReadAll(){
        $query = "SELECT * FROM Owners ORDER BY ownerID DESC LIMIT $this->start,$this->limit ";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    function CountAllRows(){
        $query = "SELECT COUNT(*) AS total_rows FROM owners";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC); 
    
        return ceil($result['total_rows'] / $this->limit);
    }
    

    function CreateOwner($firstname, $lastname, $email, $address)
    {
        $query = "INSERT INTO Owners(firstname,lastname,email,address)values(:firstname, :lastname, :email, :address)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'firstname' => $firstname,
                'lastname'  => $lastname,
                'email'     => $email,
                'address'   => $address
            ]
        );
    }

   
    function UpdateOwner($OwnerID,$firstname, $lastname, $email, $address){
        $query = "UPDATE Owners SET firstname = :firstname, lastname = :lastname, email = :email, address = :address 
        where ownerID = :ownerid";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'ownerid' => $OwnerID,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'address' => $address
            ]
        );
    }

    function DeleteOwner($id){
        $query = "DELETE FROM owners where ownerID = :ownerid";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'ownerid' => $id
            ]
        );
    }

    function Select($id){
        $query = "SELECT * FROM Owners WHERE ownerID = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'id' => $id
            ]
            );
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

}

?>