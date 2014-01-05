function more(str)
{
document.getElementById("send").innerHTML="Loading...";
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
    document.getElementById("send").style="display:none;visibility:hidden";
    document.getElementById("send").style.display="none";
    document.getElementById("res").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","load.php?domain="+str,true);
xmlhttp.send();
}
function check()
{
  var domain = document.getElementById('domain').value;
    if( /[^a-zA-Z0-9\-]/.test( domain ) ) {
        alert('No special character except dash');
        document.getElementById('domain').focus();
        document.getElementById('domain').style.borderBottom="5px solid #FF0000";
        return false;
    }
    document.domain.submit();
}

