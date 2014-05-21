var FormValidator = function () {
    // function to initiate Validation Sample 1
    var runValidator1 = function () {
        
                
        var form1 = $('#form');
        var errorHandler1 = $('.errorHandler', form1);
        var successHandler1 = $('.successHandler', form1);
        
        $('#form').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
                name: {
                    minlength: 2,
                    required: true
                },
                title: {
                    minlength: 2,
                    required: true
                },
                desc: "getEditorValue",
                seo_title: {
                    minlength: 2,
                    required: true
                },
                seo_desc: {
                    minlength: 2,
                    required: true
                },
                og_title: {
                    minlength: 2,
                    required: true
                },
                og_desc: {
                    minlength: 6,
                    required: true
                },
                short_desc: {
                    minlength: 6,
                    required: true
                },
                content: "getEditorValue"
            },
            messages: {
                name: "Please specify category name",
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler1.hide();
                errorHandler1.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');

            },
            submitHandler: function (form) {
                successHandler1.show();
                errorHandler1.hide();


                // action on successful form submition
                var title = $("#title").val(),
                name = $("#name").val(),
                desc = $("#descMain").find("div.note-editable").html(),
                ogTitle = $("#ogTitle").val(),
                ogDesc = $("#ogDesc").val(),
                seoTitle = $("#seoTitle").val(),
                seoDesc = $("#seoDesc").val(),
                content = $("#contentMain").find("div.note-editable").html(),
                shortDesc = $("#shortDesc").val(),
                imgUrl = $(".fileupload-preview").find("img").attr('src'),
                pageType = $("#pageType").val(),
                ID = $("#ID").val();


                $.post(catAction, {ID:ID, name:name, title:title, desc:desc, ogTitle:ogTitle, ogDesc:ogDesc, seoTitle:seoTitle, seoDesc:seoDesc, content:content, shortDesc:shortDesc, imgUrl:imgUrl, pageType:pageType}, function(data){
                $("#xyz").html(data);    
                });
                // submit form
                //$('#form').submit();
            }
        });
        
    };
    
    var runValidator3 = function () {
         
        var form3 = $('#form-deal');
        var errorHandler3 = $('.errorHandler', form3);
        var successHandler3 = $('.successHandler', form3);
        
        $('#form-deal').validate({
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "dd" || element.attr("name") == "mm" || element.attr("name") == "yyyy") {
                    error.insertAfter($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
                title: {
                    minlength: 2,
                    required: true
                },
                desc: "getEditorValue",
                seo_title: {
                    minlength: 2,
                    required: true
                },
                seo_desc: {
                    minlength: 2,
                    required: true
                },
                og_title: {
                    minlength: 2,
                    required: true
                },
                og_desc: {
                    minlength: 6,
                    required: true
                },
                store_name: {
                    required: true
                },
                category: {
                    required: true
                },
                affiliate_url: {
                    required: true
                },
                content: "getEditorValue"
            },
            messages: {
                store_name: "Please specify store name",
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler3.hide();
                errorHandler3.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');

            },
            submitHandler: function (form) {
                successHandler3.show();
                errorHandler3.hide();
              
                // action on successful form submition
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
                slugUrl = $("#slugUrl").val(),
                author = $("#author").val(),
                couponCode = $("#couponCode").val(),
                imgUrl = $(".fileupload-preview").find("img").attr('src'),
                pageType = $("#pageType").val(),
                dealID = $("#dealID").val();


                $.post(dealAction, {storeName:storeName, title:title, desc:desc, seoTitle:seoTitle, seoDesc:seoDesc, ogTitle:ogTitle, ogDesc:ogDesc, content:content, category:category, originalPrice:originalPrice, finalPrice:finalPrice, discount:discount, expiryDate:expiryDate, shippingCharges:shippingCharges, offerText:offerText, affiliateUrl:affiliateUrl, couponCode:couponCode, imgUrl:imgUrl, pageType:pageType, author:author, dealID:dealID, slugUrl:slugUrl}, function(data){
                    $("#xyz").html(data);
                    $("#hiddenLastID").val(data);
                    $("#saveCol").hide();
                    $("#updateCol").show();

                    $("#previewDeals").removeAttr("disabled");
                });
                // submit form
                //$('#form').submit();
            }
        });
        
    };

    // function to initiate Validation Sample 2
    var runValidator2 = function () {
        var form2 = $('#form2');
        var errorHandler2 = $('.errorHandler', form2);
        var successHandler2 = $('.successHandler', form2);
        $.validator.addMethod("getEditorValue", function () {
            $("#editor1").val($('.summernote').code());
            if ($("#editor1").val() != "" && $("#editor1").val() != "<br>") {
                $('#editor1').val('');
                return true;
            } else {
                return false;
            }
        }, 'This field is required.');
        form2.validate({
            errorElement: "span", // contain the error msg in a small tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.hasClass("ckeditor")) {
                    error.appendTo($(element).closest('.form-group'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: "",
            rules: {
                name: {
                    minlength: 2,
                    required: true
                },
                lastname2: {
                    minlength: 2,
                    required: true
                },
                email2: {
                    required: true,
                    email: true
                },
                occupation: {
                    required: true
                },
                dropdown: {
                    required: true
                },
                services: {
                    required: true,
                    minlength: 2
                },
                creditcard: {
                    required: true,
                    creditcard: true
                },
                url: {
                    required: true,
                    url: true
                },
                zipcode2: {
                    required: true,
                    number: true,
                    minlength: 5,
                    minlength: 5
                },
                city2: {
                    required: true
                },
                editor1: "getEditorValue",
                editor2: {
                    required: true
                }
            },
            messages: {
                name: "Please specify your first name",
                lastname: "Please specify your last name",
                email: {
                    required: "We need your email address to contact you",
                    email: "Your email address must be in the format of name@domain.com"
                },
                services: {
                    minlength: jQuery.format("Please select  at least {0} types of Service")
                }
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                successHandler2.hide();
                errorHandler2.show();
            },
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            },
            submitHandler: function (form) {
                successHandler2.show();
                errorHandler2.hide();
                // submit form
                //$('#form2').submit();
            }
        });
        $('.summernote').summernote({
            height: 220,
            tabsize: 2
        });
        CKEDITOR.disableAutoInline = true;
        $('textarea.ckeditor').ckeditor();
    };
    return {
        //main function to initiate template pages
        init: function () {
            runValidator1();
            runValidator2();
            runValidator3();
        }
    };
}();