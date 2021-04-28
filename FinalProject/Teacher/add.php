<?php
    include 'header.php'; 
	include 'addstudent.php'; 
?>
<html>
<div id="add">
    <h2 style="text-align:center">Add New Record</h2>
    <form style="text-align:center;" action="" method="post" onsubmit="return validate()">
        <div style="padding:5px;">
            <label>ID</label>
            <input type="text" id="id" name="id">
        </div><span id="js_id"></span>
        <div style="padding:5px;">
            <label>Name</label>
            <input type="text" id="name" name="name">
        </div><span id="js_name"></span>
        <div style="padding:5px;">
            <label>Address</label>
            <input type="text" id="address" name="address">
        </div><span id="js_address"></span>
        <div style="padding:5px;">
            <label>Class</label>
            <input type="text" id="class" name="class"> <<<1=BCA, 2=BSC, 3=BCOM, 4=BTECH>>>
        </div><span id="js_class"></span>
        <div style="padding:5px;">
            <label>CGPA</label>
            <input type="text" name="cgpa">
        </div>
        <div style="padding:5px;">
            <label>On Going Courses</label>
            <input type="text" name="ongoingcourse">
        </div>
        <div style="padding:5px;">
            <label>Finished Courses</label>
            <input type="text" name="finishedcourse">
        </div>
        <div style="padding:5px;">
            <label>Notice For Student</label>
            <input type="text" name="notice">
        </div>
        <div style="padding:5px;">
            <label>Offer Assignment</label>
            <input type="text" name="assignment">
        </div>
        <div style="padding:5px;">
            <label>Offer Exam</label>
            <input type="text" name="exam">
        </div>
        <div style="padding:5px;">
            <label>Exam Mark</label>
            <input type="text" name="mark">
        </div>
        <input class="submit" name = "submit" type="submit" value="Save"  />
    </form>
    <script>
		function get(id){
			return document.getElementById(id);
		}
		function viewNormalReg(){
			get("add").style.display="block";
		}
		function viewGoogleReg(){
			get("add").style.display="block";
		}
		function validate(){
			cleanUp();
			var hasError=false;
            if(get("id").value == ""){
				get("js_id").innerHTML="ID Required";
				get("js_id").style.color="red";
				hasError=true;
			}
            if(get("name").value == ""){
				get("js_name").innerHTML="Name Required";
				get("js_name").style.color="red";
				hasError=true;
			}
			if(get("address").value == ""){
				get("js_address").innerHTML="Adderss Required";
				get("js_address").style.color="red";
				hasError=true;
			}
			if(get("class").value == ""){
				get("js_class").innerHTML="Class Required";
                get("js_class").style.color="red";
				hasError=true;
			}
			if(!hasError){
				return true;
			}
			return false;
		}
		function cleanUp(){
			get("js_id").innerHTML = "";
			get("js_name").innerHTML="";
            get("js_address").innerHTML="";
            get("js_class").innerHTML="";
		}
	</script>
</html>