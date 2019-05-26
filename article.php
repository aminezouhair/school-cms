<?php 
include_once("header.php"); 

$art = $_GET['article']; 

?>


<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div id="content" class="two_third first"> 
        <!-- ################################################################################################ -->

        <?php 
                $sql  = "SELECT categories.*, articles.* FROM categories, articles WHERE id_article = ".$art."";
                $result = mysqli_query($con, $sql);
                
                if ($row = mysqli_fetch_assoc($result)) {
                  
                    $id      = $row['id_article'];
                    $titre   = ucfirst($row['titre_article']);
                    $content = strip_tags($row['content_article']);
                    $img     = $row['img_article'];
                    $tags    = $row['tags_article'];
                    $date    = date("d F Y",strtotime($row['date_article']));
                    $author  = $row['author'];
                    $id_cat  = $row['id_category'];
                    $cat     = $row['category'];
                
            ?>

              
              <p class="nospace btmspace-15"><img src="admin/images/Index.png" style="width:25px;">&nbsp;&nbsp;
              <?php echo '<b>'.$titre.'</b>';?></p>

              <center><p><img src="images/<?php echo $img;?>" style="width:620px;height:300px;"></p> <br>
              
              <p><b><img src="admin/images/sheduled_task.png" style="width:16px;">&nbsp;<?php echo $date;?>&nbsp;|
              <img src="admin/images/user_edit.png" style="width:16px;">&nbsp;Auteur: <?php echo ucfirst($author); ?>&nbsp;|
              <img src="admin/images/folders_explorer.png" style="width:16px;">&nbsp;Category: <a href="cat.php?cat=<?php echo $id_cat;?>"><?php echo ucfirst($cat); ?></a></b></p>
              <br></center>
              <p> <?php echo $content; ?> </p> <br>

                <?php }  ?>


        <!-- <div id="comments">
          <h1>Comments</h1>
          <ul>
            <li>
              <article>
                <header>
                  <address>
                  By <a href="#">A Name</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                  <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                </div>
              </article>
            </li>
            
            <li>
              <article>
                <header>
                  <address>
                  By <a href="#">A Name</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                  <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                </div>
              </article>
            </li>
          </ul>
          <h2>Write A Comment</h2>
          <form action="#" method="post">
            <div class="one_third first">
              <label for="name">Name <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="one_third">
              <label for="email">Mail <span>*</span></label>
              <input type="text" name="email" id="email" value="" size="22">
            </div>
            <div class="one_third">
              <label for="url">Website</label>
              <input type="text" name="url" id="url" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">Your Comment</label>
              <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
            </div>
            <div>
              <input name="submit" type="submit" value="Submit Form">
              &nbsp;
              <input name="reset" type="reset" value="Reset Form">
            </div>
          </form>
        </div> -->
        <!-- ################################################################################################ --> 
      </div>
      <!-- ################################################################################################ --> 

      <!-- ############################### 5- Sidebar right Column     ######################################## --> 

          <?php include_once("sidebar.php"); ?>
      <!-- ############################### 5- End Sidebar right Column ######################################## --> 


      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>



    </body>
</html>
<?php include_once("footer.php"); ?>