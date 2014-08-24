// JavaScript Document	

    function validate99(){
	var str = document.frm99.find1.value;
	var str1 = document.frm99.place.value;
	if(str.trim()=="" || str1.trim()=="")
	{
	alert("  Please fill both fields...  ");
	frm99.find1.focus();
	return false;
	}
	return true;
	}

	function validate1(){
	var emailRegEx1 = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
	if(document.details.username.value.trim()=="" || document.details.password.value=="")
	{
	alert("  Please Fill the fields  ");
	details.username.focus();
	return false;
	}
	else if (document.details.username.value.search(emailRegEx1) == -1) 
	{
    alert("  Please Enter a Valid Email Address  ");
    document.details.password.value= "";
	details.username.focus();
    return false;
    }
	return true;
	}
	
	
	function validate2(){
	var emailRegEx = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
    var checked = false; 
	if(document.details1.username1.value=="" || document.details1.password1.value=="" || document.details1.password2.value=="" )
	{
	alert("  Please Complete the fields  ");
	document.details1.password1.value= "";
	document.details1.password2.value= "";
	details1.username1.focus();
	return false;
	}
	else if (document.details1.username1.value.search(emailRegEx) == -1) 
	{
    alert("  Please Enter a Valid Email Address  ");
    document.details1.password1.value= "";
	document.details1.password2.value= "";
	details1.username1.focus();
    return false;
    }
	else if(document.details1.password1.value.length <6 )
	{
	alert("  Passwords Must Be Between 6-14 Characters Long  ");
	document.details1.password1.value= "";
	document.details1.password2.value= "";
	details1.password1.focus();
	return false; 
    }
	else if( document.details1.password1.value != document.details1.password2.value )
	{
	alert(" Please Enter Same Passwords  ");
	document.details1.password1.value= "";
	document.details1.password2.value= "";
	details1.password1.focus();
	return false;
	}
	else if(document.getElementById('personal').checked == false && document.getElementById('business').checked == false)
	{
	alert(" Please Select an Account Type  ");
	document.details1.password1.value= "";
	document.details1.password2.value= "";
	details1.password1.focus();
	return false;
	}
	else if(document.getElementById('male').checked == false && document.getElementById('female').checked == false)
	{
	alert(" Please Select your Gender ");
	document.details1.password1.value= "";
	document.details1.password2.value= "";
	details1.password1.focus();
	return false;
	}
	return true;
	}
	
	
	function validate3(){
	var emailRegEx2 = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
	if(document.details2.username4.value.trim()=="")
	{
	alert("  Please Enter the UserName  ");
	details2.username4.focus();
	return false;
	}
	else if (document.details2.username4.value.search(emailRegEx2) == -1) 
	{
    alert("  Please Enter a Valid Email Address  ");
    details2.username4.focus();
    return false;
    }
	return true;
	}
	
	
	function validate4(){
	if (!document.details3.contact1.value.toString().match(/^[-]?\d*\-?\d*$/)) 
	{
	alert("  Please Enter a Valid Contact No.  ");
    details3.contact1.focus();
	return false;
	}
	else if (!document.details3.contact2.value.toString().match(/^[-]?\d*\-?\d*$/))
	{
	alert("  Please Enter a Valid Mobile No.  ");
    details3.contact2.focus();
	return false;
	}
	return true;
	}
	
	
	function validate5(){
	if (document.details4.category.value == 0) 
	{
	alert("  Please Enter your Business Category  ");
    details4.category.focus();
	return false;
	}
	if (!document.details4.contact1.value.toString().match(/^[-]?\d*\-?\d*$/)) 
	{
	alert("  Please Enter a Valid Contact No.  ");
    details4.contact1.focus();
	return false;
	}
	else if (!document.details4.contact2.value.toString().match(/^[-]?\d*\-?\d*$/))
	{
	alert("  Please Enter a Valid Mobile No.  ");
    details4.contact2.focus();
	return false;
	}
	return true;
	}
	
	
	function validate6()
	{
    
	var emailRegEx1 = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
	
	if (document.contact_frm.name1.value.trim() == "") 
	{
	alert("  Please Enter your Name  ");
    contact_frm.name1.focus();
	return false;
	}
	
	if (document.contact_frm.email.value.search(emailRegEx1) == -1) 
	{
    alert("  Please Enter a Valid Email Address  ");
    contact_frm.email.focus();
    return false;
    }
	
	if (document.contact_frm.subject1.value.trim() == "") 
	{
	alert("  Please Enter Subject  ");
    contact_frm.subject1.focus();
	return false;
	}
	
	else if (document.contact_frm.message1.value.trim() == "")
	{
	alert("  Please Enter Message  ");
    contact_frm.message1.focus();
	return false;
	}
	
	return true;
	}
		
	function validate7()
	{
    	
	if (document.details7.review.value.trim() == "") 
	{
	alert("  Please Enter your Review  ");
    details7.review.focus();
	return false;
	}
			
	return true;
	}
	
	function load_state(str)
	{

	if (str=="")
  	{
  	document.getElementById("state").innerHTML="";
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
    document.getElementById("state").innerHTML=xmlhttp.responseText;
    }
  	}
	xmlhttp.open("GET","state_ajax.php?country_id="+str,true);
	xmlhttp.send();
	}


	function load_city(str)
	{
	if (str=="")
  	{
  	document.getElementById("city").innerHTML="";
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
    document.getElementById("city").innerHTML=xmlhttp.responseText;
    }
  	}
	xmlhttp.open("GET","city_ajax.php?state_id="+str,true);
	xmlhttp.send();
	}
	
	
	function load_area(str)
	{
	if (str=="")
  	{
  	document.getElementById("area").innerHTML="";
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
    document.getElementById("area").innerHTML=xmlhttp.responseText;
    }
  	}
	xmlhttp.open("GET","area_ajax.php?city_id="+str,true);
	xmlhttp.send();
	}	