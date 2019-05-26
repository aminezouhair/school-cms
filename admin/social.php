<?php
include_once("header.php");
include_once("sidebar.php"); 


if (isset($_POST['submit'])) 
{
	$updateQuery = "UPDATE social SET facebook='$_POST[facebook]', twitter='$_POST[twitter]', linkedn='$_POST[linkedn]', 
					                  googleplus='$_POST[googleplus]', rss='$_POST[rss]' WHERE facebook ='$_POST[hidden]' ";

	mysqli_query($con,$updateQuery);

	echo '<h4 class="alert alert-success"><center><img src="images/free-05-48.png" style="width:50px;">
	      <b> A été successfully mise a jour les liens.</b></center></h4>';

}


$sql = "SELECT * FROM social";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
	$facebook   = $row['facebook'];
	$twitter    = $row['twitter'];
	$linkedn    = $row['linkedn'];
	$googleplus = $row['googleplus'];
	$rss        = $row['rss'];

?>


    <section id="main" class="column">
		

		<h4 class="alert_info">Cette page pour modifier Les liens social media de site Al Badissi.</h4>
		
			
	<article class="module width_full">
			<header><h3><img src="images/rss-128-black.png" style="width:22px;"><b> Les liens social media</b></h3></header>

			<div class="module_content">
  
  
			    <form method="post" action="social.php">
				    <table width="100%" border="0">
						<tr>
							<td> <img src="images/facebook-48.png" style="width:32px;"><b> Facebook : </b><br><br> </td>							
							<td> <input type="text"  name="facebook" placeholder="Enter lien Facebook"value="<?php echo $facebook;?>" size="45%" autofocus> <br><br> </td>
						</tr>
						
						<tr>
							<td> <img src="images/twitter-48.png" style="width:32px;"><b> Twitter :</b><br><br> </td>
							<td> <input type="text" name="twitter"  placeholder="Enter lien twitter"   value="<?php echo $twitter;?>" size="45%" autofocus> <br><br> </td>
						</tr>
						
                        <tr> 
                            <td> <img src="images/linkedin-48.png" style="width:32px;"><b> Linkedn : </b><br><br> </td>
							<td> <input type="text" name="linkedn"  placeholder="Enter lien Linkedn" value="<?php echo $linkedn;?>" size="45%" autofocus> <br><br> </td>
						</tr>
						
                        <tr>
							<td> <img src="images/google-plus-48.png" style="width:32px;"><b> Google plus : </b><br><br> </td>
							<td> <input type="text" name="googleplus"  placeholder="Enter lien Google plus" value="<?php echo $googleplus;?>"  size="45%" autofocus> <br><br> </td>
						</tr>
					    
					    <tr>
							<td> <img src="images/rss-48.png" style="width:32px;"><b> RSS Feed : </b><br><br> </td>
							<td> <input type="text" name="rss"  placeholder="Enter lien RSS" value="<?php echo $rss;?>" size="45%" autofocus> <br><br> </td>
						</tr>

						<tr> 
                            <td> <input type="hidden" name="hidden" value="<?php echo $facebook;?>"> </td>
							<td> <input name="submit" type="submit" value="Enregistrer les liens" > <br><br> </td>
						</tr>
 
				    </table>
                                 
                                 
		        </form>	
<?php
}
?>
		    </div>

	</article>

	<!-- end option -->


		<div class="spacer"></div>
	</section>

</body>

</html>