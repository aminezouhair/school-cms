<?php 
include_once("header.php");
include_once("sidebar.php"); 

// $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

// if ($con->query($sql) === TRUE) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . $con->error;
// }

?>


<?php 

if(isset($_POST['submit']))  
{ 

$path  = $_FILES['file']['tmp_name'];  
$name  = $_FILES['file']['name'];      // le nom d'image
$size  = $_FILES['file']['size'];      // size d'image
$type  = $_FILES['file']['type'];      // type d'image
$error = $_FILES['file']['error'];     

$updir  = "../images/slider/";      // le dosier pour uploader l'images
$upfile = $updir.$name;                 


    if ($path == '') //  == '' : vide ou non
       {   
       echo '<h4 class="alert alert-danger"><center>
             <b> Désolé '.$_SESSION['username'].' <img src="images/72_EmoticonsHDcom.png" style="width:50px;"> mais il n\'a rien selctioner une image de slider!</b></center></h4>';
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
                   
                            elseif($size > 3000000) 
                                  {
                                  echo '<h4 class="alert alert-danger"><center><img src="images/69_EmoticonsHDcom.png" style="width:50px;">
                                        <b> Désolé, votre fichier est trop volumineux! Max size: 3Mb.</b></center></h4>';
                                  }

                                    else 
                                       {
                                       move_uploaded_file($path, $upfile);

                                       echo '<h4 class="alert alert-success"><center><img src="images/69_EmoticonsHDcom.png" style="width:50px;">
                                       <b> A été successfully ajoutée l\'image de slider.</b></center></h4>';
                                       }
}

?>

    
    <section id="main" class="column">

        <h4 class="alert_info">Cette page pour ajouter ou suprimer photo slider, La taille photo slider est: 960px * 450px.</h4>

    <article class="module width_full">

            <header><h3><img src="images/synfig_icon.png" style="width:18px;"> <b>Gerer Slider</b></h3></header>
        
                    <table class="tablesorter" cellspacing="0"> 
                            <tr>
                                <td>
                                   <h2> <img src="images/synfig_icon.png" style="width:48px;"><b> Upload image slide:</b></h2> 
                                </td>

                                <td>
                                    <form action="slider.php" method="post" enctype="multipart/form-data">                     
                                           <input type="file" name="file"> <br>
                                           <input type="submit" name="submit" value="ajouter photo">
                                    </form>                 
                                </td>

                                <td>
                                    <center>
                                            <select>
                                                    <option selected disabled>Selecte la position</option>
                                                    <option value="1">Position 1</option>
                                                    <option value="2">Position 2</option>
                                                    <option value="3">Position 3</option>
                                                    <option value="4">Position 4</option>
                                                    <option value="5">Position 5</option>
                                            </select>
                                    </center>
                                </td>
                            </tr>
                    </table>
                                      
                    <table class="tablesorter" cellspacing="0">
                            <thead> 
                                    <tr>
                                        <th><center>Postion</center></th>
                                        <th><center>image</center></th>
                                        <th><center>Actions</center></th> 
                                    </tr> 
                            </thead> 

                            <tbody>
                                <tr> 
                                    <td><center>Position 1 </center></td>
                                    <td><center><a href="#"><img src="../images/slider/1.png" style="width:300px;"></a></center></td>    

                                    <td><center><input type="submit" name="deletebtn" value="suprimer cette photo"></center></td> 
                                </tr> 
                                
                                <tr> 
                                    <td><center>Position 2 </center></td>
                                    <td><center><a href="#"><img src="../images/slider/2.png" style="width:300px;"></a></center></td>    
                                    <td><center><input type="submit" name="deletebtn" value="suprimer cette photo"></center></td> 
                                </tr> 
                                <tr>
                                    <td><center>Position 3 </center></td> 
                                    <td><center><a href="#"><img src="../images/slider/3.png" style="width:300px;"></a></center></td>    
                                    <td><center><input type="submit" name="deletebtn" value="suprimer cette photo"></center></td> 
                                </tr> 
                                <tr> 
                                    <td><center>Position 4 </center></td>
                                    <td><center><a href="#"><img src="../images/slider/4.png" style="width:300px;"></a></center></td>     
                                    <td><center><input type="submit" name="deletebtn" value="suprimer cette photo"></center></td> 
                                </tr> 
                                <tr> 
                                    <td><center>Position 5 </center></td>
                                    <td><center><a href="#"> <img src="../images/slider/5.png" style="width:300px;"></a></center></td>    
                                    <td><center><input type="submit" name="deletebtn" value="suprimer cette photo"></center></td> 
                                </tr> 
                            </tbody> 
                    </table>


        
    </article><!-- end of content manager article -->

    <div class="spacer"></div>
    </section>



</body>

</html>