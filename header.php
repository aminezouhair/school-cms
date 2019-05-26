<?php 
include_once("config.php");


if(!isset($_SESSION['username']))  
{ 
  echo '
  <h4 class="alert alert-info"> <center> <b> Bienvenu visiteur <img src="admin/images/19_EmoticonsHDcom.png" style="width:40px;"> .. <a href="register.php"> Inscription maintenant <img src="admin/images/user_addD.png"></a> ou <a href="login.php"> Login ici  <img src="admin/images/group_key.png"  style="width:40px;"></a> </b> </center> </h4>'; 
} 

    $sql = "SELECT * FROM settings";
    /*$sql2 = "SELECT * FROM users";*/
    $result = mysqli_query($con, $sql);
    /*$result2 = mysqli_query($con, $sql2);*/

    while ($row = mysqli_fetch_array($result)/* && $row = mysqli_fetch_array($result2)*/) 
    {
          $name  = $row['name_site'];
          $sub   = $row['subtitle'];
         /* $level = $row['level'];*/

?>


<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- CSS --> 
        <link rel="stylesheet" href="layout/styles/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="layout/styles/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="layout/styles/style.css" type="text/css"  media="all">

        <!-- JAVASCRIPTS --> 
        <script src="layout/styles/bootstrap.min.js"></script>
        <script src="layout/styles/bootstrap.js"></script>
        <script src="layout/styles/Login.js"></script>

        <!-- jqeury --> 
        <script src="layout/scripts/jquery.min.js"></script> 
        <script src="layout/scripts/jquery.fitvids.min.js"></script> 
        <script src="layout/scripts/jquery.mobilemenu.js"></script> 
        <script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>

</head>

<body id="top">
<!-- ################################################################################################ --> 
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
        <ul>

            <?php 

                if (!empty($_SESSION['username']) && $_SESSION['username'] == 'houda') 
                {
                  echo '
                        <li><img src="admin/images/user_student_female.png" style="width:25px;"> Bienvenu: '.ucfirst($_SESSION["username"]).' </li>
                        <li><a href="admin/index.php" target="_blank"><img src="admin/images/google_webmaster_tools.png" style="width:22px;"> Admin Control Panel</a></li>
                        <li><a href="admin/new_post.php" target="_blank"><img src="admin/images/document-new.png" style="width:22px;"> Ajouter un nouveau article</a></li>
                        <li><a href="compte.php" ><img src="admin/images/user_edit.png" style="width:25px;"> Mon compte</a></li>
                        <li><a href="logout.php" > <img src="admin/images/user_deleteE.png" style="width:25px;"> Se déconnecter</a></li>
                      ';
                } 
                   elseif (!empty($_SESSION['username']) && $_SESSION['username'] != 'houda') 
                     {
                        echo '
                            <li><img src="admin/images/user_student_female.png" style="width:25px;"> Bienvenu: '.ucfirst($_SESSION["username"]).' </li>
                            <li><a href="compte.php" > Mon compte <img src="admin/images/user_edit.png" style="width:25px;"></a></li>
                            <li><a href="logout.php" > Se déconnecter <img src="admin/images/user_deleteE.png" style="width:25px;"></a></li>
                            ';
                      }

                          else 
                          {

                           echo '
                                  <li><a href="index.php" > Accueil <img src="admin/images/home.png" style="width:22px;"></a></li>
                                  <li><a href="login.php" > Login <img src="admin/images/group_key.png" style="width:25px;"></a></li>
                                  <li><a href="register.php" > inscription <img src="admin/images/user_addD.png" style="width:25px;"></a></li>
                                  <li><a href="contact.php" > Contactez nous <img src="admin/images/contact.png" style="width:25px;"></a></li>
                                ';
                          }

            ?>
                                                        
        </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php"><?php echo $name; ?></a></h1>
      <p><?php echo $sub; ?></p>
    </div>

<?php
}
?>

    <div class="fl_right">
      <form class="clear" method="post" action="">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Recherche ici">
          <button class="fa fa-search" type="submit" title="Recherche"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php"><img src="admin/images/home.png" style="width:32px;">&nbsp; Accueil</a></li>
        <li><a class="drop" href="cat.php?cat=1"><img src="admin/images/678086-institution-128.png" style="width:32px;">&nbsp; Lycee</a>
          <ul>
            <li><a href="map.php"> Maps Lycee </a></li>
            <li><a href="article.php?article=39"> Presentation </a></li>
            <li><a href="article.php?article=36"> Mot du Directeur </a></li>
            <li><a href="article.php?article=38"> Administration </a></li>

          </ul>
        </li>


        <li><a class="drop" href="cat.php?cat=3"><img src="admin/images/x-office-presentation-128.png" style="width:32px;">&nbsp; instructions</a>
          <ul>
             <li><a href="article.php?article=40"> Anounces </a></li>
          </ul>
        </li>

        <li><a href="gallery.php"><img src="admin/images/orange-folder-image.png" style="width:32px;">&nbsp; Gallery </a></li>

        <li><a href="article.php?article=38"><img src="admin/images/Login-Manager.png" style="width:32px;">&nbsp; Espace Etudiant </a></li>
        
        <li><a href="contact.php"><img src="admin/images/contact.png" style="width:32px;">&nbsp; Contact </a></li>
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>




