function validate()
{
var good=false;
var size="n";

var username=document.getElementById("user").value;
var password=document.getElementById("pass").value;

var jersey=document.getElementById("jersey").value;
var hat=document.getElementById("hat").value;
var shirt=document.getElementById("shirt").value;

var shipping=document.getElementsByName("ups");

	//Checking the size of the array given via a radio button(s)
	for(var i=0; i<shipping.length;i++)
	{
		if(shipping[i].checked)
		{
			size=shipping[i].value;
		}
	}
	if(username.indexOf('@') < 0)
	{
		alert("Please enter in a email");
		good=true;
	}
	if(password.length == 0)
	{
		alert("Enter in a password");
		good=true;
	}
	if(jersey.length == 0)
	{
		alert("Enter an amout of jerseys");
		good=true;
	}
	if(hat.length == 0)
	{
		alert("Enter an amount of hats");
		good=true;
	}
	if(shirt.length == 0)
	{
		alert("Enter an amount of T-shirts");
		good=true;
	}
	if(size == "n")
	{
		alert("Select a shipping option");
		check=true;
	}
	if(good == true)
	{
		good==false;
		document.getElementById("CART").action="customerFrontend.html";
	}
	
}
