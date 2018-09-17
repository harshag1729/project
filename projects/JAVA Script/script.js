window.onload = function() 
{
	validform();
};
function validform() 
{
	document.getElementById("form1").onsubmit = function()
	{
		var x= document.getElementById("email_id").value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		var mob = document.getElementById("mobile_no").value;
		var quo = Math.floor(mob/1000000000); 
		var password = document.getElementById("pass").value;
		var cpassword = document.getElementById("cpass").value;
		
		if(document.getElementById("name").value == "") 
		{
			alert("*Please enter your name");
			return false;
		}
		else if(document.getElementById("email_id").value == "") 
		{
			alert("*Please enter your email");
			return false;
		}
		else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
		  alert("*Not a valid e-mail address");
		  return false;
		}

		else if(document.getElementById("pass").value == "") 
		{
			alert("*Please enter your password");
			return false;
		}
		else if(document.getElementById("pass").value.length <6) 
		{
			alert("*Password too small");
			return false;
		}
		else if(document.getElementById("cpass").value == "") 
		{
			alert("*Please re-enter your password");
			return false;
		}
		else if(password != cpassword)
		{
			alert("*Password did not match");
			return false;
		} 
		else if(document.getElementById("mobile_no").value == "") 
		{
			alert("*Please enter your mobile number");
			return false;
		}
		else if(document.getElementById("mobile_no").value.length !=10) 
		{
			alert("*Invalid mobile number");
			return false;
		}
		else if(quo<=5)
		{
			alert("*Invalid mobile number");
			return false;
		}
		else
		{
			return true;
		}
	};
}
