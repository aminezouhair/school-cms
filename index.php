<?php 
include_once("header.php");   // 1 - header #######
include_once("slider.php");   // 2- Slider (5 photos on page principal)
?>


<!-- ##################################### 3- Body Complet      ############################################# -->
  <div class="wrapper row3">
    <div class="rounded">
      <main class="container clear">  

     
       

      <!-- ############################### 4- articles Column (main body)     ################################# -->
        <div class="two_third first"> 

              <ul class="nospace listing">


          <?php  $sql = "SELECT categories.*, articles.* FROM categories, articles WHERE articles.id_category=categories.id_category ORDER BY id_article DESC LIMIT 3";
                 $result = mysqli_query($con, $sql);
                
                 while ($row = mysqli_fetch_assoc($result)) 
                 {
                    $id      = $row['id_article'];
                    $titre   = ucfirst($row['titre_article']);
                    $content = strip_tags($row['content_article']);
                    $img     = $row['img_article'];
                    $tags    = $row['tags_article'];
                    $date    = date("d F Y",strtotime($row['date_article']));
                    $author  = $row['author'];
                    $id_cat  = $row['id_category'];
                    $cat     = $row['category'];  

                    $article = substr($content, 0, 300); 
            ?>

                  <li class="clear">

                            
                    <p class="nospace btmspace-15"><img src="admin/images/Index.png" style="width:25px;">&nbsp;&nbsp;<a href="article.php?article=<?php echo $id;?>"><?php echo '<b>'.$titre.'</b>';?></a></p>
                    <div class="imgl borderedbox"> <a href="article.php?article=<?php echo $id;?>"><img src="images/<?php echo $img;?>" style="width:150px;height:135px;"></a> </div>
                    <p><b><img src="admin/images/sheduled_task.png" style="width:16px;">&nbsp;<?php echo $date;?>&nbsp;|
                    <img src="admin/images/user_edit.png" style="width:16px;">&nbsp;Auteur: <?php echo ucfirst($author); ?>&nbsp;|
                    <img src="admin/images/folders_explorer.png" style="width:16px;">&nbsp;Category: <a href="cat.php?cat=<?php echo $id_cat;?>"><?php echo ucfirst($cat); ?></a></b></p>
                    <p> <?php echo $article; ?> </p>
                    <p style="text-align:right"><b>
                    <?php if(!empty($_SESSION['username']) && $_SESSION['username'] == 'houda')  { echo '<a href="admin/index.php"><img src="admin/images/notepad-128.png" style="width:16px;"> <u>Modifier</u> </a>'; } ?>
                    <?php if(!empty($_SESSION['username']) && $_SESSION['username'] == 'houda')  { echo '&nbsp;&nbsp;|&nbsp;&nbsp; <a href="admin/index.php">  <img src="admin/images/icn_alert_error.png" style="width:16px;"> <u>Suprimer</u></a>'; } ?>
                    <?php if($content > $article) {echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                         <a href=article.php?article='.$id.'>Lire la suite >></a>'
                                                   ;} ?>
                    </b></p>
                    
  
                  </li>
                  
              <?php  }  ; ?>

              </ul>
              <br><p class="right"><a href=""></a></p>
              
        </div>
      <!-- ############################### 4- End articles Column (main body) #################################--> 




      <!-- ############################### 5- Sidebar right Column     ######################################## --> 
          
          <?php include_once("sidebar.php"); ?>
      <!-- ############################### 5- End Sidebar right Column ######################################## --> 




        <div class="clear"></div>
      </main>
    </div>
  </div>

<!-- ##################################### 3- End Body Complet  ############################################# -->


<!-- ##################################### 6- Footer     #################################################### --> 

     <?php include_once("footer.php"); ?>
<!-- ##################################### 6- End Footer #################################################### --> 