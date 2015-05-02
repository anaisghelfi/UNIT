/*****************************************HOMEPAGE****************************************/
/********MESSAGE SESSION******/
//Si le message alerrt-inscription est présent => afficher popup confirmation
var alert = $('#alert');
if(alert.length>0) {
	alert.hide().slideDown(500);
	alert.find('.close').click(function(e) {
		e.preventDefault();
		alert.slideUp();
	})
}

/*Hide select domain*/
$("#domaine-search").hide();
var modifArray = [];

/*Display select domain*/
function checkSearchValue()  {
	var value = $("#searchCriteria").val();
	if (value == 'domaine') {
		$("#term-search").hide();
		$("#domaine-search").fadeIn(200);
		//ajax to get all domaines
		ajaxDomaine();
	}
	else {
		$("#domaine-search").hide();
		$("#term-search").fadeIn(200);
	}
}

function verification() {
	var value = $("#termsearch").val();
	$("#termsearch").css('border', 'border: 1px solid #ccc');
	if ($("#searchCriteria").val() == 'terme' && value == '') {
		$("#termsearch").css('border', '1px solid red');
		return false;
	}
	else {
		return true;
	}
}

function ajaxDomaine() {
	var lang = $("#langue").val();
				$.ajax({
		       	url : 'ajax_home', // La ressource ciblée
		        type : 'POST', // Le type de la requête HTTP.
		        dataType : 'json',
		       	data : 'type=getdomaine&lang='+lang+'',
		       	success : (function (data) {
		       		$("#domaine-search").empty();
		       		$.each(data, function(item,value) {
		       			console.log(value);
		       			if(lang == 'fr') {
		       				var newval = (value.titrefrancais).replace(" ","_");
		       				$("#domaine-search").append('<option value='+newval+'>'+value.titrefrancais+'</option>');
		       				console.log(value.titrefrancais);
		       			}
		       			else if (lang=='en') {
		       				var newval = (value.titreanglais).replace(" ","_");
		       				$("#domaine-search").append('<option value='+newval+'>'+value.titreanglais+'</option>');
		       			}
		       		})
		       		console.log(data);
		       	})
		      })
}



function getTerm(obj, lang) {
	var id = $(obj).attr('id');
				$.ajax({
		       	url : 'ajax_recherche', // La ressource ciblée
		        type : 'POST', // Le type de la requête HTTP.
		        dataType : 'json',
		       	data : 'type=getTerm&terme='+id+'&langue='+lang+'',
		       	success : (function (data) {
		       		$("#fillTerm").empty();
		       			console.log(data);
		       			if (data == '') {
		      				if(lang == 'fr') {
		       					$("#fillTerm").append("<tr><td>Pas de terme(s) associé(s)</tr></td>");
		       				}
		       				else if (lang == 'en') {
		       					$("#fillTerm").append("<tr><td>No associated term(s)</tr></td>");
		       				}
		       			}
		       			else {
				       		$.each(data, function(item,value) {
				       			console.log(value);
			
				       			if(lang == 'fr') {
				       				$("#fillTerm").append('<tr style="cursor:pointer"><td><a href="fiche-'+value[1]+'">'+value[0]+'</a></td></tr>');
				       			}
				       			else if (lang=='en') {
				       				$("#fillTerm").append('<tr style="cursor:pointer"><td><a href="ficheen-'+value[1]+'">'+value[0]+'</a></td></tr>');
				       			}
				       		})
			       		}
		       		
		       	})
		      })	 

}

function edit(obj,champs) {
	//récupère la valeur du champs à éditer
	var prevHtml = $(obj).prev().html();
	var prevText = $(obj).prev().text();
	var tab = [];
	tab.push(champs, prevText);
	modifArray.push(tab);
	console.log(modifArray);
	//vide le champs + textarea
	$(obj).prev().html("");

	console.log(champs);
	$(obj).prev().append("<textarea style='width:100%'>"+prevText+"</textarea>");
	var confirm = "<button onclick='confirmModif(this,\""+champs+"\")' style='margin-right:5px' type='button' class='btn btn-primary btn-xs'>Envoyer les modifications</button>";
	var annul = "<button onclick='annulModif(\""+champs+"\")' type='button' class='btn btn-danger btn-xs'>Annuler</button>";
	$(obj).prev().append('<div class="text-right">'+confirm+annul+'</div>');
	
}

