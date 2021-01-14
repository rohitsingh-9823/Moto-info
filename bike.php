<!DOCTYPE html>
<html>
<head>
  <title> Big-Bike </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="img/wall.jpg" type="img/icon" rel="icon">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<style>
  td
  {
    color:white;
    padding: 10px;
    color:black;
    border: 0.4px solid white;
  }
  #tab td
  {
    color:white;
  }

</style>
<body style="background-image: url(img/black.jpg);">

  <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i></a>
<div id="full">
      <div id="header"style="background-image: url(img/black.jpg);">
        <div id="nav">
        <h1>Big-Bike</h1>
      </div>
        <br>
      <div id="list"> 
        <ul>
        <li><a href="index.php" class="cool">Home  </a></li>
        <li><a href="admin.php"class="cool">Riders</a></li>
        <li><a href="bike.php"class="cool">Bike</a></li>

        <li><a href="r1.php"class="cool">Contact</a></li>
        <li><a href="help.php"class="cool">Help</a></li>
        </ul>

      </div>
      </div>
      <br>
      <div id="imagee" style="width: 400;height: auto;padding-top: 89px;margin-left: 40px;">
       <form method="GET" action="vieww.php">
       <?php  

                    $connect = mysqli_connect("localhost", "root", "", "testing");  
 
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_assoc($result))  
                {  
          ?>

          <table border="1px solid black" style="  position: relative; right: 10%;bottom: 100px;">

<tr>
      <td style="width: 420px;">
        <a href="bike.php"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['name']).   '" alt="Image"style="width:420px; height:460px;cursor:pointer;position:relative;right: 89px;top: 5px">'; ?>  </a> 
      </td>
      <td>
        <table id="tab">
          <tr>
            <td>
          Bike: <?php echo  $row['bike']?>
            </td>
            <td>
              Emission: <?php echo  $row['emission']?>
            </td>
          </tr>
           <tr>
            <td>
              Engine: <?php echo  $row['engine']?> cc
            </td>
            <td>
              Mileage: <?php echo  $row['mileage']?> km/l
            </td>
          </tr>
          <tr>
            <td>
              Horsepower: <?php echo  $row['hp']?> 
            </td>
          <td>
              Torque: <?php echo  $row['torque']?>
            </td>
          </tr>
          <tr>
            <td>
              Gear: <?php echo  $row['gear']?>
            </td>
          <td>
              Tank: <?php echo  $row['tank']?> L
            </td>
          </tr>
          <tr>
            <td>
              Headlight: <?php echo  $row['head']?>
            </td>
          <td>
              Wheel: <?php echo  $row['wheel']?>
            </td>
          </tr>
          <tr>
            <td>
              Tyre: <?php echo  $row['tyre']?>
            </td>
          <td>
              Price: Rs <?php echo  $row['price']?>
            </td>
          </tr>

        </table>
      </td>
  </tr>

</table>


<!--    "<tr>
      <td style="color: black;text-align: center;"><?php echo  $row['bike'] ,$row['emission']?></td><td>" 
      <a href="vieww.php?id=<?php echo $row['id'];?>"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['name']).   '" alt="Image"style="width:200px; height:200px;cursor:pointer;position:relative;right:15px;top:10px">'; ?>  </a> "</td><td></td>"
      
</table>
 -->                <?php  
                     
                }  ?>

  </form>                 
  </div>  

  </div>
  </body>
  </html>

