

$(document).ready(function() {

  var form3 = $('#sendMessageForm'),
      name3=$("#sendMessageForm #name")
      email3 = $('#sendMessageForm #email'),
      phone3 = $('#sendMessageForm #phone'),
      message3 = $('#sendMessageForm #message'),
      info = $('#sendMessageForm #info'),
      loader = $('#sendMessageForm #loader'),
      submit3 = $("#sendMessageForm #submitSendMsg");
  
 
  submit3.click(function(e) {
    e.preventDefault();
    if(validatecontact()) {

      info.html('Loading...').css('color', 'red').slideDown();

      $.ajax({
        type: "POST",
        url: "mailer.php",
        data: form.serialize(),
        success:function(data) {
         response=jQuery.parseJSON(data);
        if(response.success) {
          form[0].reset();
          info.html('Message sent!').css('color', 'green').slideDown();
        } else {
          info.html('Could not send Sorry!').css('color', 'red').slideDown();
        }
      }

      });
    }
  });
  
  function validatecontact() {
    var valid = true;
    var regexemail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var regexmobile = /^[6-9]\d{9}$/gi;
    
    if(!regexemail.test(email3.val())) {
      email3.css('border-color', 'red');
      valid = false;
    }
    if(!regexmobile.test(phone3.val())) {
      phone3.css('border', '2px solid red');
      valid = false;
    }
    
    if($.trim(message3.val()) === "") {
      message3.css('border-color', 'red');
      valid = false;
    }
    
    return valid;
  }

  



  var enrollform = $('#enrollform'),
      enrollemail = $('#enrollform #email'),
      enrollphone = $('#enrollform #phone'),
      enrollfname = $('#enrollform #first_name'),
      enrolllname = $('#enrollform #last_name'),
      enrolladdr = $('#enrollform #address'),
      submit = $("#submitEnroll");
  

 
  submit.click(function(e) {
    e.preventDefault();
    if(validateenroll()) {

      $.ajax({
        type: "POST",
        url: "enrollData.php",
        data: enrollform.serialize(),
        success:function(data) {
         response=jQuery.parseJSON(data);
        if(response.success) {
          enrollform[0].reset();
          swal("Enrolled","We will contact you shortly","success");
        } else {
          swal("Failed to Enroll","","error");
        }
      }

      });


    }
  });
  
 



// course


  var enrollform1 = $('#enrollCourseform'),
      enrollemail1 = $('#enrollCourseform #email'),
      enrollphone1 = $('#enrollCourseform #phone'),
      enrollfname1 = $('#enrollCourseform #first_name'),
      enrolllname1 = $('#enrollCourseform #last_name'),
      enrolladdr1 = $('#enrollCourseform #address'),
      submit1 = $("#submitEnrollCourse");
  

 
  submit1.click(function(e) {
    // console.log("clicked")
    e.preventDefault();
    if(validateenroll2()) {
      // console.log("valid")
      $.ajax({
        type: "POST",
        url: "enrollData2.php",
        data: enrollform1.serialize(),
        success:function(data) {
         response=jQuery.parseJSON(data);
        if(response.success) {
          enrollform1[0].reset();
          swal("Enrolled","We will contact you shortly","success");
        } else {
          swal("Failed to Enroll","","error");
        }
      }

      });


    }
  });
  
  // 
   function validateenroll() {
    var valid = true;
    var regexemail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var regexmobile = /^[6-9]\d{9}$/gi;
    
    if(!regexemail.test(enrollemail.val())) {
      enrollemail.css('border', '2px solid red');
      valid = false;
    }
    if(!regexmobile.test(enrollphone.val())) {
      enrollemail.css('border', '2px solid red');
      valid = false;
    }
    if($.trim(enrolladdr.val()) === "" || $.trim(enrolladdr.val()).length <=2) {
      enrolladdr.css('border', '2px solid red');
      valid = false;
    }
    if($.trim(enrollfname.val()) === "" || $.trim(enrollfname.val()).length <=2) {
      enrollfname.css('border', '2px solid red');
      valid = false;
    }
    
     if($.trim(enrolllname.val()) === "" || $.trim(enrolllname.val()).length <=2) {
      enrolllname.css('border', '2px solid red');
      valid = false;
    }
    return valid;
  }

// 
 
  // 
   function validateenroll2() {
    var valid = true;
    var regexemail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var regexmobile = /^[6-9]\d{9}$/gi;
    
    if(!regexemail.test(enrollemail1.val())) {
      enrollemail1.css('border', '2px solid red');
      valid = false;
    }
    if(!regexmobile.test(enrollphone1.val())) {
      enrollemail1.css('border', '2px solid red');
      valid = false;
    }
    if($.trim(enrolladdr1.val()) === "" || $.trim(enrolladdr1.val()).length <=2) {
      enrolladdr1.css('border', '2px solid red');
      valid = false;
    }
    if($.trim(enrollfname1.val()) === "" || $.trim(enrollfname1.val()).length <=2) {
      enrollfname1.css('border', '2px solid red');
      valid = false;
    }
    
     if($.trim(enrolllname1.val()) === "" || $.trim(enrolllname1.val()).length <=2) {
      enrolllname1.css('border', '2px solid red');
      valid = false;
    }
    return valid;
  }





});// onready





