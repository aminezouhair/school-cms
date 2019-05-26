<?php 
include_once("header.php"); 
include_once("sidebar.php");  
?>
	
	<section id="main" class="column">
		
		<h4 class="alert_info">Bienvenue sur le panneau d'administration ..</h4>
		
		
		<div class="clear"></div>
		
		
		
		
		<article class="module width_full">
			<header><h3>Page Accueil panneau d'administration </h3></header>
				<div class="module_content">
					<br><center><h1>Bienvenu <?php echo ucfirst($_SESSION['username'])?> au page d'acceuil d'administration de site.</h1></center>
					
					<ul>
						<li>HTML - CSS - avec Bootsrap framework - Javascript - Jquery. </li>
						<li>Utilise PHP et MYSQLI database.</li>
					</ul>
				</div>
		</article><!-- end of styles article -->

		<div class="spacer"></div>
	</section>


</body>

</html>