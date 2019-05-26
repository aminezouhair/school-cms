<?php
include_once("header.php");  

if (empty($_SESSION['username'])) 
  {
    echo "<script type='text/javascript'> location.href = 'login.php'; </script>";
    exit();
  }


/////////////// update compte.php  ///////////////////


if (isset($_POST['submit'])) 
{
  $updateQuery = "UPDATE users SET prenom='$_POST[prenom]', classe = '$_POST[classe]',
                                   nom='$_POST[nom]',email='$_POST[email]',
                                   username='$_POST[username]',password='$_POST[password]' WHERE username ='$_POST[hidden]' ";

// img prenom nom email username password genre classe type /* classe='$_POST[classe]', type='$_POST[type]' */

  mysqli_query($con,$updateQuery);

  echo '<h4 class="alert alert-success"><center><img src="admin/images/free-05-48.png" style="width:50px;">
        <b> A été successfully mise a jour profile: "'.$_SESSION['username'].'"</b></center></h4>';

}

///////////////  fetch les donnee user   /////////////////

$sql = "SELECT * FROM users where username='$_SESSION[username]'";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
  $prenom   = $row['prenom'];
  $nom      = $row['nom'];
  $email    = $row['email'];
  $username = $row['username'];
  $password = $row['password'];
  $type     = $row['type'];
  $Class    = $row['classe'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mon profile</title>
    </head>
    <body>

<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear">     

      

        <form method="post" action="compte.php">
            <table width="100%" border="0">
            <tr>
                <td>
                  <br>
                  <br>
                  <b></b>
                </td>         
                <td>
                <center><img src="images/img_articles/graduated.png" style="width:150px;height:135px;"></center> 
                   <br>
                   <br>
                </td>
            </tr>
            

            <tr>
              <td> <img src="admin/images/fonts.png" style="width:32px;"> &nbsp;&nbsp;&nbsp;&nbsp;
               <b>Nom et prenom :</b>
                <br>
                <br>
              </td>
              <td>
              
                         <input type="text" name="prenom" value="<?php echo $prenom;?>" class="form-control input-lg"> <br>
                         <input type="text" name="nom"    value="<?php echo $nom;?>"    class="form-control input-lg">
                        
                 <br>
                 <br>
              </td>
            </tr>

             <tr>
              <td> <img src="admin/images/mail.png" style="width:32px;"> &nbsp;&nbsp;&nbsp;&nbsp;
              <b>Email :</b> 
              <br>
                <br>

              </td>
              <td>
                 <input type="text" name="email" value="<?php echo $email; ?>" size="45%" class="form-control input-lg">
                 <br>
                 <br>
              </td>
            </tr>

            <tr>
              <td> <img src="admin/images/user_student_female.png" style="width:32px;"> &nbsp;&nbsp;&nbsp;&nbsp;
               <b>Classe :</b>
                <br>
                <br>
              </td>
              <td>
                       <input type="text" name="classe" value="<?php echo $Class;?>" class="form-control input-lg">      
                 <br>
                 <br>
              </td>
            </tr>

             <tr>
              <td> <img src="admin/images/678109-profile-group-128.png" style="width:32px;"> &nbsp;&nbsp;&nbsp;&nbsp;
               <b>Type :</b>
                <br>
                <br>
              </td>
              <td>
                       <input type="text" name="type" value="<?php echo $type;?>" class="form-control input-lg">      
                 <br>
                 <br>
              </td>
            </tr>
            

            
            <tr>
              <td> <img src="admin/images/group_gear.png" style="width:32px;"> &nbsp;&nbsp;&nbsp;&nbsp;
              <b> Username :</b>
              <br>
              <br>

              </td>
              <td>
              <input type="text" name="username" value="<?php echo $username; ?>" size="45%" class="form-control input-lg">
                 <br>
                 <br>
              </td>
            </tr>

            <tr>  
              <td><img src="admin/images/group_key.png" style="width:32px;">&nbsp;&nbsp;&nbsp;&nbsp;
              <b> Mot de pass :</b>
              <br>
                <br>

              </td>
              <td>
                 <input type="text" name="password" value="<?php echo $password;?>" size="45%" class="form-control input-lg">
                 <br>
                 <br>
              </td>
            </tr>

            </table>
                     <input name="hidden" type="hidden" value="<?php echo $username;?>" >
                    <input type="submit" name="submit" value="Enregistrer les paramètres de mon profile" class="btn btn-primary btn-block btn-lg">                    
                     
        </form> 

            <?php } ?> 

      


    </main>
  </div>
</div>


</body>
</html>

<?php include_once("footer.php"); ?>