function confirmModif(obj, champs) {
	console.log('confirm modif');
	var newtext = $("#"+champs+"").children().val();
	for (var i=0; i<modifArray.length; i++) {
		if (modifArray[i][0] == champs) {
			var old = modifArray[i][1];
		}
	}
	var url = document.URL;
	urlsplit = url.split('/');
	lastspliturl = urlsplit[urlsplit.length-1];
	var terme = parseInt(lastspliturl.split("-")[1]);
	if (lastspliturl.split("-")[0] == 'fiche') {
		var lang = 'fr';
	}
	else if (lastspliturl.split("-")[0] == 'ficheen') {
		var lang = 'en';
	}
	console.log(terme);
			$.ajax({
		       	url : 'ajax_fiche', // La ressource ciblée
		        type : 'POST', // Le type de la requête HTTP.
		       	data : 'lang='+lang+'&idterme='+terme+'&nom_champs='+champs+'&old_text='+old+'&new_text='+newtext+'',
		       	success : (function (data) { 
		       		console.log(data);
		       	})
		      });
	
	$("#"+champs+"").empty();
	$("#"+champs+"").append('<span class="label label-primary">La modification a été envoyée. Elle va être examinée par un administrateur.</span></br></br>');
	$("#"+champs+"").append(old);		
}

function annulModif(champs) {
	$("#"+champs+"").empty();
	console.log(champs);
	console.log('annul modif');
	for (var i=0; i<modifArray.length; i++) {
		console.log(modifArray[i]);
		if (modifArray[i][0] == champs) {
			console.log(modifArray[i][1]);
			$("#"+champs+"").html(modifArray[i][1]);
		}
	}
}

//////////////////////MODIF/////////////////

function refuseModif(obj, id) {
			
var name = $(obj).attr('name');
var tr = $('tr');


			$.ajax({
		       	url : 'ajax_modifications', // La ressource ciblée
		        type : 'POST', // Le type de la requête HTTP.
		        dataType: "json", 
		       	data : 'type=refuse&id='+id+'',
		       	success : (function (data) { 
					for (var i=0; i<tr.length; i++) {
						if ($(tr[i]).attr('name') == name) {
							$(tr[i]).fadeOut(500);
						}
					}		       	
				})
		      });
}


function acceptModif(obj, id) {
			
var name = $(obj).attr('name');
var tr = $('tr');
for (var i=0; i<tr.length; i++) {
	if ($(tr[i]).attr('name') == name) {
		var tri = $(tr[i]);
	}
}	
var tdoftr = $(tri).children('td');
var idterme = $(tdoftr[0]).text().trim();
var langue = $(tdoftr[1]).text().trim();
var champ = $(tdoftr[4]).text().trim();
var value = $(tdoftr[6]).text().trim();

			$.ajax({
		       	url : 'ajax_modifications', // La ressource ciblée
		        type : 'POST', // Le type de la requête HTTP.
		        dataType: "json", 
		       	data : 'type=accept&id='+id+'&idterm='+idterme+'&champ='+champ+'&lang='+langue+'&value='+value+'',
		       	success : (function (data) { 
		       		console.log(data);
		       		$(tri).fadeOut(500);
				})
		      });
}

///////////////////////////INSCRIPTION//////////////////
function returnBooleanVerification (Input) {
	$(Input).css('border', '1px solid #ccc');
	if ($(Input).val() == '') {
		$(Input).css('border-color', 'red');
		return false;
	}
	else {
		return true;
	}
}

function checkMail (Input, label) {
	$(Input).css('border', '1px solid #ccc');
	$(label).attr('class', 'sr-only');
	$(label).css('color', '#333');
	$("#emailExist").attr('class', 'sr-only');
	$("#emailExist").css('color', '#333');
	var email=$("#email").val();
	//on instancie un tableau pour contouner la non possibilité de return au sein de l'appel AJAX 
	var boolTabForAjax = [];
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($(Input).val())) {
			$.ajax({
       			url : 'ajax_home', // La ressource ciblée
       			type : 'POST', // Le type de la requête HTTP.
       			data : 'type=mailexist&name=' + email,
       			async : false,
       			success : (function (data) {
       				console.log(data.trim());
			       				if  (data.trim() == '0') {
			       					console.log('mail inexistant');
			       					boolTabForAjax.push(true);
			       				}
			       				else {
			       					console.log('mail existant');
			       					$(Input).css('border-color', 'red');
			       					$("#emailExist").attr('class', 'amount');
									$("#emailExist").css('color', 'red');
			       					boolTabForAjax.push(false);
			       				}
       						})

    		});
	}
	else {
		$(Input).css('border-color', 'red');
		if (label) {
			$(label).attr('class', 'amount');
			$(label).css('color', 'red');
		}
		boolTabForAjax.push(false);
	}
