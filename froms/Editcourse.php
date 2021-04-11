<?php
 $name="";
    $id="";
    $p="";
	$dept="";
	$price= "";
    $err_dept="";
    $err_name="";
    $err_id="";
    $err_p="";
    $err_d="";

$errprice = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST["Edit"])) {
       

       if(empty($_POST["name"])){
            $err_name="*Name required";
        }
        else{
            $name=$_POST["name"];
        }

        if(empty($_POST["id"])){
            $err_id="*ID required";
        }
        else{
            $id=$_POST["id"];
        }

        if (empty($_POST["price"])) {

            $errprice = "*** Enter Price";

        } else if (!empty($_POST["price"])) {
            if (is_numeric($_POST["price"]) == false) {
                $errprice = "*** Enter a valid price";
            }
			 else{
            $price=$_POST["price"];
        }
        }
		

    }


}

?>


<html>
    <head>
    </head>
    <body>
        <h1>UPDATE COURSE INFO</h1>
                <form action="" method="post">
                    <table>
                       <tr>
			        <td><span>Course Name </span></td>
						
                    <td>:<input type="text" placeholder="name" value="<?php echo $name ?>" name="name"> 
                   <?php echo   $err_name ?></span></td>
                </tr>
			
				<tr>

                       <td><span>Course ID</span></td>

					<td>:<input type="text" placeholder="ID" name="id" value="<?php echo $id?>"<span><?php echo $err_id
					?></span></td>
				</tr>

                        <tr>
						    <td>
                                <span>Price($)</span>
                            </td>
                            
                               <td>:<input type="text" placeholder="$" name="price">
                                <?php echo $price?><span><?php echo $errprice; ?></span>
                            </td>
				        </tr>

                        <tr>
						    <td>
                                <input type="submit" name="Edit" value="Edit">
                            </td>
                            
				        </tr>

                    </table>
                </form>
         
    </body>
</html>