<?php 
include_once('config.php');


if (!empty($_SESSION['username'])) 
    {
        echo "<script type='text/javascript'> location.href = 'index.php'; </script>";
        exit();
    }

if(!empty($_POST)) 
{
    if (isset($_POST['prenom_user'],$_POST['nom_user'],$_POST['email_user'],$_POST['username_user'],$_POST['pass_user'],$_POST['class_user'],$_POST['type_user'] )) 
    {

        $pnom  = trim(ucfirst($_POST['prenom_user']));
        $nom   = trim(ucfirst($_POST['nom_user']));
        $email = trim($_POST['email_user']);
        $uname = trim($_POST['username_user']);
        $pass  = trim($_POST['pass_user']);
        $class = trim($_POST['class_user']);
        $type  = trim($_POST['type_user']);


        $records = array();

        $res = $con->query("SELECT * FROM users WHERE username = '$uname' OR email = '$email' ");
        $row = $res->fetch_object();

        if($res->num_rows > 0 ) 
        {
            echo "<h4 class='alert alert-danger'> <center><img src='admin/images/Male-User-Warning.png'> (Email) ou (Username) déjà réservé! .. Entrer un autre. </center> </h4>";
        }

        elseif ( !empty($pnom) && !empty($nom) && !empty($email) && !empty($uname) && !empty($pass) && !empty($class) && !empty($type))          
            {
                $insert = $con->prepare("INSERT INTO users (prenom, nom, email, username, password,classe,type,datereg) VALUES (?,?,?,?,?,?,?,NOW())");
                $insert ->bind_param('sssssss',$pnom,$nom,$email,$uname,$pass,$class,$type);

              if ($insert->execute()) 
                {
                $_SESSION['username'] = $uname;
                $_SESSION['prenom']   = $pnom;
                $_SESSION['nom']      = $nom;
                echo '<h4 class="alert alert-success"> <center><img src="admin/images/Accept-Male-User.png"> Bienvenu "'.$uname.'", A été successfully registered. </center> </h4>';
                include_once('index.php');
                exit();
                }
           }
    }
}

include_once("header.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Albadissi</title>

        <link rel="stylesheet" href="layout/styles/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="layout/styles/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="layout/styles/style.css" type="text/css">

        <script src="layout/styles/bootstrap.min.js"></script>
        <script src="layout/styles/bootstrap.js"></script>
        <script src="layout/styles/Login.js"></script>
    </head>
    <body>

<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 

<center> <img src="images/demo/inscription.png"></center>

		<!-- Begin form register --> 

<div class="container">

 <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form" action="register.php" method="post">
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="prenom_user" id="first_name" class="form-control input-lg" placeholder="Prénom" tabindex="1" required="required">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="nom_user" id="last_name" class="form-control input-lg" placeholder="Nom" tabindex="2" required="required">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <input type="email" name="email_user" id="email" class="form-control input-lg" placeholder="Adresse email" tabindex="3" required="required">
            </div>
            <div class="row">
               <div class="col-xs-12 col-sm-6 col-md-6">
                <input type="text" name="username_user" id="email" class="form-control input-lg" placeholder="Username" tabindex="4" required="required">
               </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="pass_user" id="password" class="form-control input-lg" placeholder="Mot de passe" tabindex="5" required="required">
                    </div>
                </div>
            </div>
            
     <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <select class="form-control input-lg" name="type_user" >
                        <option value='Etudiant' selected> Etudiant </option>
                        <option value='Professeur'> Professeur </option>
                        <option value='Autre'> Autre </option>
                </select>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <select class="form-control input-lg" name="class_user">
                        <option value='1er annee bts'>  1er année BTS  </option>
                        <option value='2eme annee bts'> 2eme année BTS </option>
                        <option value='Autre' >  Autre  </option>
                </select>
            </div>
    </div>
    <br>
                
                <div class="form-group">
                     En cliquant sur <strong class="label label-primary">Inscription</strong>, vous acceptez les Conditions générales énoncées par ce site, y compris notre utilisation des cookies.
                </div>
            
            
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-md-6"><input type="submit" name="submit" value="Inscription" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                <div class="col-xs-12 col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
            </div>
        </form>
    </div>
 </div>

  <!-- End form regiter -->




 </main>
  </div>
</div>


    </body>
</html>
<?php include_once("footer.php"); ?>