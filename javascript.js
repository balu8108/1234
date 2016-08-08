function validations()
{

var error=0;
var flag=0;

var firstname=document.getElementById('registerUsername').value;
if(firstname=="")
{
	 document.getElementById('fnameError').style.display="";
	 document.getElementById('registerUsername').style.border="1px solid red";
	 error=1;
}
else
{
		document.getElementById('fnameError').style.display="none";
		document.getElementById('registerUsername').style.border="";
		flag=0;
}
var surname=document.getElementById('registerSurname').value;
if(surname=="")
{
	 document.getElementById('surnameError').style.display="";
	 document.getElementById('registerSurname').style.border="1px solid red";
	 error=1;
}
else
{
		document.getElementById('surnameError').style.display="none";
		document.getElementById('registerSurname').style.border="";
		flag=0;
}
var email=document.getElementById('registerEmail').value;
if(email=="" )
{
	 document.getElementById('emailError').style.display="";
	 document.getElementById('registerEmail').style.border="1px solid red";
	 error=1;
}
else
{
	if(!email.match('^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$'))
	{
		 document.getElementById('emailError').style.display="";
		 document.getElementById('registerEmail').style.border="1px solid red";
		 document.getElementById('emailErrReport').style.display="";

		 error=1;
	}
	else
	{
		  document.getElementById('emailErrReport').style.display="none";
			document.getElementById('emailError').style.display="none";
			document.getElementById('registerEmail').style.border="";
			flag=0;
	}

}
var password=document.getElementById('registerPassword').value;
var cpassword=document.getElementById('registerCPassword').value;
if(password=="")
{
	 document.getElementById('passwordError').style.display="";
	 document.getElementById('registerPassword').style.border="1px solid red";
	 error=1;
}
else
{
		document.getElementById('passwordError').style.display="none";
		document.getElementById('registerPassword').style.border="";
		flag=0;
}
if(cpassword=="")
{
	 document.getElementById('cpasswordError').style.display="";
	 document.getElementById('registerCPassword').style.border="1px solid red";
	 error=1;
}
else
{
		if(password != cpassword)
		{
				document.getElementById('passwordError').style.display="";
				document.getElementById('registerPassword').style.border="1px solid red";
				document.getElementById('cpasswordError').style.display="";
				document.getElementById('registerCPassword').style.border="1px solid red";
				document.getElementById('passError').style.display="";
				error=1;
		}
		else
		{
				document.getElementById('passwordError').style.display="none";
				document.getElementById('registerPassword').style.border="";
				document.getElementById('cpasswordError').style.display="none";
				document.getElementById('registerCPassword').style.border="";
				document.getElementById('passError').style.display="none";
				flag=0;
		}
}
var male=document.getElementById('registerMale').checked;
var female=document.getElementById('registerFemale').checked;
if(male=="" && female=="")
{
	document.getElementById('gendErrReport').style.display="";
	error=1;
}
else
{
	document.getElementById('gendErrReport').style.display="none";
	flag=0;
}

if(error==0 && flag==0)
{
		return true;
}
else
{
		return false;
}
}
