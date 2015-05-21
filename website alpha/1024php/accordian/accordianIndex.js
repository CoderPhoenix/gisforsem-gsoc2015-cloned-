$(document).ready(function() {
	$(".accordian_tab_header > .accordian_tabs > li").click(function(){

		if(false == $(this).next().is(':visible')) {
			$('.accordian_tab_header > ..accordian_tabs > ul').slideUp(300);
		}
		$(this).next().slideToggle(300);
	});

	$('.accordian_tab_header > .accordian_tabs > ul:eq(0)').show();
	$('.accordian_tab_header > .accordian_tabs > ul:eq(1)').hide();
	$('.accordian_tab_header > .accordian_tabs > ul:eq(2)').hide();
	
});