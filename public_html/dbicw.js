//function to check if void
//returns true if NOT void, alerts and returns false if void...
function validate(form)
{
var ok=1
var msg=""
	for (var i=0; i<form.length; i++)
	{
		if (form.elements[i].value.trim() == "")
		{
			msg += "'" + form.elements[i].name + "' is void."
			ok=0
		}
	}
	if(ok == 0)
	{
		alert(msg)
		return false
	}
	else
	{
		return true
	}
}

//function to validate text i.e. names, titles, genres
//returns true if valid, alerts and returns false if any digit/special char present...
function validateText(input)
{

}

//function to show or hide the navigation bar
function hideBar()
{
	if(document.getElementById("navbar").style.display == "block")
	{
		document.getElementById("navbar").style.display = "none";
	}
	else
	{
		document.getElementById("navbar").style.display = "block";
	}
}
