// JavaScript Document

var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate()
{
	var username = document.getElementById("txtEmail").value;
	var password = document.getElementById("txtPassword").value;
	
	if ( username == "user@gmail.com" && password == "user")
	{
		alert ("Login successfully");
		window.location.href  = "veiw.html"; // Redirecting to other //page.
		return false;
	}
	else
	{
		attempt --;// Decrementing by one.
		alert("You have left "+attempt+" attempt;");
		// Disabling fields after 3 attempts.
		
		if( attempt == 0)
		{
			document.getElementById("txtEmail").disabled = true;
			document.getElementById("txtPassword").disabled = true;
			document.getElementById("btLogin").disabled = true;
			
			return false;
		}
	}
}

function validationloginEmail(){
	var email = document.getElementById("txtEmail").value;
	
	var at= email.indexOf("@");
	var dt=email.lastIndexOf(".");
	var len=email.length;
	
	if((at<2) || (dt-at<2) || (len-dt<2))
	{
		alert("Please enter your valid email address ");
		return false;
	}	
	return true;
}