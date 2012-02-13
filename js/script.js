$(document).ready(function(){
	$('#test').click(function(){
		window.location.href='/register/step1';
	});
        
        $('#toregister').click(function(){
           window.location.href='/register/step3';
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
			password: {
				required: true,
				minlength: 5
			},
			email: {
				required: true,
				email: true
                        }
		},
		messages: {
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			email: "Please enter a valid email address"
		}
	});
	
	$("#contactform").validate({
		rules: {
			name: "required",
			message: {
				required: true,
				minlength: 5
			},
			email: {
				required: true,
				email: true
                        }
		},
		messages: {
			name: "Please enter your name",
			message: {
				required: "Please enter some text",
				minlength: "Your message must be at least 5 characters long"
			},
			email: "Please enter a valid email address"
		}
	});

	$('#menu li[id^=menu_]').click(function(){
		$('.page').hide();
		$('#page_' + $(this).attr('id')).show();

		return false;
	});
});
