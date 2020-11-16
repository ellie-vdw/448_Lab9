function validate(){
	let u = document.forms["myForm"]["username"].value;
	let p = document.forms["myForm"]["password"].value;
	if (p == "" || u =="")
	{
		alert("password or username cannot be blank");
		return false;
	}
	else
	{
		if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(u))
		{
			if (document.getElementById("shipping1").checked == true || document.getElementById("shipping2").checked == true|| document.getElementById("shipping1").checked == true)
			{
				if(document.getElementById("item1").checked == true || document.getElementById("item2").checked == true || document.getElementById("item3").checked == true)
				{
					return true;
				}
				else
				{
					alert ("must choose something to buy");
					return false;
				}
			}
			else
			{
				alert("must choose shipping option");
				return false;
			}
		}
		else
		{
			alert ("invalid email address");
			return false;
		}
	}
	
}