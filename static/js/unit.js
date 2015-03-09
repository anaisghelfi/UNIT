/*****************************************HOMEPAGE****************************************/

/*Hide select domain*/
$("#domaine-search").hide();

/*Display select domain*/
function checkSearchValue()  {
	var value = $("#searchCriteria").val();
	if (value == 'domaine') {
		$("#term-search").hide();
		$("#domaine-search").fadeIn(200);
	}
	else {
		$("#domaine-search").hide();
		$("#term-search").fadeIn(200);
	}
}