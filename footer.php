<?php


$sql    = "SELECT * FROM settings";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
   $create  = $row['create_site'];
   $name    = $row['name_site'];
   $url     = $row['url_site'];
   $contact = $row['contact'];
   $adresse = $row['adresse'];
   $phone   = $row['phone'];


$sql    = "SELECT * FROM social";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
  $facebook   = $row['facebook'];
  $twitter    = $row['twitter'];
  $linkedn    = $row['linkedn'];
  $googleplus = $row['googleplus'];
  $rss        = $row['rss'];

?>


<!-- Code Footer HTML -->

<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <figure class="center"><a href="map.php"><img class="btmspace-15" src="images/demo/worldmap.png" alt="map" ></a>
          <figcaption><a href="map.php">Retrouvez-nous avec Google Maps &raquo;</a></figcaption>
        </figure>
      </div>
      <div class="one_third">
        <address>
        <b><?php echo $adresse;?></b>
             <br>
          <i class="fa fa-phone pright-10"></i> <b><?php echo $phone;?></b><br>
          <i class="fa fa-envelope-o pright-10"></i> <a href="mailto:<?php echo $contact;?>"><?php echo $contact;?></a>
        </address>
      </div>
      <div class="one_third">
        <p class="nospace btmspace-10"><strong>Restez à jour ce qui se passe</strong></p>
        <ul class="faico clear">
          <li> <a href="<?php echo $facebook;?>" target="_blank"> <img src="admin/images/facebook-48.png">    </a> </li>
          <li> <a href="<?php echo $twitter;?>"  target="_blank"> <img src="admin/images/twitter-48.png"> </a> </li>
          <li> <a href="<?php echo $linkedn;?>"  target="_blank"> <img src="admin/images/linkedin-48.png">    </a> </li>
          <li> <a href="<?php echo $googleplus;?>"   target="_blank"> <img src="admin/images/google-plus-48.png">     </a> </li>
          <li> <a href="<?php echo $rss;?>"      target="_blank"> <img src="admin/images/rss-48.png">        </a> </li>
        </ul>
        <form class="clear" method="post" action="#">
          <fieldset>
            <legend>Abonnez à Newsletter:<br>
            </legend>
            <input type="text" value="" placeholder="Entrer votre Email ici &hellip;">
            <button class="fa fa-sign-in" type="submit" title="Sign Up"><em>Sign Up</em></button>
          </fieldset>
        </form>
      </div>
      <!-- ################################################################################################ --> 
    </footer>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->

    <p class="fl_left">Copyright &copy; <?php echo date("Y")?> - Tous les droits reserver - <a href="<?php echo $url;?>"><?php echo $name;?></a></p>
    <p class="fl_right">Site Create par: <b><?php echo $create;?></b></p> 

<!-- code php -->
<?php } } ?>
<!-- FIN code php -->

    <!-- ################################################################################################ --> 
  </div>
</div>
</body>
</html>