$(document).ready(function(){

	


	$('.label').click(function() {
		$(this).fadeOut('fast').fadeIn('slow'); 
		
		var OceanCrustDic = ["Ocean Crust","What the rock under the Ocean is made of","Mafic. Has Fe and Mg."]
		var ContinentalCrustDic = ["Continental Crust","What the rock under the soil is made of","Felsic. Has Si and Al."] 

		var OceanicLithosphereDic = ["Oceanic Lithosphere","What the Oceanic Plates float on","mafic crust and ultramafic mantle"] 
		var ContinentalLithosphereDic = ["Continental Lithosphere","What the Continental Plates float on","felsic crust and ultramafic mantle"] 

		var AsthenosphereDic = ["Asthenosphere","highly viscous, mechanically weak and ductilely-deforming region of the upper mantle of the Earth. It lies below the lithosphere, at depths between 80 and 200 km (50 and 124 miles) below the surface","unknown"] 

		var clickableDic = ["unknown",OceanCrustDic, ContinentalCrustDic, OceanicLithosphereDic,ContinentalLithosphereDic, AsthenosphereDic]

		var geoNumber = 0
		if ( $(this).prop('id') === 'OceanCrust') {
			var geoNumber = 1
		} else if  ( $(this).prop('id') === 'ContinentalCrust') {
			var geoNumber = 2
		} else if  ( $(this).prop('id') === 'OceanicLithosphere') {
			var geoNumber = 3
		} else if  ( $(this).prop('id') === 'ContinentalLithosphere') {
			var geoNumber = 4
		} else if  ( $(this).prop('id') === 'Asthenosphere') {
			var geoNumber = 5
		} else {
			var geoNumber = 0
		};

		var newTitle = clickableDic[geoNumber][0];
		var newBlurb = clickableDic[geoNumber][1];
		var newRockType = clickableDic[geoNumber][2];

		$('#title').html(newTitle);
		$('#blurb').html(newBlurb);
		$('#rockType').html(newRockType);
	});
});
