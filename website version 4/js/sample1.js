$(document).ready(function(){
	
	$([bM1]).click(function(){ 
		$(".MapDisplay h1").text("Thin Section Map (Plain Light) ");
		$(".MapDisplay p").text("Thin Section Map (Plain Light) Image");
		$(".MapDisplay p1").text("Thin Section Map (Plain Light) Blurb");
	});	
	$([bM2]).click(function(){
		$(".MapDisplay h1").text("Thin Section Maps (Crossed Polar) ");
		$(".MapDisplay p").text("Thin Section Maps (Crossed Polar) Image");
		$(".MapDisplay p1").text("Thin Section Maps (Crossed Polar) Blurb");
	});	
	$([bM3]).click(function(){
		$(".MapDisplay h1").text("Thin Section Maps (Transmitted Light) ");
		$(".MapDisplay p").text("Thin Section Maps (Transmitted Light) Image");
		$(".MapDisplay p1").text("Thin Section Maps (Transmitted Light) Blurb");
	});	
	$([bSEM1]).click(function(){ 
		$(".MapDisplay h1").text("Thin Section Maps (Backscatter Electron) ");
		$(".MapDisplay p").text("Backscatter Electron Image");
		$(".MapDisplay p1").text("Backscatter Electron Blurb");
	});	
	
	
	$([bSEM2]).click(function(){
		$(".ChemicalDisplay h1").text("Thin Section Maps (EDS) ");
		$(".ChemicalDisplay p").text("Thin Section Maps (EDS) Image");
		$(".ChemicalDisplay p1").text("Thin Section Maps (EDS) Blurb");
	});	
	$([bSEM3]).click(function(){
		$(".ChemicalDisplay h1").text("Thin Section Maps (WDS) ");
		$(".ChemicalDisplay p").text("Thin Section Maps (WDS) Image");
		$(".ChemicalDisplay p1").text("Thin Section Maps (WDS) Blurb");
	});	
	$([bAD1]).click(function(){
		$(".ChemicalDisplay h1").text("Chemical Data");
		$(".ChemicalDisplay p").text("Chemical Data Image");
		$(".ChemicalDisplay p1").text("Chemical Data Blurb");
	});
	
	
	$([bAD2]).click(function(){
		$(".AdditionalInfoDisplay h1").text("Hand Sample");
		$(".AdditionalInfoDisplay p").text("Hand Sample Image");
		$(".AdditionalInfoDisplay p1").text("Hand Sample Blurb");
	});
	$([bAD3]).click(function(){
		$(".AdditionalInfoDisplay h1").text("Geologic Cross Section");
		$(".AdditionalInfoDisplay p").text("Geologic Cross Section Image");
		$(".AdditionalInfoDisplay p1").text("Geologic Cross Section Blurb");
	});
	$([bAD4]).click(function(){
		$(".AdditionalInfoDisplay h1").text("Open Street Map");
		$(".AdditionalInfoDisplay p").text("Open Street Map Image");
		$(".AdditionalInfoDisplay p1").text("Open Street Map Blurb");
	});
	$([bAD5]).click(function(){
		$(".AdditionalInfoDisplay h1").text("Geologic Map");
		$(".AdditionalInfoDisplay p").text("Geologic Map Image");
		$(".AdditionalInfoDisplay p1").text("Geologic Map Blurb");
	});
});