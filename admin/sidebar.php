<?php 

$sql = "SELECT * FROM settings";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
	$create  = $row['create_site'];
?>

<!-- sidebar -->

<aside id="sidebar" class="column">

		<h3><!-- <img src="images/preferences-contact-list.png" style="width:18px;"> --><b> Les utilisateurs</b></h3>
		<ul class="toggle">
			<li><img src="images/user-group-new.png" style="width:25px;"><a href="new_user.php">Ajouter un nouvel utilisateur</a></li>
			<li><img src="images/Login-Manager.png"    style="width:25px;"><a href="users.php">Voir tous les utilisateurs      </a></li>
		</ul>

		<h3><!-- <img src="images/notepad-128.png" style="width:18px;"> --><b> Content (articles / sidebar)</b></h3>
		<ul class="toggle">
			<li><img src="images/document-new.png"   style="width:25px;"><a href="new_post.php">Ajouter un nouveau article</a></li>
			<li><img src="images/document-preview.png"   style="width:25px;"><a href="post.php">Voir tous les articles        </a></li>
			<li><img src="images/application_form_edit.png" style="width:25px;"><a href="sidbar.php">Sidebar (Column droit)      </a></li>
		</ul>

		<h3><!-- <img src="images/category.png" style="width:16px;"> --><b> Les catégories</b></h3>
		<ul class="toggle">
			<li><img src="images/categoty.png" style="width:25px;"><a href="category.php">Tous les catégories </a></li>
		</ul>

		<h3><!-- <img src="images/folder.png" style="width:18px;"> --><b> Gestionnaire de fichiers</b></h3>
		<ul class="toggle">
			<li><img src="images/synfig_icon.png" style="width:25px;"><a href="slider.php">Gestion du Sliders  </a></li>
			<li><img src="images/camera-photo-128.png" style="width:25px;"><a href="gallery.php">Gestion du Galeries</a></li>
			
		</ul>

		<h3><!-- <img src="images/settings.png" style="width:18px;"> --><b> LES PARAMÈTRES GÉNÉRALE</b></h3>
		<ul class="toggle">
            <li><img src="images/config.png"  style="width:25px;"><a href="option.php">Les options de site      </a></li>
            <li><img src="images/comment_facebook_box.png"   style="width:25px;"><a href="social.php">Liens Social network      </a></li>
            <li><img src="images/contact.png" style="width:25px;"><a href="contact.php">Contact informations</a></li>
			<li><img src="images/Remove-Male-User.png"     style="width:25px;"><a href="../logout.php">Se Déconnecter    </a></li>
		</ul>
		

			<hr/>
			<p>Ce site create par <b>:</b> <br><b><?php echo $create;?></b></p>
			<p><b>Copyright &copy; 2015 Lycée Albadissi</b></p>
			 
<?php
}
?>
<div class="spacer"></div>
			<div class="spacer"></div>
     <footer></footer>
			

	</aside><!-- end of sidebar -->