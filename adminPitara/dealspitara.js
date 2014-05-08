$(document).ready(function(){

	$('#title').keyup(function(){

        var title = $('#title').val();
        $('#seo_title').val(title);
        $('#og_title').val(title);
        
	});

    $("#descMain").on("keyup", function(){

        var desc = $(this).find('div.note-editable').html();
        $('#seo_desc').val(desc);
        $('#og_desc').val(desc);
    });

         

});