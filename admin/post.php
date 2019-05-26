<?php 
include_once("header.php");
include_once("sidebar.php");

//////////////  delete post   ///////////////////////

if (isset($_POST['"delete'])) 
    {
        $deleteQuery = " DELETE FROM articles WHERE titre_article ='$_POST[hidden]' ";

        mysqli_query($con,$deleteQuery);
        
            echo '<h4 class="alert alert-success"><center><img src="images/free-05-48.png" style="width:50px;">
            <b> A été successfully Supprimer l\'article.</b></center></h4>';
        
            // else 
            // {
            //     echo '<h4 class="alert alert-danger"><center><img src="images/dialog-warning-128.png" style="width:50px;">
            //     <b> Problem Supprimer cet article !</b></center></h4>';
            // }
    }



///////////// fetch les posts  //////////////////////

$records = array();

if($results = $con->query("SELECT categories.*, articles.* FROM categories, articles WHERE articles.id_category=categories.id_category")) 

{
    if($results->num_rows)
    {
        while ($row = $results->fetch_object()) 
        {
            $records[] = $row;
        }

        $results->free();
    }

}


?>

	<section id="main" class="column">
		
		<h4 class="alert_info">Cette page pour Modifier les articles, ou vous pouvez ajouter un article <a href="new_post.php"> <strong> ici</strong></a></h4>
		
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">Tous les articles</h3>
		
		</header>

		
		<table class="tablesorter" cellspacing="0"> 
<?php 
    if(!count($records)) 
{
    echo "<br><center><h4>Il n'y a pas des aticle, C'est vide !</h4></center>";
} else 
{
?>  
    <thead>
        <tr>
            <th></th>
            <th> Titre d'article</th>
            <th><center> Categorie </center></th>
            <th><center> Auteur </center></th>
            <th><center> Date ajoutée </center></th>
            <th><center> État </center></th>
            <th><center> Supprimer </center></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($records as $r) {
            // $id       = $r->id_article;
            // $titre    = $r->titre_article;
            // $category = $r->category;
            // $date     = $r->date_article;
            // $status   = $r->status_article; 
        ?>


        <form action="post.php" method="post" > 
                <tr>
                    <td> <img src="images/article-edit.png"> </td>
                    <td> <?php echo $r->titre_article; ?> </td>
                    <td><center> <?php echo $r->category; ?> </center></td>
                    <td><center> <?php echo $r->author; ?>  </center></td>
                    <td><center> <?php echo $r->date_article; ?>  </center></td>
                    <td><center> <?php echo $r->status_article;?> </center></td>  <!-- Publie - En attente - Brouillon -->
                    <td> <input type="hidden" name="hidden" value="<?php echo $r->titre_article;?>">
                    <center><input type="submit" name="delete" value="suprimer"></center></td>   
                </tr>
        </form>
        <?php 
        }
        ?>
    </tbody>
</table>
<?php 
}



?>

    
		</article><!-- end of content manager article -->

		
		<div class="spacer"></div>
	</section>


</body>

</html>