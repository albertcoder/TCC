<?php include("header.php"); ?>			
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container small">
					<header class="primary-branding">
						<h2>6 Months Batch Jan 2013</h2>
					</header>
					<p class="primary-text"><strong>This batch</strong> had the following facilities:
<?php
include "connection.php";
$sql = "SELECT name, branch FROM JAN_JUNE13";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	//output data of each row
	while ($row = $result->fetch_assoc()) {
	echo $row["name"] ."  ". $row["branch"] . "<hr>";
	}
} else {
	echo "0 results";
}
$con->close();

?>
					</p>
				</div>
			</section>
		
<?php include("footer.php"); ?>
