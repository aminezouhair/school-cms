<?php 
include_once("config.php");

if (!empty($_SESSION['username'])) 
    {
        echo "<script type='text/javascript'> location.href = 'index.php'; </script>";
        exit();
    }
    


if(!empty($_POST['login'])) 
    {
        if (isset($_POST['username'],$_POST['password'] )) 
        {

            $uname = strip_tags($_POST['username']);
            $pass  = strip_tags($_POST['password' ]);

            if(!empty($uname) && !empty($pass)) 
            {
                $res = $con->QUERY ("SELECT * FROM users WHERE username = '$uname' AND password = '$pass' ");
                $row = $res->fetch_array(MYSQLI_ASSOC);

                if ($res->num_rows > 0 )
                  {
                    $_SESSION['username'] = $uname;
                    echo '<h4 class="alert alert-success"> <center> Bienvenu <b>'.$row['prenom'].' '.$row['nom'].' </b>  <img src="admin/images/28_EmoticonsHDcom.png" style="width:40px;"></center> </h4>';
                    include_once("index.php");
                    // header('location: index.php');
                    echo "<script type='text/javascript'> setTimeout(\"location.href = 'index.php';\",4000); </script>";
                    exit;
      
                  } else 
                        {
                    echo '<h4 class="alert alert-danger"> <center> Votre username ou le mot de pass est incorrecte! <img src="admin/images/59_EmoticonsHDcom.png" style="width:40px;"></center> </h4>';
                        }

            }
        }
    }
include_once("header.php"); 

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Login Albadissi</title>
        <script src="layout/styles/Login.js"></script>
    </head>
    <body>

<div class="wrapper row3">


  <div class="rounded">
    <main class="container clear"> 


<center> <img src="images/demo/log.png"></center>

        <!-- Begin form login --> 

       <div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form" action="" method="post">
            <hr class="colorgraph">
            
            
            <div class="form-group">
                <input type="text" name="username" id="text" class="form-control input-lg" placeholder="Username" tabindex="1" required="required">
            </div>
                <div class="form-group">
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Mot de pass" tabindex="2" required="required">
                    </div>
                </div>

            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-md-6"><input type="submit" name="login" value="Sign In" class="btn btn-success btn-block btn-lg" tabindex="3"></div>
                <div class="col-xs-12 col-md-6"><a href="register.php" class="btn btn-primary btn-block btn-lg">Inscription</a></div>


            </div>
        </form>
    </div>
</div>

        <!-- End form login --> 


    </main>
  </div>
</div>


<?php include_once("footer.php"); ?>