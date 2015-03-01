
<?php include("header.php");?>

			<section id="survey" class="main style1 dark fullscreen">
				<div class="content container small">

<?php
								$sql="SELECT *
							FROM `catalog_category` where parent_id is NULL";
							$categories = $con->query($sql);
                            $count =0;
                            echo "<ul id='list'>"; 
                            while($row = $categories->fetch_assoc()){
                            echo "<li value='".$row['name']."' ><a href='#'>".$row['name']."</a></li>";
                            echo "<input type='hidden' value='".$row['name']."' id='".$count."'>";
                            $sub_categories = $con->query("Select * from `catalog_category` where name = '".$row['name']." : Lab Work'");
                          
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



<?php include("footer.php");?>

