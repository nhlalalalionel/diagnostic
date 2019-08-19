$(document).ready(function(){  
  $("#signinform").validate({
    rules:{
      name:{
       required:true,
        minlength:3
      },
	  problem:{
       required:true,
        maxlength:100
      },
	  updates:{
       required:true,
        maxlength:100
      },
	  surname:{
       required:true,
        minlength:3
      },
	  
	 role:{
       required:true,
	   
      },
	  
	contact:{
       required:true,
        minlength:6
      },	
		
      email:{
       required:true,
       email:true
      },
	  
	  tel:{
       required:true,
       tel:true,
	   maxlength:10
      },
	  
      address:{
       required:true,
       minlength:5
      },
	  serial:{
       required:true,
      },
	  model:{
       required:true,
      },
	   change:{
       required:true,
      },
	  ticket:{
       required:true,
      },
	   password:{
       required:true,
       minlength:5
      },
	  password1:{
       required:true,
       minlength:5
      },
      password2:{
        required:true,
        equalTo:"#password1"
      }
    }
  });
  $("#signupform").validate({
    rules:{
      id:{
       required:true,
        minlength:1
      },
	  date:{
       required:true,
       
      },
	  date2:{
       required:true,
       
      },
       email:{
        required:true,
       email:true
      },
      password1:{
       required:true,
       minlength:5
      },
      password2:{
        required:true,
        equalTo:"#password1"
      }
    }
  });
	$(".tab").click(function(){
  var x = $(this).attr('id');
  if(x=='signup'){
  	$('#signin').removeClass('select');
  	$('#signup').addClass('select');
  	$('#signupbox').slideDown();
  	$('#signinbox').slideUp();
  }
  else{
  	$('#signup').removeClass('select');
  	$('#signin').addClass('select');
  	$('#signinbox').slideDown();
  	$('#signupbox').slideUp();

  }
	});
});

 
