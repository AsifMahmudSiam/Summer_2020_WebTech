function val()
{
	var id=document.getElementById('id').value;
	var file=document.getElementById('file').value;
	if(id!="" && file!="")
	{
		if(parseInt(id,10)>0)
		{
			return true;

		}
		else
		{
			document.getElementById('msg').innerHTML="Enter a Positive ID Number";
			return false;
		}
	}
	else
	{
		document.getElementById('msg').innerHTML="Field should be upload";
		return false;
	}
}