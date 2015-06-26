<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="../js/sample1.js"></script>
		<script type="text/javascript" src="../js/sampleSorter.js"></script>
		
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>

		<div id="menu1" class="tab-pane fade in active">
			<div id="thinSectionLibrary">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a data-toggle="tab" href="#thinSection1">Thin Section 1</a></li>
					<li><a data-toggle="tab" href="#thinSection2">Thin Section 2</a></li>
					<li><a data-toggle="tab" href="#thinSection3">Thin Section 3</a></li>
					<li><a data-toggle="tab" href="#thinSection4">Thin Section 4</a></li>
				</ul>
			</div>
			
			<div id="thinSectionDisplayZone">
				<div id="thinSection1" class="tab-content">
					<div class="tab-pane fade in active">
						<?php include('thinSection1/index.php'); ?>
					</div> 
					
					<div id="thinSection2" class="tab-pane fade">
						<?php include('thinSection2/index.php'); ?>
					</div>
					
					<div id="thinSection3" class="tab-pane fade">
						<?php include('thinSection3/index.php'); ?>
					</div>
					
					<div id="thinSection4" class="tab-pane fade">
						<?php include('thinSection4/index.php'); ?>
					</div>
				</div>
			</div>
		</div> <!-- end of Home-->
		
	</body>
	
</html>