function odaklan(x)
{
if(x=="ad" || x=="soyad" || x=="mail")	
{
	document.getElementById(x).value="";
	
	document.getElementById(x).style.color="#000";
	document.getElementById(x).style.borderColor="#000";
}	
}
function islemGonder()
{   document.getElementById("aduyari").innerHTML="";
    document.getElementById("soyaduyari").innerHTML="";
  
	document.getElementById("mailuyari").innerHTML="";


    var kural, yazi;
	yazi=document.getElementById("mail").value;
	kural=/.+@.+\.+./;
	
	if(document.getElementById("ad").value=="Adınızı yazınız" || document.getElementById("ad").value=="")
	{
		document.getElementById("aduyari").innerHTML="Adınızı yazmadınız!";
		return false;
	}
	else if(document.getElementById("soyad").value=="Soyadınızı yazınız" || document.getElementById("soyad").value=="")
	{
		document.getElementById("soyaduyari").innerHTML="Soyadınızı yazmadınız!";
		return false;
	}

	else if(document.getElementById("mail").value=="E-Mail giriniz")
	{
		document.getElementById("mailuyari").innerHTML="Mailinizi yazmadınız!";
		return false;
	}
	else if(!kural.test(yazi))
	{
		document.getElementById("mailuyari").innerHTML="Geçersiz Mail!!";
		return false;
	}
	
}
function islemTemizle()
{ 
    document.getElementById("soyad").value="Soyadınızı yazınız";
	document.getElementById("mail").value="E-Mail giriniz";
	document.getElementById("ad").value="Adınızı yazınız";

	document.getElementById("metin").value="";

	document.getElementById("hobi2").checked="";
	document.getElementById("hobi3").checked="";
	document.getElementById("hobi4").checked="";

	document.getElementById("cins1").checked="";
	document.getElementById("cins2").checked="";

	document.getElementById("dyeri").value="Sehir";

	document.getElementById("gun").value="gun";
	document.getElementById("ay").value="ay";
	document.getElementById("yil").value="yil";
	
}