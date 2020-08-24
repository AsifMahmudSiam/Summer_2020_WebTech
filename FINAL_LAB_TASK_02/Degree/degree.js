function val() {
	if(document.getElementById('ssc').checked || document.getElementById('hsc').checked || document.getElementById('bsc').checked)
	{
		return true;
	}
	else
	{
		document.getElementById('msg').innerHTML="Please choose a degree";
		return false;
	}
}