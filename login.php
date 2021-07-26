<?php
    $title = 'User Login'; 

    require_once 'includes/header.php'; 
    require_once 'database/conn.php'; 
    
    //If data was submitted via a form POST request, then...
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = strtolower(trim($_POST['email']));
        $password = $_POST['password'];
        $new_password = md5($password.$email);

        $result = $user->getUser($email,$new_password);

        echo $result['speciality_id'];


        if(!$result){
            echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';

        }else{
           $_SESSION['email'] = $email;
           $_SESSION['userid'] = $result['id'];
           

           header("Location: viewRecords.php");

          ##     if ($result['speciality_id']=){
             ##        die();
           ##     }
       ##   else if ($result['speciality_id']= 2){
            ##        header("Location: viewRecordClientsResid.php");
##die();
       ## }else if ($result['speciality_id']= 3){
         ##            header("Location: viewRecordClientsAffaire.php");
        ##   die();
        ##  }


       }
   }

?>

<h1 class="text-center"><?php echo $title ?> </h1>
   
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <table class="table table-sm">
            <tr>
                <td><label for="email">Email: * </label></td>
                <td><input type="text" name="email" class="form-control" id="email" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['email']; ?>">
                </td>
            </tr>
            <tr>
                <td><label for="password">Password: * </label></td>
                <td><input type="password" name="password" class="form-control" id="password">
                </td>
            </tr>
        </table><br/><br/>
        <input type="submit" value="Login" class="btn btn-primary btn-block"><br/>
        <a href="#"> Mot de passe oublie </a>
            
    </form><br/><br/><br/><br/>

<?php include_once 'includes/footer.php'?>