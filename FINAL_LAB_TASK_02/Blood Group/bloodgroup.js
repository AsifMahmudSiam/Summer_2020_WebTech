function bloodvalidation()
{
	var a=document.blood.blood;
	if (a.value == "Select Blood Group") 
	{
		document.getElementById('bloodmsg').innerHTML="Choose A Blood Group";
		return false;
	}
	else
	{
		return true;
	}
}