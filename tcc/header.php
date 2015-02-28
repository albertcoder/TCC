<!DOCTYPE HTML>

<html>
	<head>
		<title>Testing and Consultancy Cell</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/services.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-normal.css" />
			<link rel="stylesheet" href="css/drop.css" />
		
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
<style>
a{
text-decoration:none;
</style>

<script type="text/javascript">
    function myhref(web){
      window.location.href = web;}
</script>
	</head>
	<body>
		<!-- Header -->
			<header class="drop" id="header">

				<!-- Logo -->
					<h1 id="logo"><a href="index.php">TCC</a></h1>
			<div class="drop">	
				<!-- Nav -->
					<nav id="nav">
						<ul>
        <li>
            <a href="index.php">Services</a>
            <ul>
                <li><a href="#survey">Surveying</a></li>
                <li><a href="#geo">Geotech</a></li>
                <li><a href="#design">Design</a></li>
                <li><a href="#training">Training</a></li>
                <li><a href="#env">Environment</a></li>
                <li><a href="#other">Other</a></li>
            </ul>
        </li>
        <li>
        <li><a href="ratelist.php">Pricing</a></li>
        <li><a href="achievements.php">Achievements</a></li>
        <li><a href="files/tcc_brochure.pdf">Brochure</a></li>
        <li><a href="#consultants">Consultants</a></li>

						</ul>
					</nav>
			</div>
<div id="search"><form action='rates.php' method='post'><input list="Test" name='search' placeholder="Search the Rates of Tests"></form>
</div>
    
			</header>
<?php
							include "connection.php";
						    $sql="SELECT *
							FROM `catalog_category` where parent_id is null";
							$categories = $con->query($sql);
                            echo "<datalist id='Test'>";
                            while($row = $categories->fetch_assoc()){
           $sub_categories_two = $con->query("Select * from `catalog_category` where name='".$row['name']." : Lab Work'");
  
                           while($sub_cat_two = $sub_categories_two->fetch_assoc()){
                              $sub_categories_three = $con->query("Select * from `catalog_category` where parent_id ='".$sub_cat_two['id']."'");
                           while($sub_cat_three = $sub_categories_three->fetch_assoc()){
                              $sub_categories_four = $con->query("Select distinct name from `catalog_product` where category_id ='".$sub_cat_three['id']."'");

                           while($sub_cat_four = $sub_categories_four->fetch_assoc()){
                           echo "<option value='".$sub_cat_four['name']."'>";
}
}   
}                         
}

                           echo "</datalist>";

?>

