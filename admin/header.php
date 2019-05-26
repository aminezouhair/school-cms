<?php 
include_once("../config.php");

if ($_SESSION['username'] !== 'houda') 
	{
		echo "<script type='text/javascript'> location.href = '../login.php'; </script>";
		exit();
	}
	

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Admin Panel</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../layout/styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../layout/styles/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../layout/styles/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../layout/styles/font-awesome.min.css">

	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript" src="../layout/scripts/bootstrap.js"></script>
	<script type="text/javascript" src="../layout/scripts/bootstrap.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() 
	    	{ 
	      	  $(".tablesorter").tablesorter(); 
	   	 } 
		);
		$(document).ready(function() {

		//When page loads...
		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content

		//On Click Event
		$("ul.tabs li").click(function() {

			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content

			var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});

	  });
	</script>

	<script type="text/javascript">
	    $(function(){
	        $('.column').equalHeight();
	    });
	</script>
	



</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.php">Admin Control Panel</a></h1>
			<h2 class="section_title">Dashboard Lycee Albadissi</h2><div class="btn_view_site"><a href="../index.php" target="_blanc">Voir le site</a></div>
		</hgroup>
	</header> 

	<!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<a href="index.php"><p>Bienvenu <?php echo ucfirst($_SESSION['username'])?> >> <img src="images/home.png" style="width:18px;"> Accueil</p></a>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->