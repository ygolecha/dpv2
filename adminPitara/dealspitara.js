$(document).ready(function(){
/*
    $('#search_term').keyup(function(){

        var term = $('#search_term').val(),
            pageType = $("#pageType").val();
            $.post('http://localhost/dealspitara/dpv2/adminPitara/search.php', {term:term,page:pageType}, function(data){
               
               $("#panel-body").html(data);
               $(".pagination").hide();    
           });  
                 
    });
*/
	$('#title').keyup(function(){

        var title = $('#title').val();
        $('#seo_title').val(title);
        $('#og_title').val(title);
        $('#hidden_title').val(title);
        
	});

    $("#descMain").on("keyup", function(){

        var desc = $(this).find('div.note-editable').html();
        $('#seo_desc').val(desc);
        $('#og_desc').val(desc);
    });

    $("#add_deals_main").click(function(){
       
                var title = $("#title").val(),
                store_name = $("#store_name").val(),
                desc = $("#descMain").find("div.note-editable").html(),
                og_title = $("#og_title").val(),
                og_desc = $("#og_desc").val(),
                seo_title = $("#seo_title").val(),
                seo_desc = $("#seo_desc").val(),
                content = $("#contentMain").find("div.note-editable").html(),
                category = $("#category").val(),
                original_price = $("#original_price").val(),
                final_price = $("#final_price").val(),
                discount = $("#discount").val(),
                expiry_date = $("#expiry_date").val(),
                shipping_charges = $("#shipping_charges").val(),
                offer_text = $("#offer_text").val(),
                affiliate_url = $("#affiliate_url").val(),
                author = $("#author").val(),
                coupon_code = $("#coupon_code").val(),
                img_url = $(".fileupload-preview").find("img").attr('src'),
                deal_flag = "1",
                dealID = $("#hidden_lastID").val();


                $.post('http://localhost/dealspitara/dpv2/adminPitara/add_deals_action.php', {store_name:store_name, title:title, desc:desc, seo_title:seo_title, seo_desc:seo_desc, og_title:og_title, og_desc:og_desc, content:content, category:category, original_price:original_price, final_price:final_price, discount:discount, expiry_date:expiry_date, shipping_charges:shipping_charges, offer_text:offer_text, affiliate_url:affiliate_url, coupon_code:coupon_code, img_url:img_url, author:author, dealID:dealID, flag:deal_flag}, function(data){
                    $("#add_deals_main").attr("disabled","disabled");
                    if(dealID == "") {
                    $("#save_deals").attr("disabled","disabled");    
                    }

                });     

    });


    $("#update_deals").click(function(){
       
                var title = $("#title").val(),
                store_name = $("#store_name").val(),
                desc = $("#descMain").find("div.note-editable").html(),
                og_title = $("#og_title").val(),
                og_desc = $("#og_desc").val(),
                seo_title = $("#seo_title").val(),
                seo_desc = $("#seo_desc").val(),
                content = $("#contentMain").find("div.note-editable").html(),
                category = $("#category").val(),
                original_price = $("#original_price").val(),
                final_price = $("#final_price").val(),
                discount = $("#discount").val(),
                expiry_date = $("#expiry_date").val(),
                shipping_charges = $("#shipping_charges").val(),
                offer_text = $("#offer_text").val(),
                affiliate_url = $("#affiliate_url").val(),
                author = $("#author").val(),
                coupon_code = $("#coupon_code").val(),
                img_url = $(".fileupload-preview").find("img").attr('src'),
                deal_flag = "0",
                dealID = $("#hidden_lastID").val();


                $.post('http://localhost/dealspitara/dpv2/adminPitara/add_deals_action.php', {store_name:store_name, title:title, desc:desc, seo_title:seo_title, seo_desc:seo_desc, og_title:og_title, og_desc:og_desc, content:content, category:category, original_price:original_price, final_price:final_price, discount:discount, expiry_date:expiry_date, shipping_charges:shipping_charges, offer_text:offer_text, affiliate_url:affiliate_url, coupon_code:coupon_code, img_url:img_url, author:author, dealID:dealID, flag:deal_flag}, function(data){
                    
                });     

    });


     $("#add_deals_old").click(function(){
       
                var title = $("#title").val(),
                store_name = $("#store_name").val(),
                desc = $("#descMain").find("div.note-editable").html(),
                og_title = $("#og_title").val(),
                og_desc = $("#og_desc").val(),
                seo_title = $("#seo_title").val(),
                seo_desc = $("#seo_desc").val(),
                content = $("#contentMain").find("div.note-editable").html(),
                category = $("#category").val(),
                original_price = $("#original_price").val(),
                final_price = $("#final_price").val(),
                discount = $("#discount").val(),
                expiry_date = $("#expiry_date").val(),
                shipping_charges = $("#shipping_charges").val(),
                offer_text = $("#offer_text").val(),
                affiliate_url = $("#affiliate_url").val(),
                author = $("#author").val(),
                coupon_code = $("#coupon_code").val(),
                img_url = $(".fileupload-preview").find("img").attr('src'),
                deal_flag = "1",
                dealID = $("#dealID").val();


                $.post('http://localhost/dealspitara/dpv2/adminPitara/add_deals_action_old.php', {store_name:store_name, title:title, desc:desc, seo_title:seo_title, seo_desc:seo_desc, og_title:og_title, og_desc:og_desc, content:content, category:category, original_price:original_price, final_price:final_price, discount:discount, expiry_date:expiry_date, shipping_charges:shipping_charges, offer_text:offer_text, affiliate_url:affiliate_url, coupon_code:coupon_code, img_url:img_url, author:author, dealID:dealID, flag:deal_flag}, function(data){
                    $("#res").html('UPDATED');
                });     

    });

         

});