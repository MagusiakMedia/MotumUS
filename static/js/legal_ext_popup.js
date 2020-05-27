$(document).ready(function() {
	/* set up global vars */
	var tmpurl = '';
	var whiteListLinks = new Array();

	/* get the whitelist using JSONP */
	$.ajax({
		type : 'GET',
		url : 'http://labeling.bayercare.com/omr/online/wl.json?callback=?',
		async : false,
		jsonpCallback : 'jsonCallback',
		contentType : "application/json",
		dataType : 'jsonp',
		success : function(json) {
			/* populate the array */
			whiteListLinks = json.sites;
		}
	});
	
	$("#externalContinue").click(function() {
		$('#external-modal').modal('hide');
		//other external links should get a new window
		//window.open(tmpurl); <- Causing link to open twice.
	});

	/* check all <a href=""> for "http" and mark with external class */
	$("a[href^='http']").addClass('external');

	/* check .external <a> against whitelist array when clicked */
	$('a.external').click(function(e) {

		tmpurl = $(this).attr("href");

		var index;
		var isWhitelisted = false;

		/* check for overrides */
		if ($(this).hasClass('external_off')) {
			isWhitelisted = true;
		} else if ($(this).hasClass('external_on')) {
			isWhitelisted = false;
		} else {
			/* no overrides present, refer to whitelist. */
			for ( index = 0; index < whiteListLinks.length; ++index) {
				if (tmpurl.indexOf(whiteListLinks[index]) > 0) {
					isWhitelisted = true;
					return;
				}
			}
		}
		if (!isWhitelisted) {
			e.preventDefault();
			$('#external-modal').modal('show');
		}
	});
});