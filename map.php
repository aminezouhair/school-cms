<?php include_once("header.php"); 


$con = new mysqli('localhost', 'root', '', 'ecoledb');

$sql    = "SELECT * FROM settings";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
   $contact = $row['contact'];
   $adresse = $row['adresse'];
   $phone   = $row['phone'];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Maps Lycee Albadissi</title>

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
    

<center><h1> Maps Lycee Albadissi </h1>
<img src="images/demo/map-lycee.png" style="width=350px","height=450px";> <br><br>

<h1>  <a href="https://goo.gl/maps/C8Aq7" target="_blank"> Click ici pour aller a google Maps > Map Lycee Al Badissi </a></h1>


                <?php echo $adresse;?> <br>
                Ouvert : 8:00 am – 6:00 pm<br>
                
                <abbr title="Phone">
                    Phone:</abbr>
                <?php echo $phone;?>
                   <br>

                <a href="mailto:<?php echo $contact;?>"><?php echo $contact;?></a>
 
</center>
   
<?php } ?> 

 </main>
  </div>
</div>


    </body>
</html>
<?php include_once("footer.php"); ?>