<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/PetSystemCode/src/database/petDatabase.php';
include_once '../nav/navigation.php';

$petdatabase = new PetDatabase();

    if(isset($_POST['create'])){
    
        $petname    = $_POST['petname'];
        $petemail   = $_POST['petemail'];
        $petage     = $_POST['petage'];

        $petdatabase->CreatePetInfo(
            petname :  $petname,
            petage  :  $petage,
            petemail:  $petemail
        );
    }

    if(isset($_POST['update'])){
        $petid    =  $_GET['update'];
        $petname  =  $_POST['petname'];
        $petage   =  $_POST['petage'];
        $petemail =  $_POST['petemail'];
        
        $petdatabase->UpdatePetInfo(
            petid   :   $petid,
           petname  :   $petname,
           petage   :   $petage,
           petemail :   $petemail
        );

    }

    if(isset($_GET['delete'])){  
        $id = $_GET['delete'];
        $petdatabase->Delete($id);
    }

    if(isset($_GET['edit'])){
        $id  = $_GET['edit'];

        $pet = $petdatabase->Select($id);
                $petname  = $pet['petname'];
                $petage   = $pet['petage'];
                $petemail = $pet['petemail'];

                include_once 'petviewUPDATE.php';
    }

   else include_once 'petview.php';

?>
