	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
		<script type="text/javascript" src="../js/sample1.js"></script>
		<script type="text/javascript" src="../js/sampleSorter.js"></script>
		
		<link rel="stylesheet" type="text/css" href="../css/sample1.css">
	</head>

	<body>
		<div class="ListOfThinSections">	
			<h2>Thin Section Library</h2>
			  <ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Thin Section 1</a></li>
				<li><a data-toggle="tab" href="#menu1">Thin Section 2</a></li>
			  </ul>

			<div class="tab-content">
				<?php
					include('html/thinsection1.html');
					include('html/thinsection2.html');
				?>

			</div> <!-- end of tab-content for the 4 Thin Sections -->
		</div> <!-- end of class ListOfThinSections -->

	</body>
</html>
