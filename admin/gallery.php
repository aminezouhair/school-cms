<?php include_once("header.php");
include_once("sidebar.php");
?>

<?php 

if(isset($_SESSION['username']))
{
  $uname = $_SESSION['username'];

     if (isset($_POST['ajoute'])) 
        {

        $path  = $_FILES['file']['tmp_name'];  
        $name  = $_FILES['file']['name'];      // le nom d'image
        $size  = $_FILES['file']['size'];      // size d'image
        $type  = $_FILES['file']['type'];      // type d'image
        $error = $_FILES['file']['error'];     

        $updir  = "../images/gallery/";      // le dosier pour uploader l'images
        $upfile = $updir.$name;    
        $img    = $upfile;               


            if ($path == '') //  == '' : vide ou non
               {   
               echo '<h4 class="alert alert-danger"><center>
                     <b> Désolé '.$_SESSION['username'].' <img src="images/72_EmoticonsHDcom.png" style="width:50px;"> mais il n\'a rien selctioner une image de gallery!</b></center></h4>';
                }

                  elseif($type != "image/jpg" && $type != "image/png" && $type != "image/jpeg" && $type != "image/gif" ) // vérification format fichier sélectionnez
                             {  
                             echo '<h4 class="alert alert-danger"><center>
                              <b> Désolé '.$_SESSION['username'].' <img src="images/50_EmoticonsHDcom.png" style="width:50px;"> 
                                  seuls les images: JPG, JPEG, PNG, GIF sont autorisés.</b></center></h4>';     
                             } 

                             elseif(file_exists($upfile))  // vérification fichier est ce que deja uploader au server ou no
                                {       
                                echo '<h4 class="alert alert-danger"><center>
                                      <b> Désolé '.$_SESSION['username'].' <img src="images/50_EmoticonsHDcom.png" style="width:50px;"> 
                                      Mais cette image existe déjà au meme nom!</b></center></h4>';
                                }

                                        else 
                                           {
                                            $sql = "INSERT INTO galeries (img_galerie)  VALUES ('$img')";

                                           move_uploaded_file($path, $upfile);

                                           echo '<h4 class="alert alert-success"><center><img src="images/69_EmoticonsHDcom.png" style="width:50px;">
                                                 <b> A été successfully ajoutée l\'image de gallery.</b></center></h4>';
                                           }

           
        }
}

////////////////////////////
?>

	
	<section id="main" class="column">

        <h4 class="alert_info">Cette page pour ajouter ou suprimer les gallery.</h4>

        <article class="module width_full">
			<header><h3><img src="images/camera-photo-128.png" style="width:18px;"> <b>Gerer les gallery</h3></header>

				<table border="0">
					<tr>
						<td> <h2> <img src="images/camera-photo-128.png" style="width:48px;"> <b> Ajouter nouveau image: </b></h2> </td>
						<td> 
                            <form action="gallery.php" method="post" enctype="multipart/form-data">
    						     <input type="file" name="file"><br>
    				             <input type="submit" name="ajoute" value="ajouter l'image">
    						</form>
                        </td>
					</tr>
				</table> 

				

				<hr>

				<div class="row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                        <img src="../images/demo/mqdefault.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                        <img src="../images/demo/mqdefault.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                        <img src="../images/demo/mqdefault.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                        <img src="../images/demo/mqdefault.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                        <img src="../images/demo/mqdefault.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                        <img src="../images/demo/mqdefault.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                        <img src="../images/demo/mqdefault.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                        <img src="../images/demo/mqdefault.jpg" alt="">
                        </a>
                    </div>


		</article><!-- end of post new article -->
    		

    <div class="spacer"></div>
	</section>



</body>

</html>