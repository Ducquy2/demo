var requestTimeout='';
function creatHTTPreq()
{
	var xmlhttp = false;
	try 
	{	
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");	
	} 
	catch (e) 
	{	
		try 
		{	
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
		} 
		catch (E) 
		{	
			xmlhttp = false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest != 'undefined') 
	{	
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function addToShopcard(ajUrl,id,name,price,num,size,type)
{	
	var num = document.getElementById(num).value;
/*	if(size==0)
	{
		size=0;
	}
	else{
		var size = document.getElementById(size).value;
	}*/
	
	if(type==0)
	{
		type= "";
	}
	else{
		var type = document.getElementById(type).value;
	}
	
	var xmlhttp = creatHTTPreq();	

	if (xmlhttp) 
	{
		var poststr = poststr + "&id=" +encodeURI(id);
		poststr = poststr + "&name=" +encodeURI(name);
		poststr = poststr + "&price=" +encodeURI(price);
		poststr = poststr + "&num=" +encodeURI(num);
		poststr = poststr + "&size=" +encodeURI(size);
		poststr = poststr + "&type=" +encodeURI(type);
		url = ajUrl+"include/ajax_shoppingcard.php";
		xmlhttp.open('POST', url, true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange = function() 
		{
			parseResponse(xmlhttp);
		};
		xmlhttp.setRequestHeader("Content-length", poststr.length);
		xmlhttp.send(poststr);
		//error_mess = document.getElementById('ajax_error').innerHTML; 
		requestTimeout= setTimeout(function (){	
											 //commentError(error_mess,'0');
											 },10000);
	}
}

function parseResponse(request,prefix) 
{
	if (request.readyState == 4) 
	{
		if (request.status == 200 || request.status == 304) 
		{
			clearTimeout(requestTimeout);
			var arrRes = new Array();
			arrRes = request.responseText.split('[<!!!>]');
			arrRes[0] = parseInt(arrRes[0],10);
			if(arrRes[0]==1)
			{
				document.getElementById('soluongsanpham').innerHTML = formatCurrency(arrRes[1]);
				document.getElementById('tonggia').innerHTML = formatCurrency(arrRes[2]);
			}
		}
	}
}