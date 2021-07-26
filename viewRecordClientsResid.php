<?php 
$title = 'Liste Utilisateurs';

require_once 'includes/header.php';
require_once 'database/conn.php';

$resultResidentiel = $crud -> getAttendeesResidentiel();

?>

<table class = "table">
    <tr>
        <th># </th>
        <th>Email </th>
        <th>First name </th>
        <th>Last name </th>
        <th>Actions </th>

    </tr>
    <h1>Préposé clients residentiels</h1>
    <?php while($r =$resultResidentiel -> fetch(PDO::FETCH_ASSOC)) {?>

        <tr> 
            <td> <?php echo $r['userid']?>  </td> 
            <td> <?php echo $r['Email']?>  </td> 
            <td>  <?php echo $r['firstname']?> </td> 
            <td>  <?php echo $r['lastname']?> </td> 
            <td>  <a href = "view.php?id=<?php echo $r['userid']?> " class = "btn btn-primary">Afficher</a>
            <a href = "edit.php?id=<?php echo $r['userid']?> " class = "btn btn-warning">Modifier</a>
            <a href = "delete.php?id=<?php echo $r['userid']?> " class = "btn btn-danger">Supprimer</a>

        </td> 

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

  