<?php include_once("header.php"); ?>

<?php

///////////////////////////  END CONTACT code  //////////////////////////////////

if (isset($_POST['submit']))
{ 
    if($_POST['name'] != ''  && $_POST['email'] != '' && $_POST['message'] != '') {
    echo '<h4 class="alert alert-success"><center><img src="images/69_EmoticonsHDcom.png" style="width:50px;">
          <b> A été successfully Envoyer le message.</b></center></h4>';
} else { echo ",e message ne pas Envoyer";}}
?>



<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear">    

  

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1con"><img src="admin/images/contact.png" style="width:90px;"> Contactez nous</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="well well-sm">
             
                <form method="post" action="contact.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input type="text" class="form-control" id="name" placeholder="Entrer votre nom" required="required name=" name"name" 
                            value=" <?php if(isset($_SESSION['username'])) { echo $_SESSION['username']; } ?> ">
                        </div>

                        <div class="form-group">
                            <label for="email">Address Email:</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                            <input type="email" class="form-control" id="email" placeholder="Entrer votre email" required="required" name="email" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Type sujet:</label>
                            <select id="subject" name="subject" class="form-control" required="required" name="contactReason">
                                <option selected disabled>Choisissez le type de message:</option>
                                <option value="service">Service à la clientèle générale</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="Support">Support produit</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message:</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Entre votre message ici .." name="message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary pull-right" id="btnContactUs" value="Envoyer message >>">
                    </div>
                </div>
                </form>

            </div>
        </div>

        
    </div>
</div>




</main>
  </div>
</div>


<?php include_once("footer.php"); ?>