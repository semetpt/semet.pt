// JavaScript Document
function mailto(arr_user, arr_domain)
{
	mailto(arr_user, arr_domain, "");
}

function mailto(arr_user, arr_domain, text)
{
	var left = new String(), right = new String(), email;
	var k;
	
	for(k = 0; k < arr_user.length; ++k)
	{
		if(left.length)
		{
			left += ".";
		}
		left += arr_user[k];
	}
	for(k = 0; k < arr_domain.length; ++k){
		if(right.length)
		{
			right += ".";
		}
		right += arr_domain[k];
	}
	email = left + "@" + right;
	if(!(text && text.length))
	{
		text = email;
	}
	
	document.write("<a href=\"mailto:" + email + "\" target=\"_new\" class=\"email\">" + text + "</a>");
}

function antispider_chunks(chunks)
{
	var k;
	
	for(k = 0; k < chunks.length; ++k)
	{
		document.write(chunks[k]);
	}
}