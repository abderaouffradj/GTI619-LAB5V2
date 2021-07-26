<?php 
$title = 'Utilisateur';

require_once 'includes/header.php';
require_once 'database/conn.php';

#$resultResidentiel = $crud -> getAttendeesResidentiel();
#$resultAffaire = $crud ->getAttendeesAffaire();

//Get attendee by id
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $result = $crud -> getAttendeeDetails($id);
} else{
 echo "<h1 class ='text-danger'> please check details and try again</h1>";
}
?>

<div class = "card" style = "width: 18rem;">
    <div class = "card-body">
        <h5 class= "card-title">
         Nom:   <?php echo $result['firstname']; ?>
        </h5>
        <h6 class = "card-substitle mb-2 text-muted">
         Prenom: <?php echo $result['lastname']; ?>
        </h6>
        <h6 class = "card-substitle mb-2 text-muted">
          Email:  <?php echo $result['Email']; ?>
        </h6>
        
</div>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>

  