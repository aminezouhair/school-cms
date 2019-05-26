<?php 
include_once("header.php");
include_once("sidebar.php"); 


if (isset($_POST['submit'])) 
{
	$updateQuery = "UPDATE settings SET create_site='$_POST[create_site]', name_site='$_POST[name_site]', subtitle='$_POST[subtitle]', 
					                    url_site='$_POST[url_site]', desc_site='$_POST[desc_site]',
					                    tags_site ='$_POST[tags_site]', open_site='$_POST[open_site]',  
					                    msgclose_site ='$_POST[msgclose_site]' WHERE name_site ='$_POST[hidden]' ";

	mysqli_query($con,$updateQuery);

	echo '<h4 class="alert alert-success"><center><img src="images/free-05-48.png" style="width:50px;">
	      <b> A été successfully mise a jour les paramètres Générale.</b></center></h4>';

}

$sql = "SELECT * FROM settings";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
	$create  = $row['create_site'];
	$name    = $row['name_site'];
	$sub     = $row['subtitle'];
	$url     = $row['url_site'];
	$desc    = $row['desc_site'];
	$tags    = $row['tags_site'];
	$msg     = $row['msgclose_site'];

?>

 

    <section id="main" class="column">
		

		<h4 class="alert_info">Cette page pour Modifier Les paramètres Générale de site</h4>
		
			
	<article class="module width_full">
			<header><h3> <img src="images/config.png" style="width:20px;"> <b> Les paramètres Générale de site</b></h3></header>

			<div class="module_content">
 
  
			    <form method="post" >
				    <table width="100%" border="0">

				        <tr>
							<td> <img src="images/67_EmoticonsHDcom.png" style="width:32px;"> <b>Ce site create par :</b>
							<br>
						    <br>

							</td>
							<td>
								 <input type="text" name="create_site" value="<?php echo $create;?>" size="45%" autofocus>
								 <br>
								 <br>
							</td>
						</tr>


						<tr>
							<td> <img src="images/fonts.png" style="width:32px;"> <b>Titre du site :</b>
								<br>
								<br>
							</td>							
							<td>
								 <input type="text" name="name_site" value="<?php echo $name; ?>" size="45%" autofocus> 
								 <br>
								 <br>
							</td>
						</tr>
						
						<tr>
							<td> <img src="images/format-text-underline-128.png" style="width:32px;"> <b>Soustitre du site :</b>
								<br>
								<br>
							</td>							
							<td>
								 <input type="text" name="subtitle" value="<?php echo $sub; ?>" size="45%" autofocus> 
								 <br>
								 <br>
							</td>
						</tr>

						<tr>
							<td> <img src="images/system-software-update-128.png" style="width:32px;"> <b>Lien princiapl de site :</b>
								<br>
								<br>
							</td>
							<td>
								 <input type="text" name="url_site" value="<?php echo $url; ?>" size="45%" autofocus>
								 <br>
								 <br>
							</td>
						</tr>
						

                        <tr>
							<td> <img src="images/x-office-presentation-128.png" style="width:32px;"> <b>Description de site :</b>
							<br>
							<br>

							</td>
							<td>
								 <textarea name="desc_site" cols="60%" rows="4" autofocus><?php echo $desc; ?></textarea>
								 <br>
								 <br>
							</td>
						</tr>
						

                        <tr>
							<td> <img src="images/edit-find-replace-128.png" style="width:32px;"> <b>Les Mots clés de site :</b>
							<br>
						    <br>

							</td>
							<td>
							     <textarea name="tags_site" cols="60%" rows="4" autofocus><?php echo $tags;?></textarea>
								 <br>
								 <br>
							</td>
						</tr>


						<tr>
							<td> <hr> <img src="images/preferences-desktop-cryptography.png" style="width:32px;"> <b>Fermer ou active le site :</b>
							<br>
							<br>

							</td>
							<td><hr>
								 <select name="open_site" autofocus>
								 	<option value='active' selected> Le site active </option>
                                    <option value='ferme'> Le site ferme  </option>

								 </select>
								 <br>
								 <br>

							</td>
						</tr>
						


						<tr>
							<td> <img src="images/system-lock-screen-128.png" style="width:32px;"> <b>Ce message Afficher après fermer le site :</b>
							<br>
							<br>

							</td>
							<td>
								 <textarea name="msgclose_site" cols="60%" rows="4" autofocus><?php echo $msg; ?></textarea>
								 <br>
								 <br>
							</td>
						</tr>

						<tr>
							<td> <input type="hidden" name="hidden" value="<?php echo $name;?>">
							<br>
							<br>

							</td>
							<td>
								 <input name="submit" type="submit" value="Enregistrer les paramètres" >
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