<!DOCTYPE HTML>

<html>
	<head>
		<title>Testing and Consultancy Cell</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		
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
            <a href="#services">Services</a>
            <ul>
                <li><a href="#survey">Surveying</a></li>
                <li><a href="#geo">Geotech</a></li>
                <li><a href="#design">Design</a></li>
                <li><a href="#training">Training</a></li>
                <li><a href="#env">Environment</a></li>
                <li><a href="#other">Other</a></li>
            </ul>
        </li>
        <li><a href="files/tcc_brochure.pdf">Brochure</a></li>
        <li><a href="#consultants">Consultants</a></li>
        <li><a href="#contact">Contact</a></li>

						</ul>
					</nav>
			</div>
			</header>



		<!-- Services 
			<section id="services" style="padding-bottom:0% !important" class="main style1 dark fullscreen">
<h2 style="text-align:center">Testing and Consultancy Cell </h2>
<p style="text-align:center; letter-spacing: 3.5px;">Guru Nanak Dev Engineering College </p>
				<div class="content container small" style="height:400px; text-align:center">
					<header class="primary-branding">
                      
                 <hr > 
						<p><h1 style="letter-spacing: 1.5px;">Providing technical services since 1979 in...</h1></p>
					</header>
                          <div class ="slide">
	                      <div class="img-circular image1">
                                  <div onclick="myhref('#survey');" class="description">
                                      <h3><a href="#survey">Surveying</a></h3>
                                  </div>
                              </div>
 
			      <div class="img-circular image2">
                                  <div onclick="myhref('#geo');" class="description">
                                      <h3><a href="#geo">Geo-techincal Investigation</h3></a>
                                  </div>
                              </div>  
                        
                              <div class="img-circular image3">
                                  <div onclick="myhref('#design');" class="description">
                                      <h3><a href="#design">Designing</h3></a>
                                  </div>
                              </div>

                              <div class="img-circular image4">
                                  <div onclick="myhref('#env');" class="description">
                                      <h3><a href="#env">Environment Engineering</h3></a>
                                  </div>
                              </div>

                              <div class="img-circular image5">
                                  <div onclick="myhref('#other');" class="description">
                                      <h3><a href="#other">Others services</h3></a>
                                  </div>
                              </div>    
                          </div>
			</section>-->

		<!-- Surveying -->
			<section id="survey" class="main style1 dark fullscreen">
				<div class="content container small">
					<header class="primary-branding primary-text">
						<h2>Surveying</h2>
					</header>
							<?php
							include "connection.php";
								$sql="SELECT *
							FROM `catalog_category`";
							$categories = $con->query($sql);
							$sql1="SELECT *
							FROM `catalog_product`";
							$products = $con->query($sql1);
							$array_rate = array();	
							if ($categories->num_rows > 0) {
								//output data of each row
							
							while ($row = $categories->fetch_assoc()) {
							//echo $row["id"] ."<br><br>";
							if ($row["name"] == "Survey")
							{
								 $root_id = $row["id"];
								while ($row = $categories->fetch_assoc()) {
									if ($row["parent_id"] == $root_id && preg_match("/(lab)+/i", $row["name"])) {
										 $level1_id = $row["id"];
										while ($row = $categories->fetch_assoc()) {
										
											if ($row["parent_id"] == $level1_id) {
											echo "<em><h1>".$row["name"]."</h1></em>";
											$cat_id = $row["id"];
										
												$sql_rate = "SELECT *
													FROM `catalog_product`
													WHERE `category_id` = $cat_id";
												$rates = $con->query($sql_rate);
										//		$rate = $con->query($sql_rate);
?><table> <thead>
            <tr><th style="font-size:18px; color:black" >Name</th><th style="font-size:18px; color:black">Price</th></tr>    
            </thead>

<tbody>
                
                   
												<?php
												while ($row_name = $rates->fetch_assoc()) {
												echo "<tr  style='border:1px solid black' ><td>".$row_name['name']."</td><td>Rs ".$row_name['price_per_unit']."</td></tr>";
												}?>

            </tbody>

									</table>
<br>
<br>
<br>
<br>
<?php

											//print_r($array);
											} 
										}

									}
								}	
							}
							}
							} else {
							echo "0 results";
							}
							$con->close();	
							?>

				</div>
			</section>

		
		<!-- Geo -->
			<section id="geo" class="main style1 dark fullscreen">
				<div class="content container small">
					<header class="primary-branding">
						<h2>Geotechnical Investigation</h2>
					</header>

							<?php
							include "connection.php";
								$sql="SELECT *
							FROM `catalog_category`";
							$categories = $con->query($sql);
							$sql1="SELECT *
							FROM `catalog_product`";
							$products = $con->query($sql1);
							$array_rate = array();	
							if ($categories->num_rows > 0) {
								//output data of each row
							
							while ($row = $categories->fetch_assoc()) {
							//echo $row["id"] ."<br><br>";
							if ($row["name"] == "Soil Lab")
							{
								 $root_id = $row["id"];
								while ($row = $categories->fetch_assoc()) {
									if ($row["parent_id"] == $root_id && preg_match("/(lab)+/i", $row["name"])) {
										 $level1_id = $row["id"];
										while ($row = $categories->fetch_assoc()) {
										
											if ($row["parent_id"] == $level1_id) {
											echo "<em><h1>".$row["name"]."</h1></em>";
											$cat_id = $row["id"];
										
												$sql_rate = "SELECT *
													FROM `catalog_product`
													WHERE `category_id` = $cat_id";
												$rates = $con->query($sql_rate);
												$rate = $con->query($sql_rate);
?><table> <thead>
            <tr><th style="font-size:18px; color:green" >Name</th><th style="font-size:18px; color:green">Price</th></tr>    
            </thead>

<tbody>
                
                   
												<?php
												while ($row_name = $rates->fetch_assoc()) {
												echo "<tr  style='border:1px solid black' ><td>".$row_name['name']."</td><td>Rs ".$row_name['price_per_unit']."</td></tr>";
												}?>

            </tbody>

									</table>
<?php

											//print_r($array);
											} 
										}

									}
								}	
							}
							}
							} else {
							echo "0 results";
							}
							$con->close();	
							?>


				</div>
			</section>

		<!-- Design -->
			<section id="design" class="main style1 dark fullscreen">
				<div class="content container small">
					<header class="primary-branding">
						<h2>Designing</h2>
					</header>

							<?php
							include "connection.php";
								$sql="SELECT *
							FROM `catalog_category`";
							$categories = $con->query($sql);
							$sql1="SELECT *
							FROM `catalog_product`";
							$products = $con->query($sql1);
							$array_rate = array();	
							if ($categories->num_rows > 0) {
								//output data of each row
							
							while ($row = $categories->fetch_assoc()) {
							//echo $row["id"] ."<br><br>";
							if ($row["name"] == "Structure Design")
							{
								 $root_id = $row["id"];
								while ($row = $categories->fetch_assoc()) {
									if ($row["parent_id"] == $root_id && preg_match("/(lab)+/i", $row["name"])) {
										 $level1_id = $row["id"];
										while ($row = $categories->fetch_assoc()) {
										
											if ($row["parent_id"] == $level1_id) {
											echo "<em><h1>".$row["name"]."</h1></em>";
											$cat_id = $row["id"];
										
												$sql_rate = "SELECT *
													FROM `catalog_product`
													WHERE `category_id` = $cat_id";
												$rates = $con->query($sql_rate);
												$rate = $con->query($sql_rate);
?><table> <thead>
            <tr><th style="font-size:18px; color:black" >Name</th><th style="font-size:18px; color:black">Price</th></tr>    
            </thead>

<tbody>
                
                   
												<?php
												while ($row_name = $rates->fetch_assoc()) {
												echo "<tr  style='border:1px solid black' ><td>".$row_name['name']."</td><td><em>Price as per the project</em></td></tr>";
												}?>

            </tbody>

									</table>
<?php

											//print_r($array);
											} 
										}

									}
								}	
							}
							}
							} else {
							echo "0 results";
							}
							$con->close();	
							?>

				</div>
			</section>



				<!-- Environment Engineering -->
			<section id="env" class="main style1 dark fullscreen">
				<div class="content container small">
					<header class="primary-branding">
						<h2>Environment Engineering</h2>
					</header>


							<?php
							include "connection.php";
								$sql="SELECT *
							FROM `catalog_category`";
							$categories = $con->query($sql);
							$sql1="SELECT *
							FROM `catalog_product`";
							$products = $con->query($sql1);
							$array_rate = array();	
							if ($categories->num_rows > 0) {
								//output data of each row
							
							while ($row = $categories->fetch_assoc()) {
							//echo $row["id"] ."<br><br>";
							if ($row["name"] == "Environmental Lab")
							{
								 $root_id = $row["id"];
								while ($row = $categories->fetch_assoc()) {
									if ($row["parent_id"] == $root_id && preg_match("/(lab)+/i", $row["name"])) {
										 $level1_id = $row["id"];
										while ($row = $categories->fetch_assoc()) {
										
											if ($row["parent_id"] == $level1_id) {
											echo "<em><h1>".$row["name"]."</h1></em>";
											$cat_id = $row["id"];
										
												$sql_rate = "SELECT *
													FROM `catalog_product`
													WHERE `category_id` = $cat_id";
												$rates = $con->query($sql_rate);
												$rate = $con->query($sql_rate);
?><table> <thead>
            <tr><th style="font-size:18px; color:green" >Name</th><th style="font-size:18px; color:green">Price</th></tr>    
            </thead>

<tbody>
                
                   
												<?php
												while ($row_name = $rates->fetch_assoc()) {
												echo "<tr  style='border:1px solid black' ><td>".$row_name['name']."</td><td>Rs ".$row_name['price_per_unit']."</td></tr>";
												}?>

            </tbody>

									</table>
<?php

											//print_r($array);
											} 
										}

									}
								}	
							}
							}
							} else {
							echo "0 results";
							}
							$con->close();	
							?>
		
				</div>
			</section>


		<!-- Training -->
			<section id="training" class="main style1 dark fullscreen">
				<div class="content container small">
					<header class="primary-branding">
						<h2>Training</h2>
					</header>
<ul>
							<li>Six Months Training</li>
							<li>Six Weeks Training</li>
						</ul>

				<!--	<footer>
						<a href="#other" class="button style2 down">More</a>
					</footer>-->
				</div>
			</section>

		<!-- Other 
			<section id="other" class="main style1 dark fullscreen">
				<div class="content container small">

					<header class="primary-branding">
						<h2>Other Services</h2>
					</header>

				</div>
			</section> -->


		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions" style="line-height:3em">
						<li><a href="https://twitter.com/tccgndec" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/pages/Testing-and-Consultancy-Cell-GNDEC-Ludhiana/497681330318981" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://plus.google.com/u/0/117256570032896355648" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						<!--<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>-->
					</ul> <div class="rights" style="float:left; margin-top:30px;">© 2014 Testing & Consultancy Cell. All rights reserved.</div>

				<!-- Menu -->
					<ul class="menu" style="display:inline">
                                                
                                                <li>Email: tcc@gndec.ac.in </li>
                                                <li>Contact: +91 9855225007</li> 	
                                       </ul>
                                       
			
			</footer>

	</body>
</html>
