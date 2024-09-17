<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/PetSystemCode/src/database/ownerDatabase.php';
include_once '../nav/navigation.php';


$ownerdb = new ownerdatabase();

if(isset($_GET['first'])){
   $val = $_GET['first'] - 1;
   $ownerdb->start = $val * $ownerdb->limit;
}


if(isset($_POST['create'])){
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];
    $address   = $_POST['address'];

    $ownerdb->CreateOwner(
        firstname : $firstname,
        lastname  : $lastname,
        email     : $email,
        address   : $address
    );

}

if(isset($_GET['update'])){
    $OwnerID = $_GET['update'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    $ownerdb->UpdateOwner(
        OwnerID: $OwnerID,
        firstname: $firstname,
        lastname: $lastname,
        email: $email,
        address: $address
    );
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $ownerdb->DeleteOwner($id);
}

if(isset($_GET['edit'])){
    $id  = $_GET['edit'];

    $owner = $ownerdb->Select($id);
        $firstname  = $owner['firstname'];
        $lastname   = $owner['lastname'];
        $email      = $owner['email'];
        $address    = $owner['address'];

    include_once 'owner_update_view.php';
}

else
    include_once 'owner_view.php';


?>