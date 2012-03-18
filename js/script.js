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
        
        $(".plan").mouseover(function(){
    	$(this).removeClass().addClass("plan changeover");
        }).mouseout(function(){
            $(this).removeClass().addClass("plan shadow");		
        }); 
	
        $("#start_register").hover(function(){
            $(this).attr("src","/images/registration_over.png");
            },function() {
            $(this).attr("src","/images/registration.png");
        });
        
        // За табовете        
	$('.single_content').hide();
	$('.navi li:first').addClass('active');
	$('.single_content:first').show();

	$('.navi li').click(function() {
		$('.navi li').removeClass('active');
		$(this).addClass('active');
		$('.single_content').hide();
		var activeTab = $(this).find('a').attr('href');
		$(activeTab).fadeIn(500);
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
			email: {
                            required:"Please enter a valid email address"
                        }
		}
	});
});
