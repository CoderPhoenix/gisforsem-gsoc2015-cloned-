<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="../js/sample1.js"></script>
		<script type="text/javascript" src="../js/sampleSorter.js"></script>
		
		<link rel="stylesheet" type="text/css" href="css/sample1.css">
	</head>

	<body>

		<div id="menu1" class="tab-pane fade in active">
			<?php
				include('thinsectionname.html');
			?>	
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href=".mapTools">Thin Section Map Tools</a></li>
					<li><a data-toggle="tab" href=".chemTools">Chemical Data Tools</a></li>
					<li><a data-toggle="tab" href=".largeTools">Large Scale Tools</a></li>
				</ul>
				
				<div class="tab-content">
					<div class="mapTools tab-pane fade in active">
						<?php include('maps.html'); ?>
					</div> 
					
					<div class= "chemTools tab-pane fade">
						<?php include('chemicaldata.html'); ?>
					</div>
					
					<div class="largeTools tab-pane fade">
						<?php include('largescale.html'); ?>
					</div>
				</div>
	
		</div> <!-- end of Home-->
		
	</body>
	
</html>