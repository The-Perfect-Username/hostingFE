$(function() {

    var input = $('#videoFileUpload');
    var label	 = input.siblings(),
        labelVal = label.children('span').text();

    input.on('change', function(e)
    {
    	var fileName = '';

    	fileName = e.target.value.split( '\\' ).pop();

    	if( fileName ) {
    		label.find( 'span' ).text(fileName);
            $("#uploadBtnContainer").css("display", "flex");
    	} else {
    		label.text(labelVal);
        }
    });

});
