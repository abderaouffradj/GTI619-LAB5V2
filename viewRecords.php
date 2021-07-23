<?php 
$title = 'Liste Utilisateurs';

require_once 'includes/header.php';
require_once 'database/conn.php';

$resultResidentiel = $crud -> getAttendeesResidentiel();
$resultAffaire = $crud ->getAttendeesAffaire();

?>

<table class = "table">
    <tr>
        <th>Email </th>
        <th>First name </th>
        <th>Last name </th>
        <th>Actions </th>

    </tr>
    <?php while($r =$resultResidentiel -> fetch(PDO::FETCH_ASSOC)) {?>
        
        <tr>
            <td> <?php echo $r['Email']?>  </td> 
            <td>  <?php echo $r['firstname']?> </td> 
            <td>  <?php echo $r['lastname']?> </td> 
            <td>  <a href = "view.php" class = "btn btn-primary">Modifier</a> </td> 

        </tr>
        <?php }?>
    <tr>
    </tr>
</table>

<table class = "table">
    <tr>
        <th>Email </th>
        <th>First name </th>
        <th>Last name </th>
        <th>Actions </th>

    </tr>
    <?php while($r =$resultAffaire -> fetch(PDO::FETCH_ASSOC)) {?>
        
        <tr>
            <td> <?php echo $r['Email']?>  </td> 
            <td>  <?php echo $r['firstname']?> </td> 
            <td>  <?php echo $r['lastname']?> </td> 
            <td>  <a href = "view.php" class = "btn btn-primary">Modifier</a> </td> 

        </tr>
        <?php }?>
    <tr>
    </tr>
</table>





















<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>

  