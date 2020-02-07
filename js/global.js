$('input').click(function() {
    $('#x').text(this.checked ? "is checked" : "is not checked");
});

$(document).ready(function(){ 
	$('input').click(function() {
	    $('#x').text(this.checked ? "is checked" : "is not checked");
	});
};