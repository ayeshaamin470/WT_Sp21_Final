<html>
   <head>
      <title>EDUCare</title>
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
   </head>
   <body bgcolor = "#FFFFFF">
      <div id="login" align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;text-align:center;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form style = "text-align:center;" action = "" method = "post" onsubmit="return validate()">
                  <label>UserName  :</label><input type = "text" id = "name" name = "username" class = "box"/><span id="js_name"></span><br/><br />
                  <label>Password  :</label><input type = "password" id = "password" name = "password" class = "box" /><span id="js_pass"></span><br/><br />
                  <input type = "submit" value = " Submit "/><br/>
               </form>
            </div>
         </div>
      </div>
   </body>
   <script>
		function get(id){
			return document.getElementById(id);
		}
		function viewNormalReg(){
			get("login").style.display="block";
		}
		function viewGoogleReg(){
			get("login").style.display="block";
		}
		function validate(){
			cleanUp();
			var hasError=false;
			if(get("name").value == ""){
				get("js_name").innerHTML="Name Required";
				get("js_name").style.color="red";
				hasError=true;
			}
			if(get("password").value == ""){
				get("js_pass").innerHTML="Password Required";
            get("js_pass").style.color="red";
				hasError=true;
			}
			if(!hasError){
				return true;
			}
			return false;
		}
		function cleanUp(){
			get("js_name").innerHTML = "";
			get("js_pass").innerHTML="";
		}
	</script>
</html>

<?php      
    include('config.php');
    if($_SERVER["REQUEST_METHOD"] == "POST")  {
    $username = $_POST['username'];  
    $password = $_POST['password'];
        $sql = "select * from teacherinfo where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){  
            header("location: teachersection.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
      }     
?>