<?php
include_once("header.php");
include_once("sidebar.php");

////////////////////////////////////////////

if(isset($_SESSION['username']))
{
  $uname = $_SESSION['username'];

     if (isset($_POST['ajoute'])) 
        {
            $path  = $_FILES['img']['tmp_name'];  
			$name  = $_FILES['img']['name'];     
			$size  = $_FILES['img']['size'];     
			$type  = $_FILES['img']['type'];     
			$error = $_FILES['img']['error']; 

			$updir  = "../images/img_articles/";      // le dosier pour uploader l'images
            $upfile = $updir.$name;  
            
            $author   = $uname;
            $titre    = trim(ucfirst($_POST['titre']));
	        $content  = trim($_POST['content']); /*strip_tags addslashes */// $allow    = '';  /*, '<br><br/><a></a><b></b><u></u><hr></hr><img><i></i><h1></h1>');*/
            $img      = $upfile;	
			$tags     = trim($_POST['tags']);
			$category = trim($_POST['categori']);
			$etat     = trim($_POST['etat']);
			
            
			move_uploaded_file($path, $upfile);
			
	        $sql = "INSERT INTO articles (author,titre_article, content_article, img_article, tags_article, status_article, id_category, date_article) 
	                VALUES ('$author','$titre','$content','$img','$tags', '$etat','$category', NOW())";
	        
	      if(mysqli_query($con, $sql)) 
	        {

	           echo '<h4 class="alert alert-success"><center><img src="images/free-05-48.png" style="width:40px;">
               <b> Article ajoutee succefully</b></center></h4>';
            } 
              else 
	              	{ 
              		 echo '<h4 class="alert alert-danger"><center><img src="images/dialog-warning-128.png" style="width:40px;">
                          <b> problem ajouter l\'article</b></center></h4>';
	                }
	    }
	         
}
//////////////////////////////////////////
?>


<!DOCTYPE html>
<html>
<head>
	<title> Ajouter un article</title>

	<!-- Tinymce Editor -->
   <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
	   <script type="text/javascript">
	tinymce.init({
	    selector: "textarea#elm1",
	    valid_children : "+body[style],-body[div],p[strong|a|#text]",
	     plugins: [
         "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview media fullpage | forecolor backcolor emoticons", 
   

 }); 
  </script>
  <!-- end Tinymce Editor -->

</head>
<body>

	<section id="main" class="column">

        <h4 class="alert_info">Cette page pour ajouter nouveu des articles sur site Albadissi, voir tous les articles <a href="post.php"> ici </a></h4>

        <article class="module width_full">
			<header><h3>Publier Nouveau Article</h3></header>
				<div class="module_content">


				<form method="post" enctype="multipart/form-data">
				    
					    <img src="images/article-edit.png"> <b>Titre d'article:</b>&nbsp;&nbsp;&nbsp;
							     
							<input type="text" name="titre" value="" size="60%" placeholder="Ajouter le titre d'article" autofocus>
							     <br><br>
						<b> Content d'article:</b>
								 <br>
								 <!--  -->
							<textarea placeholder="Ajouter le contenu d'article" name="content" id="elm1"  cols="80%" rows="12" autofocus></textarea>
								 <br><br>
						<b> Image d'article:</b>&nbsp;&nbsp;&nbsp;
							     
							<input type="file" name="img" MAX_FILE_SIZE="30000" >
								 <br><br>
						<b> Les mots-cle d'article:</b>&nbsp;&nbsp;&nbsp;
							     
							<input type="text" name="tags" value="" size="60%" placeholder="Ajouter les mots cle d'article" autofocus>
							     <br><br>
							<b>catégorie d'article:</b>
							<select name="categori">
								<option value="1" selected>General</option>
								<option value="2">Lycee</option>
								<option value="3">Instructions</option>
								<option value="4">Anounces</option>
								<option value="5">Espace etudiant</option>
							</select>

                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          
							<b>État d'article:</b>
							<select name="etat"> 
								<option value="Publie" selected>Publie</option>
								<option value="En attente">En attente</option>
								<option value="Brouillon">Brouillon</option>
							</select>
						<br><hr>

				        <input type="submit" name="ajoute" value="Ajouter l'article" autofocus> <input type="reset" autofocus>


							
					

				</form>


				</div>
			
		</article><!-- end of post new article -->
    		

    <div class="spacer"></div>
	</section>



</body>

</html>