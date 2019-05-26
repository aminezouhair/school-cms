<?php 
include_once("header.php");
include_once("sidebar.php");
?>

<?php 
if(!empty($_POST)) 
{
	if (isset($_POST['submit_cat'])) 
	{

		$category  = trim(ucfirst($_POST['txt_cat']));

		$records = array();

		$res = $con->query("SELECT * FROM categories WHERE category = '$category' ");
        $row = $res->fetch_object();

		if($res->num_rows > 0 ) 
		{
			echo "<h4 class='alert alert-danger'> <center><img src='images/dialog-warning-128.png' style='width:48px;'> cette nom de categorie: <u>\"".$category."\"</u>, déjà ajouté! .. Entrer un autre. </center> </h4>";
		}

		elseif ( !empty($category)) 		   
		    {
				$insert = $con->prepare("INSERT INTO categories (category) VALUES (?)");
				$insert ->bind_param('s',$category);

			  if ($insert->execute()) 
			    {
				echo '<h4 class="alert alert-success"> <center><img src="images/free-05-48.png" style="width:48px;">  A été successfully ajouter categorie: <u>"'.$category.'"</u>. </center> </h4>';
			    }
		   }
	}
}




$records = array();

if($results = $con->query("SELECT * FROM categories")) 
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
		
		<h4 class="alert_info">Cette page pour afficher les Catégories, ajouter ou supprimer catégorie.</h4>
		
		
		<article class="module width_full">
		<header><h3 class="tabs_involved"><img src="images/categoty.png" style="width:18px;"> Tous les Catégories</h3> </header>

		<table class="tablesorter" cellspacing="0"> 
		                                               
				<tr> 
				    
				    <form action="" method="post">
				         
				        <td><b><img src="images/folders_explorer.png" style="width:40px;">&nbsp;&nbsp;&nbsp; Ajouter nouveau categorie:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				            <input type="test" name="txt_cat" placeholder="enter le nom de categorie" autofocus>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				            <input type="submit" name="submit_cat" value="Ajouter le categorie">
				        </td>
				        
				    </form> 
				 
				</tr>

		</table>
	
		<table class="tablesorter" cellspacing="0"> 

				<?php 
				    if(!count($records)) 
				{
				    echo "<br><center><h4>Il n'y a pas d'article, C'est vide !</h4></center>";
				} else 
				{
				?>  
				    <thead>
					        <tr>
						            <th></th>
						            <th> ID </th>
						            <th><center><b> Categories </b></center></th>
						            <th><center><b> Nombre articles </b></center></th>
						            <th><center> Supprimer </center></th>
					        </tr>
				    </thead>

				    <tbody>

					        <?php 
					        foreach ($records as $r) {
					        ?>

					        <tr>
						            <td> <img src="images/categoty.png"> </td>
						            <td> <?php echo $r->id_category; ?> </td>
						            <td><center> <?php echo $r->category; ?> </center></td>
						            <td><center> <!-- <?php echo $r->id_article; ?>-->0 articles </center></td>
						            <td><center><input type="submit" name="deletebtn" value="Supprimer [<?php echo $r->category; ?>]"></center></td>        
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