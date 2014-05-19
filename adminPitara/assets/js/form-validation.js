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
                og_title = $("#og_title").val(),
                og_desc = $("#og_desc").val(),
                seo_title = $("#seo_title").val(),
                seo_desc = $("#seo_desc").val(),
                content = $("#contentMain").find("div.note-editable").html(),
                short_desc = $("#short_desc").val(),
                img_url = $(".fileupload-preview").find("img").attr('src'),
                page_type = $("#page_type").val(),
                ID = $("#ID").val();


                $.post('http://localhost/dealspitara/dpv2/adminPitara/add_category_action.php', {ID:ID, name:name, title:title, desc:desc, og_title:og_title, og_desc:og_desc, seo_title:seo_title, seo_desc:seo_desc, content:content, short_desc:short_desc, img_url:img_url, page_type:page_type}, function(data){
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
                slug_url = $("#slug_url").val(),
                author = $("#author").val(),
                coupon_code = $("#coupon_code").val(),
                img_url = $(".fileupload-preview").find("img").attr('src'),
                page_type = $("#page_type").val(),
                dealID = $("#dealID").val();


                $.post('http://localhost/dealspitara/dpv2/adminPitara/add_deals_action.php', {store_name:store_name, title:title, desc:desc, seo_title:seo_title, seo_desc:seo_desc, og_title:og_title, og_desc:og_desc, content:content, category:category, original_price:original_price, final_price:final_price, discount:discount, expiry_date:expiry_date, shipping_charges:shipping_charges, offer_text:offer_text, affiliate_url:affiliate_url, coupon_code:coupon_code, img_url:img_url, page_type:page_type, author:author, dealID:dealID, slug_url:slug_url}, function(data){
                    
                    $("#hidden_lastID").val(data);
                    $("#save_col").hide();
                    $("#update_col").show();

                    $("#preview_deals").removeAttr("disabled");
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