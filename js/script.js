$(document).ready(function(){
	$('#test').click(function(){
		window.location.href='/register/step1';
	});
        
        $('#toregister').click(function(){
           window.location.href='/register/step4';
       })

       $('#ckeditor').ckeditor();
       
       $("#pagescont").validate({
		rules: {
			title: "required"
                     //   ckeditor: "required"
            },
		messages: {
			title: "Please enter your title"
                     //   ckeditor : "Please fill the page content"
		}
	});
        
       $("#signupform").validate({
		rules: {
			domain: "required",
			password: {
				required: true,
				minlength: 5
			},
			conf_pass: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			email: {
				required: true,
				email: true
                        }  
		},
		messages: {
			domain: "Please enter your domain",
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			conf_pass: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			email: {
                            required:"Please enter a valid email address"
                        }
		}
	});

	$('#menu li[id^=menu_]').click(function(){
		$('.page').hide();
		$('#page_' + $(this).attr('id')).show();

		return false;
	});
});
