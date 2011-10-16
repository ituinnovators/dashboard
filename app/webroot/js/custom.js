/*
Author: Vanja Cosic (vcos)
Description: First fronted demo of ITU Dashboard.
*/	

$(function() {
	// Runs on document load and shows dialog.
	setTimeout(function() {
				$(".welcome").show("fade", {}, 1000);
			}, 1500);	
			
	
	// jQuery UI Sortables code.
	$( ".column" ).sortable({
		connectWith: ".column"
	});

	$( ".portlet" ).addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
		.find( ".portlet-header" )
			.addClass( "ui-widget-header ui-corner-all" )
			.prepend( "<span class='ui-icon ui-icon-minusthick'></span>")
			.end()
		.find( ".portlet-content" );

	$( ".portlet-header .ui-icon" ).click(function() {
		$( this ).toggleClass( "ui-icon-minusthick" ).toggleClass( "ui-icon-plusthick" );
		$( this ).parents( ".portlet:first" ).find( ".portlet-content" ).toggle();
	});

	$( ".column" ).disableSelection();

	// Custom click handlers	
	$(".dialog-option").click(function () {
  		$(".welcome").hide("fade", {}, 1000);
  		return false;
	});
	
	$(".widget-remove").click(function () {
  		$(this).parents(".widget:first").hide("fade", {}, 500);
  		return false;
	});
		
	$(".widget-right").click(function () {
  		$(this).parents().find(".portlet-content:first").html(getMessage());
  		return false;
	});	
	
	// Demo stuff
	
	// Disregard the messy array, it's just for demonstration purposes.
	var messages = ["I'll tell them you went down prying the wedding ring off his cold, dead finger. I have to go and buy a single piece of fruit with a coupon and then return it, making people wait behind me while I complain. I was having the most wonderful dream.", "I am your king. Knights of Ni, we are but simple travelers who seek the enchanter who lives beyond these woods. The nose? Well, I didn't vote for you. Shut up! What a strange person.", "Hi. I'm Troy McClure. You may remember me from such self-help tapes as 'Smoke Yourself Thin' and 'Get Some Confidence, Stupid!' How is education supposed to make me feel smarter?", "You are the last hope of the universe. Ooh, name it after me! I can explain. It's very valuable. Now, now. Perfectly symmetrical violence never solved anything. Oh, I don't have time for this. "];
	
	// Randomizer function
	function getMessage() {
	   return messages[Math.floor(Math.random() * messages.length)];
	}

	
});