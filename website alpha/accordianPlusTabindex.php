<!DOCTYPE html>
<html>

  <head>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">

	<?php
		include("headerFooter/cssHeadLinks.html"); // include css links
	?>


    <link rel="stylesheet" href="1024php/tabs/tabIndex.css">
    <link rel="stylesheet" href="1024php/accordian/accordianIndex.css">

    <link rel="stylesheet" href="1024php/css/jumbotron.css">

    <link rel="stylesheet" href="1024php/css/accordianPlusTabindex.css">
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

  </head>

  <body>
	<?php
		include("headerFooter/header.html"); // include header content
	?>

    <div class="jumbotron">
		<div class="container">
			<h1>Geology</h1>

			<div class="accordionSpace">
				<?php
					include("1024php/accordian/accordianContainer.php"); // include css links
				?>
			</div><!-- Accordion space -->


			<div class="tabSpace">
				<?php
					include("1024php/tabs/tabMenu.php"); // include css links
				?>
		 	</div> <!-- .tabSpace -->

		</div><!--container --> 
    </div> <!-- .jumbotron --> 

	<?php
		include("headerFooter/footer.html"); // include footer content
	?>


	<script type="text/javascript" src="1024php/accordian/accordianIndex.js"></script>
	<script type="text/javascript" src="1024php/tabs/tabIndex.js"></script> 
	
  </body>
</html>
