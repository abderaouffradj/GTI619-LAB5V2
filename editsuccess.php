<?php


if (isset($_POST['submit'])){
    $email= $_POST['Email'];
    $speciality = $_POST['speciality'];
    $nom= $_POST['Nom'];
    $prenom =$_POST['Prenom'];
 
    $Issuccess =  $crud -> insert($email, $nom, $prenom, $speciality);
}


?>