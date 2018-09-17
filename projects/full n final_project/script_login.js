window.onload = function() 
{
	validform();
};
function validform() 
{
	document.getElementById("login").onsubmit = function()
	{
		var username= document.getElementById("name").value;
		var password = document.getElementById("password").value;
		if(username=="" || password=="")
            {
                alert("Enter all deltails");
                return false;
            }
        else
            {
               return true;
            }
	};
}
