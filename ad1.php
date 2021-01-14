<?php

$conn=mysqli_connect('localhost','root','','testing');
	$query = " select * from tbl_images";
$result = mysqli_query($conn,$query);
?>

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Big-Bike</title>  
    
	<link href="img/wall.jpg" type="img/icon" rel="icon">
	
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <style>
      	input
      	{
      		border:0/1px solid black;
      		
      		color:black
      	}
      	table, th, td {
  border: 1px solid black;
  padding: 5px;
}
      	td
      	{
      		color: white;
      		
      	}
      	
::placeholder {
  color: black;
}
table
{
	border-spacing: 15px;
}
      </style>

<script>
 	
function message(){

alert("Data Inserted into Database");  

}

</script>
    
      <body style="background-image: url(img/ad.jpg);background-size:100%;">  

           <br /><br />  
           <div class="container" style="width:500px;">  

               
                <br />  
                <form action="pic.php" method="post" enctype="multipart/form-data" style="border:1px solid white">  
                <h3 align="center" style="color: white">Insert in Database  PHP</h3>  <hr>
                	<table  style="width: 100%;">
                     
	 	<tr>
	 			
	 			<td><input type="E-mail" style="color:black" name="bike" placeholder="Enter Bike Name " title="E-mail"></td>
	 			
	 			<td><input type="E-mail" name="emission" placeholder="Enter emission" title="E-mail"></td>
	 			
	 	</tr>
	 	<tr>
	 			
	 			<td><input  type="E-mail" name="engine" placeholder="Engine displacement" title="E-mail"></td>
	 			
	 	
	 		<td><input type="E-mail" name="mileage"  placeholder="Enter mileage" title="E-mail"></td>

	 	</tr>
	 
	 	<tr>
	 		
	 		<td><input type="E-mail" name="hp"  placeholder="Enter horsepower" title="E-mail"></td>

	 	
			<td><input type="E-mail" name="torque"  placeholder="Enter torque" title="E-mail"></td>

	 	</tr>
	 	<tr>
	 		
	 		<td><input  type="Number" name="gear" placeholder="Enter gear" title="Number" ></td>
	 	
	 		  <td><input type="E-mail" name="tank"  placeholder="Enter tank" title="E-mail"></td>

	 	</tr>
	 	<!-- <tr>
	 		<td>ABS</td>
	 		<td><input  style="width: 30px;" type="radio" name="ABS" value="Yes" > Yes 
	 		 <input style="width: 30px;" type="radio" name="ABS" value="No">No</td>

	 	</tr> -->
	 	<tr>
	 		
	 		<td><input type="text" name="head"  placeholder="Enter headlight" title="text"></td>

	 	
	 		<td><input type="Number" name="wheel"  placeholder="Enter wheel" title="Number"></td>
	 	</tr>
	 	<tr>
	 	

	 		<td><input type="text" name="tyre"  placeholder="Enter tyre" title="text"></td>
	 	
	 		<td><input type="Number" name="price"  placeholder="Enter price" title="Number"></td>

	 	</tr>
	 
                </table>
                <br>
	                <div style="color: white;margin-left:10px;">Image: <input type="file" alt="Image Not Found" style="color:white;" name="image" id="image" />  </div>
                     <br />  
                     <input type="submit" onclick="message()" name="insert" style="color:black;margin-left:10px;width: 95%" id="insert" value="Insert" class="btn btn-info" />  <br><br>
                </form>  
            <br><br>    <br>
                	<a href="box.html"> <button style="margin-left: 45%;cursor: pointer;color:black"> Go Back<< </button></a>
                <br />  
                <br />  
                <table class="table table-bordered" style="width: 300px; margin-left:19%;">  
                     <tr>  
                          <th style="color: white">Image</th>  
                     </tr>  
                    <?php  
                    $connect = mysqli_connect("localhost", "root", "", "testing");  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="300" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                	?>  
                </table>  
       </div>  
      </body>  
 </html>  



 <!-- 
<?php  
$connect=mysqli_connect('localhost','root','','testing');

if(isset($_POST["insert"]))  {
 	$bike=$_POST['bike'];
 	$emission=$_POST['emission'];
 	$engine=$_POST['engine'];
 	$mileage=$_POST['mileage'];
 	$hp=$_POST['hp'];
 	$torque=$_POST['torque'];
 	$gear=$_POST['gear'];
 	$tank=$_POST['tank'];
 	// $ABS=$_POST['ABS'];
 	$head=$_POST['head'];
 	$wheel=$_POST['wheel'];
 	$tyre=$_POST['tyre'];
 	$price=$_POST['price'];
 
 
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name,bike,emission,engine,mileage,hp,torque,gear,tank,head,wheel,tyre,price) VALUES ('$file','$bike','$emission','$engine','$mileage','$hp','$torque','$gear','$tank','$head','$wheel','$tyre','$price')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 
// header("Location: ad1.php");
 ?>  

 -->