<?php 
include_once("header.php");
include_once("sidebar.php"); 

/////////////////////////

if (isset($_POST['submit'])) 
{
	$updateQuery = "UPDATE sidebar SET titre='$_POST[titre]', lien='$_POST[lien]', img='$_POST[img]' WHERE titre ='$_POST[hidden]' ";

	mysqli_query($con,$updateQuery);

	echo '<h4 class="alert alert-success"><center><img src="images/free-05-48.png" style="width:50px;">
	      <b> A été successfully mise a jour Sidebar.</b></center></h4>';
}

//////////////


?>
	<section id="main" class="column">
		
		<h4 class="alert_info">Cette page pour modifier les donne dans le sidebar droit.</h4>
		
			
	    <article class="module width_full">
			<header><h3> <img src="images/layout_sidebar.png" style="width:18px;"> <b>Sidebar (Column droit)</b> </h3></header>
                   
                <table class="tablesorter" cellspacing="0">
                        <thead> 
                                <tr>
                                    <th><center>Postion</center></th>
                                    <th><center>Titre</center></th>
                                    <th><center>Image</center></th>
                                    <th><center>Lien</center></th>  
                                </tr> 
                        </thead> 

                        <tbody>

							<?php 
							$sql = "SELECT * FROM sidebar";
							$result = mysqli_query($con, $sql);
							
							while ($row = mysqli_fetch_array($result)) {
								    $id = $row['id'];
								 $titre = $row['titre'];
								  $lien = $row['lien'];
								   $img = $row['img'];
							?>

	                        <form action="sidbar.php" method="post"> 
	                            <tr> 
	                                <td><center><b>Position <?php echo $id;?></b> </center></td>
	                                <td><center><input type="text" name="t1" value="<?php echo $titre;?>" placeholder="Titre postion 1"></center></td>    
	                                <td><center><input type="text" name="i1" value="<?php echo $img;;?>" placeholder="image postion 1"></center></td>
	                                <td><center><input type="text" name="l1" value="<?php echo $lien;;?>" placeholder="lien postion 1"></center></td> 
	                            </tr> 

	                        <form>

                            <?php } ?>

	                        <input type="hidden" name="hidden" value="<?php echo $titre;?>">
	                        <input type="submit" name="update" value="Enregestrer">	
                   </tbody> 
                </table>
	

		</article><!-- end of styles article -->

		<div class="spacer"></div>
	</section>