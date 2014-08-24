// JavaScript Document	
	
	function validate(){
	var str = document.frm.find1.value;
	var str1 = document.frm.place.value;
	if(str.trim()=="" || str1.trim()=="")
	{
	alert("  Please fill both fields...  ");
	frm.find1.focus();
	return false;
	}
	return true;
	}
	
	
	function load_menu(str)
    {
    if (str=="")
    {
    document.getElementById("menuajax").innerHTML="";
    return;
    }
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
	xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("menuajax").innerHTML=xmlhttp.responseText;
    }
    }
	xmlhttp.open("GET","menu_ajax.php?category_id="+str,true);
	xmlhttp.send();
	}