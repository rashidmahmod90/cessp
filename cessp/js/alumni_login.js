function checkemail()
{
 var email=document.getElementById( "email" ).value;
 if(email)
 {
 	$.post('checkdata.php', {'user_email':email}, function(data) {
      if(data == "OK"){
      	return true;
      }else{
      	alert("Username does not Exists");
      	return false;
      }
    });
 }
 else
 {
  alert('Please enter email and password.');
  return false;
 }
}


$(document).ready(function() {
$("form").submit(function( event ){
	var email_value = $('#email').val();
	var pwd_value=$('#pwd').val();
	if(email_value == '' || pwd_value == ''){
		alert( "All Fields are required." );
		return false;
	}else if(!checkemail()){
    return true;
	}else{
		alert("Username does not Exists");
      	return false;
	}
});
});

function checkemailvalue(value)
{
 var email= value;
 if(email)
 {
 	$.post('checkdata.php', {'user_email':email}, function(data) {
      if(data == "OK"){
        return true;
      }else{
        alert("Username does not Exists");
        return false;
      }
    });
 }
 else
 {
  alert('Please enter email and password.');
  return false;
 }
}
function userpassword(email_value1,password_value1)
{
 var email1= email_value1;
 var password1= password_value1;
 if(email1)
 {
  $.post('checkdata.php', {'email1':email1,'password1':password1}, function(data) {
      if(data == "OK"){
        return "OK";
      }else{
        return "Not Exists";
      }
    });
 }
 else
 {
  alert('Please enter email and password.');
  return false;
 }
}