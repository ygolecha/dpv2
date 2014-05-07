$(document).ready(function(){

	$('#title').keyup(function(){

        var title = $('#title').val();
        $('#seo_title').val(title);
        $('#og_title').val(title);
        
	});

    $("#desc").on("keyup", function(){

        var desc = $(this).find('div.note-editable').html();
        $('#seo_desc').val(desc);
        $('#og_desc').val(desc);
    });

    $("#add_category").click(function(){

        var title = $("#title").val(),
            name = $("#name").val(),
            desc = $("#desc").find("div.note-editable").html(),
            og_title = $("#og_title").val(),
            og_desc = $("#og_desc").val(),
            content = $("#content").find("div.note-editable").html(),
            short_desc = $("#short_desc").val(),
            img_url = $(".fileupload-preview").find("img").attr('src');

            $.post('http://localhost/dealspitara/dpv2/adminPitara/add_category_action.php', {name:name, title:title, desc:desc, og_title:og_title, og_desc:og_desc, content:content, short_desc:short_desc, img_url:img_url}, function(data){
                $(".result").html(data);
                $("#title").val('');
                $("#desc").find("div.note-editable").html('');
                $("#seo_title").val('');
				$("#seo_desc").val('');
				$("#og_title").val('');
				$("#og_desc").val('');
				$("#content").find("div.note-editable").html('');
				$("#short_desc").val('');
            });
            
    });

     

});