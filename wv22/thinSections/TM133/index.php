<div id="menu1" class="tab-pane fade in active">
	<h2>TM133</h2>
	
		<ul class="nav nav-pills nav-justified">
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
