$(document).ready(function(){
	
	$([bTS1]).click(function(){ 
		$(".EachSampleDisplay").text("Thin Section Map (Plain Light) ");
	});	
	
	$([bTS2]).click(function(){
		$(".EachSampleDisplay").text("Thin Section Maps (Crossed Polar) ");
	});	
	
	$([bTS3]).click(function(){
		$(".EachSampleDisplay").text("Thin Section Maps (Transmitted Light) ");
	});	
	
	$([bTS4]).click(function(){ 
		$(".EachSampleDisplay").text("Thin Section Maps (Backscatter Electron) ");
	});	
	
	$([bTS5]).click(function(){
		$(".EachSampleDisplay").text("Thin Section Maps (EDS) ");
	});	
});