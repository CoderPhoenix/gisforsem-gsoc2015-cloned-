<div class="accordian_tab_header">
	<div class="accordian_tabs"> 

		<li>Igneous </li>
		<ul>
			<li class="active" rel="tabI1">
				<a>Overview</a> 
			</li>

			<li rel="tabI2">
				<a>Intrusive</a> 
			</li>

			<li rel="tabI3">
				<a>Extrusive</a> 
			</li>
		</ul>


		<li>Metamorphic</li>
		<ul>
			<li rel="tabM1">
				<a>Overview</a> 
			</li>

			<li rel="tabM2">
				<a>Low P & High T</a> 
			</li>

			<li rel="tabM3"> 
				<a>High P & Low T</a> 
			</li>

			<li rel="tabM4"> 
				<a>High P & High T</a> 
			</li>
		</ul>


		<li>Sedimentary</li>
		<ul>
			<li rel="tabS1"> 
				<a>Overview</a> 
			</li>

			<li rel="tabS2"> 
				<a>Water</a> 
			</li>

			<li rel="tabS3"> 
				<a>Other</a> 
			</li>
		</ul>
		
	</div>
</div>




<div class="accordian_tab_container"> 

	<div id="tabI1" class="tab_content"> 
		<?php
			include("igneous/overview/tabMenu.php"); // include css links
		?>
	</div><!-- #tab1 -->

	<div id="tabI2" class="accordian_tab_content"> 
		<?php
			include("igneous/intrusive/tabMenu.php"); // include css links
		?>
	</div><!-- #tab2 -->

	<div id="tabI3" class="accordian_tab_content">
	   	<?php
			include("igneous/extrusive/tabMenu.php"); // include css links
		?>
	</div><!-- #tab3 -->




	<div id="id=tabM1" class="tab_content"> 
	   	<?php
			include("igneous/overview/html/tabContent4.html"); // include css links
		?>
	</div><!-- #tab4 --> 

	<div id="id=tabM2" class="tab_content"> 
	   	<?php
			include("igneous/overview/html/tabContent4.html"); // include css links
		?>
	</div><!-- #tab5 --> 

	<div id="id=tabM3" class="tab_content"> 
	   	<?php
			include("igneous/overview/html/tabContent4.html"); // include css links
		?>
	</div><!-- #tab6 --> 

	<div id="id=tabM4" class="tab_content"> 
	   	<?php
			include("igneous/overview/html/tabContent4.html"); // include css links
		?>
	</div><!-- #tab7 --> 




	<div id="id=tabS1" class="tab_content"> 
	   	<?php
			include("igneous/overview/html/tabContent4.html"); // include css links
		?>
	</div><!-- #tab8 --> 

	<div id="id=tabS2" class="tab_content"> 
	   	<?php
			include("igneous/overview/html/tabContent4.html"); // include css links
		?>
	</div><!-- #tab9 --> 

	<div id="id=tabS3" class="tab_content"> 
	   	<?php
			include("igneous/overview/html/tabContent4.html"); // include css links
		?>
	</div><!-- #tab10 --> 

	
</div> <!-- .tab_container --> 