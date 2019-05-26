<?php 
include_once("header.php");
include_once("sidebar.php");


if(!empty($_POST)) 
{
	if (isset($_POST['prenom_user'],$_POST['nom_user'],$_POST['email_user'],$_POST['username_user'],$_POST['pass_user'],$_POST['genre_user'],$_POST['class_user'],$_POST['type_user'],$_POST['level_user'] )) 
	{

		$pnom  = trim(ucfirst($_POST['prenom_user']));
		$nom   = trim(ucfirst($_POST['nom_user']));
		$email = trim($_POST['email_user']);
		$uname = trim($_POST['username_user']);
		$pass  = trim($_POST['pass_user']);
		$genre = trim($_POST['genre_user']);
		$class = trim($_POST['class_user']);
		$type  = trim($_POST['type_user']);
		$level = trim($_POST['level_user']);


		$records = array();

		$res = $con->query("SELECT * FROM users WHERE username = '$uname' OR email = '$email' ");
        $row = $res->fetch_object();

		if($res->num_rows > 0 ) 
		{
			echo "<h4 class='alert alert-danger'> <center><img src='images/Male-User-Warning.png'> (Email) ou (Username) déjà réservé! .. Entrer un autre. </center> </h4>";
		}

		elseif ( !empty($pnom) && !empty($nom) && !empty($email) && !empty($uname) && !empty($pass) && !empty($genre) && !empty($class) && !empty($type) && !empty($level)) 		   
		    {
				$insert = $con->prepare("INSERT INTO users (prenom, nom, email, username, password,genre,classe,type,level,datereg) VALUES (?,?,?,?,?,?,?,?,?,NOW())");
				$insert ->bind_param('sssssssss',$pnom,$nom,$email,$uname,$pass,$genre,$class,$type,$level);

			  if ($insert->execute()) 
			    {
				echo '<h4 class="alert alert-success"> <center><img src="images/Accept-Male-User.png">  A été successfully registered "'.$uname.'", voir ici <a href="users.php">tous les utilisateurs<a></center> </h4>';
			    }
		   }
	}
}


 ?>


<!-- #################################  Form body  ##################################### -->

    <section id="main" class="column">
		

		<h4 class="alert_info">Cette page pour Ajouter un nouveau utilisateur</h4>
	
	    <article class="module width_full">


			<header><h3> Ajouter un nouveau utilisateur</h3></header>
				<div class="module_content">
					
			    <form method="post" >


	    
				<table width="100%" border="0">
					<tr>
							<td>
								<b>Prénom * :</b>
								<br>
								<br>
							</td>							
							<td>
								 <input type="text" name="prenom_user" value="" size="50%" placeholder="Prénom" tabindex="1" required="required" autofocus> 
								 <br>
								 <br>
							</td>
					</tr>
						

					<tr>
							<td>
								<b>Nom * :</b>
								<br>
								<br>
							</td>
							<td>
								 <input type="text" name="nom_user" value="" size="50%" placeholder="Nom" tabindex="2" required="required" autofocus>
								 <br>
								 <br>
							</td>
					</tr>
						

                    <tr>
							<td><b>Email * :</b>
							<br>
							<br>

							</td>
							<td>
								 <input type="email" name="email_user" value="" size="50%" placeholder="Email" tabindex="3" required="required" autofocus>
								 <br>
								 <br>
							</td>
					</tr>
						

                    <tr>
							<td><b>Username * :</b>
							<br>
						    <br>

							</td>
							<td>
							     <input type="text" name="username_user" value="" size="50%" placeholder="Username" tabindex="4" required="required" autofocus>
								 <br>
								 <br>
							</td>
					</tr>
					

					<tr>
							<td><b>Mot de pass * :</b>
							<br>
							<br>

							</td>
							<td>
								 <input type="password" name="pass_user" value="" size="50%" placeholder="Mot de pass" tabindex="5" required="required" autofocus>
								 <br>
								 <br>

							</td>
					</tr>
						
					<tr>
							<td><b>Le genre * :</b>
							<br>
							<br>

							</td>
							<td>
								 <input type="radio" name="genre_user" value="Homme" required="required" autofocus> Homme &nbsp; &nbsp;&nbsp;  
								 <input type="radio" name="genre_user" value="Femme" required="required" autofocus> Femme
								 <br>
								 <br>

							</td>
					</tr>


					<tr>
							<td> <b>Class * :</b>
								<br>
								<br>

							</td>
							<td>
								 <select name="class_user" required="required" autofocus>
								    <option disabled selected>Select la classe : </option>
								 	<option value='1er annee bts'>  1er année BTS  </option>
                                    <option value='2eme annee bts'> 2eme année BTS </option>
                                    <option value='Autre' >  Autre  </option>
								 	
								 </select>
									 <br>
									 <br>
							</td>
					</tr>

					<tr> 

							<td> <b>Type * :</b>
							<br>
							<br>

							</td>
							<td>
								 <select name="type_user" required="required" autofocus>
								    <option disabled selected>Select type utilisateur : </option>
								 	<option value='Etudiant' > Etudiant </option>
                                    <option value='Professeur'> Professeur </option>
                                    <option value='Autre'> Autre </option>
								 	
								 </select>
								 <br>
								 <br>
							</td>
					</tr>

					<tr>

							<td> <b>Niveau utilisateur * :</b>
							<br>
							<br>

							</td>
							<td>
								 <select name="level_user" required="required" autofocus>
								    <option value='user' selected> Utilisateur </option>
                                    <option value='admin'> Administrator </option>
								 	
								 </select>
								 <br>
								 <br>
							</td>
					</tr>
						    

				    </table>

                     <input name="submit" type="submit" value="Ajouter l'utilisateur" autofocus>
				    <br>
					<br>
		        </form>	
		
				</div>
	     	</article><!-- end of styles article -->


		<div class="spacer"></div>
	</section>

</body>

</html>