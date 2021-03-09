$(document).ready(function() {
	$(document).keydown(function(){
		counttext();
	});
});

function counttext(){
    var txt = $('#texttocount').val();		
	var characters = txt.length;
    var words = txt.replace( /[^\w ]/g, "" ).split( /\s+/ ).length;
	
	characters = txt.length;
	words = txt.replace( /[^\w ]/g, "" ).split( /\s+/ ).length;
	
	if (characters == 0) {
		words = 0;
	}
	
    $( '#counteroutput' ).html( 'Characters/Zeichen: <strong>' + characters + '</strong> ||  Words/Wörter: <strong>' + words + '</strong>' );
}