<?php 
$title = 'GTI 619 Laboratoire 5';
require_once 'includes/header.php';
require_once 'database/conn.php';

#$results= $crud -> getSpeclialities


if (!isset($_GET['id']))
{
    echo 'error' ;
} else{
    $id =$_GET['id'];
    $utilisateur = $crud -> getAttendeeDetails($id);
 
?>


    <h1 class ="text-center"> GTI 619 Laboratoire 5</h1>
    
        <h2>Modification d'un utilisateur</h2>

        <form method = "post" action = "editsuccess.php"> 
            <input type = "hidden" name ="id" value = "<?php echo $utilisateur['userid'] ?>"

            
        <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" value = " <?php echo $utilisateur['Email'] ?> " id="Email" name="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nom" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="Nom" class="form-control" value = " <?php echo $utilisateur['firstname'] ?> " id="Nom" name="Nom">
    </div>
  </div>
  <div class="form-group row">
    <label for="Prenom" class="col-sm-2 col-form-label">Prenom</label>
    <div class="col-sm-10">
      <input type="Prenom" class="form-control" value = " <?php echo $utilisateur['lastname'] ?> " id="Prenom" name="Prenom">
    </div>
  </div>
<div class = "form-group">
    <label for = "speciality"> Domaine </label>
    <select class = "form-control" id= "speciality" name = "speciality">
        <option value = "3" > Administrateur</option>
        <option value = "2" > Préposé aux clients résidentiels</option>
        <option value = "1" > Préposé aux clients d'affaire</option>
</select>
</div>     

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" class="btn btn-success">Sauvegarder les changements</button>
    </div>
  </div>
</form>


<?php } ?>
<br>
<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>

  