return boolTabForAjax[0];

}

function CheckPasswordLength (input, label) {
	$(input).css('border', '1px solid #ccc');
	$(label).attr('class', 'sr-only');
	$(label).css('color', '#333');	
	$("#mdpShort").attr('class', 'sr-only');

	var mdp = $(input).val();

	if (mdp == '') {
		$(input).css('border-color', 'red');
		$(label).attr('class', 'amount');
		$(label).css('color', 'red');	
		return false;	
	}
	else {
		if (mdp.length<5) {
			$("#mdpShort").attr('class', 'amount');
			$("#mdpShort").css('color', 'red');
			$(input).css('border-color', 'red');
		}
		else {
			return true;
		}
	}
}

function CheckPassword (firtIdInput, secondIdInput, label) {
	$(secondIdInput).css('border', '1px solid #ccc');
	$(label).attr('class', 'sr-only');
	$(label).css('color', '#333');	

	var firstMdpValue = $(firtIdInput).val();
	var secondMdpValue = $(secondIdInput).val();

	if (firstMdpValue !== secondMdpValue) {
		$(secondIdInput).css('border-color', 'red');
		$(label).attr('class', 'amount');
		$(label).css('color', 'red');	
		return false;	
	}
	else {
		return true;
	}
}

function verifinscription() {
	var name= returnBooleanVerification("#nom");
	var surname = returnBooleanVerification("#prenom");
	var univ = returnBooleanVerification("#universite");
	var mail = checkMail("#email", "#emailLabel");
	var boolPassEmpty = CheckPasswordLength('#mdp', "#mdpLabel");
	var passwordCheck = CheckPassword('#mdp', '#mdpconfirm', '#secondPasswordLabel');

	if ((name && surname && univ && mail && boolPassEmpty && passwordCheck) === true) {
		return true;
	}
	else {
		return false;
	}
}

function verifconnexion() {
	var mail= returnBooleanVerification("#mail");
	var pass= returnBooleanVerification("#password");

	if((mail && pass) === true ) {
		return true;
	}
	else {
		return false;
	}
}



////////////////////////////////AJOUT FICHE TERMINO///////////////////////

function ficheverif(lang) {
if (lang == 'fr') {
	$('#terme').css('border', '1px solid #CCC');
	var val = $('#terme').val();
	console.log(val);
	if (val == '') {
		$('#terme').css('border', '1px solid red');
		return false;
	}
	else {
		return true;
	}
}
}

//////////////////////MODIF/////////////////

function refuseFiche(obj, id, lang) {
			
var name = $(obj).attr('name');
var tr = $('tr');

console.log(tr);
			$.ajax({
		       	url : 'ajax_home', // La ressource ciblée
		        type : 'POST', // Le type de la requête HTTP.
		        dataType: "json", 
		       	data : 'type=refusefiche&id='+id+'&lang='+lang+'',
		       	success : (function (data) { 
					for (var i=0; i<tr.length; i++) {
						if ($(tr[i]).attr('name') == name) {
							$(tr[i]).fadeOut(500);
						}
					}		       	
				})
		      });
}


function acceptFiche(obj, id, lang) {
			
var name = $(obj).attr('name');
var tr = $('tr');
for (var i=0; i<tr.length; i++) {
	if ($(tr[i]).attr('name') == name) {
		var tri = $(tr[i]);
	}
}	
			$.ajax({
		       	url : 'ajax_home', // La ressource ciblée
		        type : 'POST', // Le type de la requête HTTP.
		        dataType: "json", 
		       	data : 'type=acceptfiche&id='+id+'&lang='+lang+'',
		       	success : (function (data) { 
		       		console.log(data);
		       		$(tri).fadeOut(500);
				})
		      });
}

/////////////////////UTILISATEURS//////////////////

function changeStatus(statut, id) {
			$.ajax({
       			url : 'ajax_users', // La ressource ciblée
       			type : 'POST', // Le type de la requête HTTP.
       			data : 'type=changestatut&id='+id+'&statut='+statut+'',
       			success : (function (data) {
       				console.log(data);
       				location.reload();
       			})
    		});		
}