<!DOCTYPE html>
<html lang="en">
<head>
    
    <script>
function returnprice() {
  var uname=  document.getElementById("uname").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/FinalProject/control/coursepricedb.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);


}

</script>
</head>
<body style="background-image: linear-gradient(to left, rgba(255,0,0,0), rgb(87, 137, 194))">
    
    <div style="padding-top: 200px">
<fieldset>
	  
<legend><h1>Search Price</h1></legend>
<input type="text" id="uname" placeholder="Enter course name">
<button onclick="returnprice()">Search</button>

<p id="mytext" align="center"></p>
</div>
  
</body>
</html>