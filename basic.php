<?php
  
 $conn=mysqli_connect('localhost','root','','bike');
  
		 		$bike=$_POST['bike'];
				$emission=$_POST['emission'];
				$engine=$_POST['engine'];
				$mileage=$_POST['mileage'];
				$showroom=$_POST['address'];
				$hp=$_POST['hp'];
				$torque=$_POST['torque'];
				$gear=$_POST['gear'];
				$tank=$_POST['tank'];
				$ABS=$_POST['ABS'];
				$head=$_POST['head'];
				$wheel=$_POST['wheel'];
				$tyre=$_POST['tyre'];
				$price=$_POST['price'];
				$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
				
      

      $sql = "INSERT INTO `doit` (`ID`, `bike`, `emission`, `engine`, `mileage`, `showroom`, `horsepower`, `torque`, `gear`, `tank`, `abs`, `head`, `wheel`, `tyre`, `price`) VALUES (NULL,'$bike,$emission,$engine,$mileage,$address,$hp,$torque,$gear,$tank,$ABS,$head,$wheel,$tyre,$price,$$file');";  
	  mysqli_query($conn,$sql);
	mysqli_close($conn);

 header("Location: ad1.php");
 ?>  */




