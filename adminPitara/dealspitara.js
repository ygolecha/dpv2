$(document).ready(function(){

    $('#search_term').keyup(function(){

        var term = $('#search_term').val(),
            pageType = $("#pageType").val();
            $.post(search, {term:term,page:pageType}, function(data){
               
               $("#panel-body").html(data);
               $(".pagination").hide();    
           });  
                 
    });

	$('#title').keyup(function(){

        var title = $('#title').val();
        $('#seoTitle').val(title);
        $('#ogTitle').val(title);
        $('#hiddenTitle').val(title);
        
	});

    $("#descMain").on("keyup", function(){

        var desc = $(this).find('div.note-editable').html();
        $('#seoDesc').val(desc);
        $('#ogDesc').val(desc);
    });

    $("#addDealsMain").click(function(){
       
                var title = $("#title").val(),
                storeName = $("#storeName").val(),
                desc = $("#descMain").find("div.note-editable").html(),
                ogTitle = $("#og_Title").val(),
                ogDesc = $("#ogDesc").val(),
                seoTitle = $("#seoTitle").val(),
                seoDesc = $("#seoDesc").val(),
                content = $("#contentMain").find("div.note-editable").html(),
                category = $("#category").val(),
                originalPrice = $("#originalPrice").val(),
                finalPrice = $("#finalPrice").val(),
                discount = $("#discount").val(),
                expiryDate = $("#expiryDate").val(),
                shippingCharges = $("#shippingCharges").val(),
                offerText = $("#offerText").val(),
                affiliateUrl = $("#affiliateUrl").val(),
                author = $("#author").val(),
                couponCode = $("#couponCode").val(),
                imgUrl = $(".fileupload-preview").find("img").attr('src'),
                dealFlag = "1",
                dealID = $("#hiddenLastID").val();


                $.post(dealAction, {storeName:storeName, title:title, desc:desc, seoTitle:seoTitle, seoDesc:seoDesc, ogTitle:ogTitle, ogDesc:ogDesc, content:content, category:category, originalPrice:originalPrice, finalPrice:finalPrice, discount:discount, expiryDate:expiryDate, shippingCharges:shippingCharges, offerText:offerText, affiliateUrl:affiliateUrl, couponCode:couponCode, imgUrl:imgUrl, author:author, dealID:dealID, flag:dealFlag}, function(data){
                    $("#addDealsMain").attr("disabled","disabled");
                    if(dealID == "") {
                    $("#saveDeals").attr("disabled","disabled");    
                    }

                });     

    });


    $("#updateDeals").click(function(){
       
                var title = $("#title").val(),
                storeName = $("#storeName").val(),
                desc = $("#descMain").find("div.note-editable").html(),
                ogTitle = $("#ogTitle").val(),
                ogDesc = $("#ogDesc").val(),
                seoTitle = $("#seoTitle").val(),
                seoDesc = $("#seoDesc").val(),
                content = $("#contentMain").find("div.note-editable").html(),
                category = $("#category").val(),
                originalPrice = $("#originalPrice").val(),
                finalPrice = $("#finalPrice").val(),
                discount = $("#discount").val(),
                expiryDate = $("#expiryDate").val(),
                shippingCharges = $("#shippingCharges").val(),
                offerText = $("#offerText").val(),
                affiliateUrl = $("#affiliateUrl").val(),
                author = $("#author").val(),
                couponCode = $("#couponCode").val(),
                imgUrl = $(".fileupload-preview").find("img").attr('src'),
                dealFlag = "0",
                dealID = $("#hiddenLastID").val();


                $.post(dealAction, {storeName:storeName, title:title, desc:desc, seoTitle:seoTitle, seoDesc:seoDesc, ogTitle:ogTitle, ogDesc:ogDesc, content:content, category:category, originalPrice:originalPrice, finalPrice:finalPrice, discount:discount, expiryDate:expiryDate, shippingCharges:shippingCharges, offerText:offerText, affiliateUrl:affiliateUrl, couponCode:couponCode, imgUrl:imgUrl, author:author, dealID:dealID, flag:dealFlag}, function(data){
                    
                });     

    });


     $("#addDealsOld").click(function(){
       
                var title = $("#title").val(),
                storeName = $("#storeName").val(),
                desc = $("#descMain").find("div.note-editable").html(),
                ogTitle = $("#ogTitle").val(),
                ogDesc = $("#ogDesc").val(),
                seoTitle = $("#seoTitle").val(),
                seoDesc = $("#seoDesc").val(),
                content = $("#contentMain").find("div.note-editable").html(),
                category = $("#category").val(),
                originalPrice = $("#originalPrice").val(),
                finalPrice = $("#finalPrice").val(),
                discount = $("#discount").val(),
                expiryDate = $("#expiryDate").val(),
                shippingCharges = $("#shippingCharges").val(),
                offerText = $("#offerText").val(),
                affiliateUrl = $("#affiliateUrl").val(),
                author = $("#author").val(),
                couponCode = $("#couponCode").val(),
                imgUrl = $(".fileupload-preview").find("img").attr('src'),
                dealFlag = "1",
                dealID = $("#dealID").val();


                $.post(dealActionOld, {storeName:storeName, title:title, desc:desc, seoTitle:seoTitle, seoDesc:seoDesc, ogTitle:ogTitle, ogDesc:ogDesc, content:content, category:category, originalPrice:originalPrice, finalPrice:finalPrice, discount:discount, expiryDate:expiryDate, shippingCharges:shippingCharges, offerText:offerText, affiliateUrl:affiliateUrl, couponCode:couponCode, imgUrl:imgUrl, author:author, dealID:dealID, flag:dealFlag}, function(data){
                    $("#res").html('UPDATED');
                });     

    });

         

});