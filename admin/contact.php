<?php 
include_once("header.php");
include_once("sidebar.php"); 


/* -----------  mise a jour   -----------------*/
if (isset($_POST['submit'])) 
	{
	    $updateQuery = "UPDATE settings SET contact='$_POST[contact]', phone='$_POST[phone]', map='$_POST[maps]', 
					                        adresse='$_POST[adresse]' WHERE contact ='$_POST[hidden]' ";

	    if(mysqli_query($con,$updateQuery)) 
	    {
		    echo '<h4 class="alert alert-success"><center><img src="images/free-05-48.png" style="width:50px;">
		    <b> A été successfully mise a jour les informations contact.</b></center></h4>';
	    }
	        else 
			    {
			    	echo '<h4 class="alert alert-danger"><center><img src="images/dialog-warning-128.png" style="width:50px;">
			        <b> Problem mise a jour les informations contact !</b></center></h4>';
			    }
	}



/* -----------  istikhraj les donnees mn table 'settings'   -----------------*/

$sql = "SELECT * FROM settings";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
	$contact = $row['contact'];
	$adresse = $row['adresse'];
	$phone   = $row['phone'];
	$map     = $row['map'];


?>
 

    <section id="main" class="column">
		

		<h4 class="alert_info">Cette page pour Modifier Les informations contact lycee Al Badissi</h4>
		
			
	<article class="module width_full">
			<header><h3><img src="images/contact.png" style="width:18px;"> <b> Les informations du contact</b></h3></header>

			<div class="module_content">

  
			    <form method="post" >

				    <table width="100%" border="0">

						<tr>
							<td><img src="images/mail.png" style="width:32px;">  <b>Contact adress :</b>
							     <br>
								 <br>

							</td>
							<td>
							     <input type="text" name="contact" value="<?php echo $contact; ?>" size="45%" autofocus>
								 <br>
								 <br>
							</td>
						</tr>

						<tr>
							<td><img src="images/phone-old-32.png" style="width:32px;">  <b>Phone :</b>
							     <br>
								 <br>

							</td>
							<td>
							     <input type="text" name="phone" value="<?php echo $phone; ?>" size="45%" autofocus>
								 <br>
								 <br>
							</td>
						</tr>

						<tr>
							<td><img src="images/map-32.png" style="width:32px;">  <b>Maps Lycee :</b>
							     <br>
								 <br>

							</td>
							<td>
							     <input type="text" name="maps" value="<?php echo $map; ?>" size="45%" autofocus>
								 <br>
								 <br>
							</td>
						</tr>

						<tr>
							<td><img src="images/678086-institution-128.png" style="width:32px;">  <b>Adresse Lycee :</b>
							     <br>
								 <br>
							</td>

							<td>
							     <textarea name="adresse" cols="60%" rows="4" autofocus><?php echo $adresse;?></textarea>
								 <br>
								 <br>
							</td>
						</tr>
						
						<tr>
							<td> <input type="hidden" name="hidden" value="<?php echo $contact; ?>">
							     <br>
								 <br>

							</td>
							<td>
							     <input type="submit" name="submit" value="Enregistrer Les informations" >
								 <br>
								 <br>
							</td>
						</tr>

				    </table>

                     
				    <br>
					<br>
		        </form>	
<?php
}
?>
		    </div>

	</article>

	<!-- end option -->


		<div class="spacer"></div>
	</section>

</body>

</html>