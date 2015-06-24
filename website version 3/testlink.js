$(document).ready(function(){

	$('.label').click(function() {
		$(this).fadeOut('fast').fadeIn('slow'); 
		
			var ThinSectionMapsDic = ["Thin Section Map Links","Plain Light","Crossed Polar"]				
			var ChemicalDataDic = ["Chemical Data", "Image", "Blurb"]
			var HandSampleDic = ["Hand Sample","Image", "Blurb"]		
			var GeologicCrossSectionDic = ["Geologic Cross Section","Image", "Blurb"]				
			var OpenStreetMapDic = ["Open Street Map","Image", "Blurb"]	
			var GeologicMapDic = ["Geologic Map","Image", "Blurb"]
			
			var clickableDic = ["unknown",
								ThinSectionMapsDic, 
								ChemicalDataDic, 
								HandSampleDic,
								GeologicCrossSectionDic,
								OpenStreetMapDic,
								GeologicMapDic
								]

			var geoNumber = 0
			
			if ( $(this).prop('id') === 'ThinSectionMaps') {
				var geoNumber = 1
			} else if  ( $(this).prop('id') === 'ChemicalData') {
				var geoNumber = 2
			} else if  ( $(this).prop('id') === 'HandSample') {
				var geoNumber = 3
			} else if  ( $(this).prop('id') === 'GeologicCrossSection') {
				var geoNumber = 4
			} else if  ( $(this).prop('id') === 'OpenStreetMap') {
				var geoNumber = 5
			} else if  ( $(this).prop('id') === 'GeologicMap') {
				var geoNumber = 6	
			} else {
				var geoNumber = 0
			};

			var newLowLevelTitle = clickableDic[geoNumber][0];
			var newLowLevelImage = clickableDic[geoNumber][1];
			var newLowLevelDescription = clickableDic[geoNumber][2];

			$('#LowLevelTitle').html(newLowLevelTitle);
			$('#LowLevelImage').html(newLowLevelImage);
			$('#LowLevelDescription').html(newLowLevelDescription);
	});
});
