<?php 
$title = 'GTI 619 Laboratoire 5';
require_once 'includes/header.php';
require_once 'database/conn.php';

#$results= $crud -> getSpeclialities

?>


    <h1 class ="text-center"> GTI 619 Laboratoire 5</h1>
    
        <h2>Formulaire d'enregistrement</h2>

        <form method = "post" action = "success.php">
  <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="Email" name="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nom" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="Nom" class="form-control" id="Nom" name="Nom">
    </div>
  </div>
  <div class="form-group row">
    <label for="Prenom" class="col-sm-2 col-form-label">Prenom</label>
    <div class="col-sm-10">
      <input type="Prenom" class="form-control" id="Prenom" name="Prenom">
    </div>
  </div>
<div class = "form-group">
    <label for = "speciality"> Domaine </label>
    <select class = "form-control" id= "speciality" name = "speciality">
        <option value = "1" > Administrateur</option>
        <option value = "2" > Préposé aux clients résidentiels</option>
        <option value = "3" > Préposé aux clients d'affaire</option>
</select>
</div>     

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
    </div>
  </div>
</form>
<br>
<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>

  