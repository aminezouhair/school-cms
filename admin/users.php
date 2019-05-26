<?php 
include_once("header.php");
include_once("sidebar.php"); 
?>


<?php 

// $records = array();
// $date = date_create($row['datereg']);
if($results = $con->query("SELECT * FROM users")) 
{ 
    if($results->num_rows)
    {
        while ($row = $results->fetch_object()) 
        {
            $records[] = $row;
        }

        $results->free();
    }
}

?>

    <section id="main" class="column">
		

		<h4 class="alert_info">Cette page pour Afficher tous les utilisateurs,<a href="new_user.php"> Ajouter un nouvel utilisateur</a></h4>
		

    <article class="module width_full">
    <header><h3 class="tabs_involved"><img src="images/678109-profile-group-128.png" style="width:18px;"><b> Tous les utilisateurs</b></h3>
    
    </header>

 
    <table class="tablesorter" cellspacing="0">

<?php 
    if(!count($records)) 
{
    echo "<br><center><h4>Il n'y a pas utilisateurs, C'est vide !</h4></center>";
} else 
{
?>  
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Username</th>
            <th>Classe</th>
            <th>Date Registre</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($records as $r) {
        ?>
        <tr>
            <td> <?php 
            if($r->genre == 'Femme') {echo '<img src="images/user_student_female.png"  style="width:25px;">';} else {echo '<img src="images/user_student.png"  style="width:25px;">';} 
            ?> </td>
            <td> <?php echo $r->id; ?> </td>
            <td> <?php echo $r->prenom; ?> </td>
            <td> <?php echo $r->nom; ?> </td>
            <td> <?php echo $r->email ; ?> </td>
            <td> <?php echo $r->username; ?> </td>
            <td> <?php echo $r->classe; ?> </td>
            <td> <?php echo $r->datereg; ?> </td>
            <td> <img src='images/Remove-Male-User.png' style='width:20px;'> <!-- <input type="submit" name="deletebtn" value="Suprimer"> -->
            </td> 
                
        </tr>
        <?php 
        }
        ?>
    </tbody>

</table>
<?php 
}
?>

    
    </article><!-- end of content manager article -->


		<div class="spacer"></div>
	</section>

</body>

</html>