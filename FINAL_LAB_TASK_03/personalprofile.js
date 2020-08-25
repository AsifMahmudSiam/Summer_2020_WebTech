
function profilevalidation()
{
	var namevalid=false;
	var userName=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var a=document.gender.gender;

	if(userName=="")
	{
		document.getElementById('usernamemsg').innerHTML="Field cannot be empty";
		namevalid=false;
	}
	else
	{
		if((userName[0]>='A' && userName[0]<='Z') ||(userName[0]>='a' && userName[0]<='z'))
		{
			if(userName.split(" ").length>=2)
			{
				var counter=0;
				while(counter<userName.length)
				{
					if(!((userName[counter]>='A' && userName[counter]<='Z') ||(userName[counter]>='a' && userName[counter]<='z') || userName[counter]=='.' || userName[counter]=='-' || userName[counter]==' '))
					{
						document.getElementById('namemsg').innerHTML="Name can only contain A-Z, a-z, . and -";
						namevalid=false;
					}
					counter=counter+1;
				}
				namevalid=true;
			}
			else
			{
				document.getElementById('namemsg').innerHTML="Name must contain 2 words";
				namevalid=false;
			}
		}
		else
		{
			document.getElementById('namemsg').innerHTML="Name must start with a letter";
			namevalid=false;
		}
	}




	var emailvalid=false;
	if (email=="") 
	{
		document.getElementById('emailmsg').innerHTML="Email can not be empty";
		return false;
	}	
}


var gendervalid=false;
	for(var i=0;i<gender.length;i++)
	{
		document.getElementById('gendermsg').innerHTML="Field cannot be empty";		
		if(gender[i].checked)
		{
			document.getElementById('gendermsg').innerHTML="";
			gendervalid=true;
			break;
		}
	}

	var dobvalid=false;

	var day=document.getElementById('day').value;
	var month=document.getElementById('month').value;
	var year=document.getElementById('year').value;
	if (day!="" && month!="" && year!="") 
	{
		if(day>0 && day<32 && month>0 && month<13 && year>1899 && year<2017)
		{
			return true;
		}
		else
		{
			document.getElementById('dateofbirthmsg').innerHTML="day range 0 to 31 and month range 1 to 12 and year range 1900 to 2016";
			return false;
		}
	}
	else
	{
		document.getElementById('dateofbirthmsg').innerHTML="Date can not be empty";
		return false;
	}


   var degreeValid=false;

	if(document.getElementById('ssc').checked || document.getElementById('hsc').checked || document.getElementById('bsc').checked)
	{
		return true;
	}
	else
	{
		document.getElementById('msg').innerHTML="Please choose a degree";
		return false;
	}


var pictureValid=false;
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



function emailremover()
{
	document.getElementById('emailmsg').innerHTML="";
}


function dobremover()
{
	document.getElementById('dateofbirthmsg').innerHTML="";
}