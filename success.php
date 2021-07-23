<?php 
$title = 'Enregistrement reussis';
require_once 'includes/header.php';
require_once 'database/conn.php';

    if (isset($_POST['submit'])){
        $email= $_POST['Email'];
        $speciality = $_POST['speciality'];
        $nom= $_POST['Nom'];
        $prenom =$_POST['Prenom'];
     
        $Issuccess =  $crud -> insert($email, $nom, $prenom, $speciality);
    }

    if($Issuccess){
        echo '<h3 class = "text-center text-success"> Enregistrement fait avec succes! </h3>';

    }else{
        echo '<h3 class = "text-center text-danger"> Enregistrement Echec! </h3>';
}
?>
 
 <div class = "card" style = "width: 18rem;">
    <div class = "card-body">
        <h5 class= "card-title">
         Nom:   <?php echo $_POST['Nom']; ?>
        </h5>
        <h6 class = "card-substitle mb-2 text-muted">
         Prenom:    <?php echo $_POST['Prenom']; ?>
        </h6>
        <h6 class = "card-substitle mb-2 text-muted">
          Email:  <?php echo $_POST['Email']; ?>
        </h6>
        <h6 class = "card-substitle mb-2 text-muted">
          Domaine:  <?php echo $_POST['speciality']; ?>
        </h6>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>

  