function checkemail()
{
 var captche_value=document.getElementById( "captche_value" ).value;
 if(captche_value)
 {
 	$.post('checkcaptche.php', {'captche_value':captche_value}, function(data) {
      if(data == "OK"){
      	return true;
      }else{
      	alert("Captche does not match.");
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
$(document).ready(function(){
$("form").submit(function( event ){
	var email_value = $('.email').val();
	var captche_value_2 = $('#captche_value').val();
	if(email_value == ''){
		alert('Email Required.');
		return false;
	}else if(!checkcaptchevalue()){
		alert('Captche does not match.');
		return false;
	}else{
		return true;
	}
});	
});