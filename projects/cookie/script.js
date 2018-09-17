function validation()
{
    function initform();
    function validForm();
}




function initform()
{
    document.getElementById("form3").onsubmit=function();//form3 on being submitted will go to validform();
    {
        return validForm();
    }
}
function validForm()
{
    var x=document.forms["form3"]["email_id"].value;//email id goes to x. same with next all variables.
    var atpos=x.indexOf["@"];
    var dotpos=x.lastIndexOf["."];
    var mob=document.getElementById["mobile_no"].value;
    var quo=Math.floor(mob/1000000000);
    var password=document.getElementById("pass").value;
    var cpassword=document.getElementById("cpass").value;
    if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
        {
            alert ("*not valid emial address");
            return false;
        }
    else if(document.getElementById("pass").value<=6)
        {
            alert ("*password too short");
            return false;
        }
    
   
    else if(document.getElementById("mobile_no").value!=10)
        {
            alert ("not a valid mobile number");
            return false;
        }
    else if(quo=="0" || quo="1" || quo="2" || quo="3" || quo="4" || quo="5" )//same as quo<=5
        {
            alert ("*not a valid mobile number");
            return false;
        }
    else if(document.getElementById("mobile_no").value=="")
        {
            alert ("*please enter your mobile number");
        }
    else if(quo<=5)
        {
            alert ("*invalid mobile number");
            return false;
        }
}

