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
		<?php include('headerFooter/header.html'); ?>
		
		<div id="jumbotron">
			<div id="menu1" class="tab-pane fade in active">
				<div id="thinSectionLibrary">
					
						<h2>Granites</h2>
						<ul class="nav nav-pills nav-stacked">
							<li class="active"><a data-toggle="tab" href="#thinSection1">G314094</a></li>
						<h2>Intermediates</h2>
							<li><a data-toggle="tab" href="#thinSection2">TM133</a></li>
							<li><a data-toggle="tab" href="#thinSection2">TM139</a></li>
						<h2>Metamorphic</h2>
							<li><a data-toggle="tab" href="#thinSection2">MS1247</a></li>
							<li><a data-toggle="tab" href="#thinSection2">MS1248</a></li>
							<li><a data-toggle="tab" href="#thinSection2">TM131</a></li>
							<li><a data-toggle="tab" href="#thinSection2">TM135</a></li>
							<li><a data-toggle="tab" href="#thinSection2">TM136</a></li>
							<li><a data-toggle="tab" href="#thinSection2">TM137</a></li>
						<h2>Rhyolites</h2>
							<li><a data-toggle="tab" href="#thinSection2">CH16</a></li>
							<li><a data-toggle="tab" href="#thinSection2">CH18</a></li>
							<li><a data-toggle="tab" href="#thinSection2">CH20</a></li>
							<li><a data-toggle="tab" href="#thinSection2">CH29</a></li>
							<li><a data-toggle="tab" href="#thinSection2">CH31</a></li>
							<li><a data-toggle="tab" href="#thinSection2">CH7a</a></li>
							<li><a data-toggle="tab" href="#thinSection2">CH8a</a></li>
							<li><a data-toggle="tab" href="#thinSection2">TM4</a></li>
							<li><a data-toggle="tab" href="#thinSection2">TM5</a></li>
							<li><a data-toggle="tab" href="#thinSection2">TWRCH31</a></li>
						<h2>Sedimentary</h2>
							<li><a data-toggle="tab" href="#thinSection2">TM1310</a></li>
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
		</div><!-- end of Jumbotron-->
		
		<?php include('headerFooter/footer.html'); ?>
		
	</body>
	
</html>