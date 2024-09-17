<?php

include 'connection.php';

class PetDatabase extends Connection{

    function CreatePetInfo($petname,$petage,$petemail){
        $query = "insert into pets(petname,petage,petemail)values(:petname,:petage,:petemail)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'petname'   => $petname,
                'petage'    => $petage,
                'petemail'  => $petemail
            ]
        );
    }

    function UpdatePetInfo($petid,$petname,$petage,$petemail){
                $query = "UPDATE pets set
                petname     = :petname,
                petage      = :petage, 
                petemail    = :petemail 
                Where petID = :petID";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'petID'     => $petid,
                'petname'   => $petname,
                'petage'    => $petage,
                'petemail'  => $petemail
            ]
        );
    }

    function Select($id){
        $query = "Select * from pets where petID = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'id' => $id
            ]
        );

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    function SelectAll(){
        $query  = "select * from pets";
        $stmt   = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function Delete($id){
        $query  = "DELETE FROM pets WHERE petID = :id";
        $stmt   = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'id' => $id
            ]
        );
    }
}

?>