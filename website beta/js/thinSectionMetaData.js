$(document).ready(function(){

	$('.label').click(function() {
		$(this).fadeOut('fast').fadeIn('slow'); 
		
		var chemicalDataDic = [
			"Ocean Crust",
			"What the rock under the Ocean is made of",
			"Mafic. Has Fe and Mg."
		]
		var mineralDataDic = [
			"Continental Crust",
			"What the rock under the soil is made of",
			"Felsic. Has Si and Al."
		] 

		var handSamplePicDic = [
			"Oceanic Lithosphere",
			"What the Oceanic Plates float on",
			"mafic crust and ultramafic mantle"
		] 
		var outcropPicDic = [
			"Continental Lithosphere",
			"What the Continental Plates float on",
			"felsic crust and ultramafic mantle"
		] 

		var worldMapDic = [
			"Asthenosphere",
			"highly viscous, mechanically weak and ductilely-deforming region of the upper mantle of the Earth. It lies below the lithosphere,	at depths between 80 and 200 km (50 and 124 miles) below the surface",
			"unknown"
		] 

		var clickableDic = [
			"unknown",
			chemicalDataDic, 
			mineralDataDic, 
			handSamplePicDic,
			outcropPicDic, 
			worldMapDic
		]

		var geoNumber = 0
		if ( $(this).prop('id') === 'chemicalDataDic') {
			var geoNumber = 1
		} else if  ( $(this).prop('id') === 'mineralDataDic') {
			var geoNumber = 2
		} else if  ( $(this).prop('id') === 'handSamplePicDic') {
			var geoNumber = 3
		} else if  ( $(this).prop('id') === 'outcropPicDic') {
			var geoNumber = 4
		} else if  ( $(this).prop('id') === 'worldMapDic') {
			var geoNumber = 5
		} else {
			var geoNumber = 0
		};

		var newTitle = clickableDic[geoNumber][0];
		var newPicture = clickableDic[geoNumber][1];
		var newDescription = clickableDic[geoNumber][2];

		$('#title').html(newTitle);
		$('#picture').html(newPicture);
		$('#description').html(newDescription);
	});
});
