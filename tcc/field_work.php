<?php include("header.php"); ?>			
		<!-- Intro -->
			<section id="survey" class="main style1 dark fullscreen">
				<div class="content container small">
                    <ul id='list'>
<?php
							include "connection.php";
								$sql="SELECT *
							FROM `catalog_category` where parent_id is NULL";
							$categories = $con->query($sql);
                            $count =0;
                            while($row = $categories->fetch_assoc()){
                            echo "<li value='".$row['name']."' ><a href='#'>".$row['name']."</a></li>";
                            echo "<input type='hidden' value='".$row['name']."' id='".$count."'>";
                            $sub_categories = $con->query("Select * from `catalog_category` where name = '".$row['name']." : Field Work'");
                          
                            while($sub_cat = $sub_categories->fetch_assoc()){
                                       
                            $sub_categories_two = $con->query("Select * from `catalog_category` where parent_id ='".$sub_cat['id']."'");
                            echo "<ul id='".str_replace(" ","_",$row['name'])."'>";
                            while($sub_cat_two = $sub_categories_two->fetch_assoc()){
                            echo "<li><a href='rates.php?id=".$sub_cat_two['id']."' style='color:green;font-weight:bold'>".$sub_cat_two['name']."</a></li>";                       
}                           
echo "</ul>";
}
$count++;
}
?>
</ul>
		
				</div>
			</section>
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>Glimpse of Field work</h2>
							
					</header>
					
<div class="container small gallery">
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/01.jpg" class="image fit from-left"><img src="images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/02.jpg" class="image fit from-right"><img src="images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a></div>
							</div>
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/03.jpg" class="image fit from-left"><img src="images/thumbs/03.jpg" title="Air Lounge" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/04.jpg" class="image fit from-right"><img src="images/thumbs/04.jpg" title="Carry on" alt="" /></a></div>
							</div>
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/05.jpg" class="image fit from-left"><img src="images/thumbs/05.jpg" title="The sparkling shell" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/06.jpg" class="image fit from-right"><img src="images/thumbs/06.jpg" title="Bent IX" alt="" /></a></div>
							</div>
						</div>

				</div>
			</section>
			
			
<?php include("footer.php"); ?>
