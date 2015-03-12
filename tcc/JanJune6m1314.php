<?php include("header.php");?>			
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container small">
					<header class="primary-branding">
						<h2>Batch Jan-June 2013-14</h2>
					</header>
					<p class="primary-text"><strong>This batch</strong> had the following trainees:<br><br>
<b>
<?php
include "connection.php";
$sql = "SELECT name, branch FROM JanJune6m1314";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	//output data of each row
	while ($row = $result->fetch_assoc()) {
	echo $row["name"] ."  ". $row["branch"] . "<br><br>";
	}
} else {
	echo "0 results";
}
$con->close();

?>
</b>
					</p>
				</div>
			</section>
		
		
<?php include("footer.php");?>
