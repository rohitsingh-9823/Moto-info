<!DOCTYPE html>
<html>
<head>
	<title> Big-Bike </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="img/wall.jpg" type="img/icon" rel="icon">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
	body {margin:0;}





.vertical-menu  {
  overflow: hidden;
  /*background-color: red;*/
  width: 53px;
  position: fixed;
  
}


.vertical-menu a {
	float: right;
  
  color: #f2f2f2;
  text-align: center;
  padding: 18px 10px;
  text-decoration: none;
  display: block;
  padding: 12px;
  
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #4CAF50;
  color: white;
}






.main {
	padding: 16px;

  margin-top: 40px;
  }
 .scrollable-place { 
            height: 1000px; 
        } 
          
        .stop-scrolling { 
            height: 100%; 
            overflow: hidden; 
        } 
</style>
<body style="margin: 0px; , padding: 0px;">
 <script >
 function disableScroll() { 
    document.body.classList.add("stop-scrolling");  //(classlist)This property is useful to add, remove and toggle CSS classes on an element.
    //The classList property returns the class name(s) of an element
} 
  
function enableScroll() { 
    document.body.classList.remove("stop-scrolling"); 
} 
 </script>
<a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i></a>

<div id="header" style="background-color: lavender; width: 100%;">
			<div id="nav">
				<h1 style="color: black">Big-Bike</h1>
			</div>
				<br>
				<div id="lis"> 
		
			<ul>
				<li><a style="color: black" href="index.php" class="cool">Home  </a></li>
				<li><a style="color: black"href="admin.php"class="cool">Riders</a></li>
				<li><a style="color: black"href="bike.php"class="cool">Bike</a></li>

				<li><a style="color: black" href="r1.php"class="cool">Contact</a></li>
				<li><a style="color: black"href="help.php"class="cool">Help</a></li>
				  <p class="scrollable-place"> 
        <text style="cursor: pointer; margin-left: 25%;color: black" onclick="disableScroll()">Disable Scrolling </text>
        <text> &nbsp</text> 
        <text style="cursor: pointer;color: black" onclick="enableScroll()">Enable Scrolling</text> 
    </p> 
  
   <!--  <script> 
        function disableScroll() { 
            document.body.classList.add("stop-scrolling"); 
        } 
  
        function enableScroll() { 
            document.body.classList.remove("stop-scrolling"); 
        } 
    </script>  -->
				</ul>

				
			</div>
			</div>
			<section id="sec0"> 
				<div id="ourbikeev" style="padding-top: 4.2%; background-image:url(img/rider.jpg) ;background-repeat:no-repeat;background-position: absolute;  "><br><br><br>
<div class="vertical-menu">
	 <a href="#">
      <img style="position: right;margin-left: 60%;" src="img/menu.png" width=40px; margin-left:3px; href="#">
  </a>

  	<a  href="#sec0">
  	      <img style="position: right;margin-left: 60%;" src="img/home.png" width=40px; margin-right:7%; href="#sec0">
  </a>
	
	  <a href="#sec1">
	  <img style="cursor: pointer; style=position: right;margin-left: 65%;" src="img/yamaha.png" width=34px; margin-left:3px;>
	</a>
	 <a href="#sec2">
	    <img style="position: right;margin-left: 65%;"src="img/honda.png" width=38px; height="40px;" margin-left:3px; href="#sec2">
	</a>
	<a href="#sec3">
	      <img style="position: right;margin-left: 40%;"src="img/ducs.png" width=90px; margin-left:3px; href="#sec3">
	  </a>
  
 
  
 
</div>
</div>
</section>

<section id="sec1" style="background-color: white;">
	<div id="ourbikee">

<div id="onee"><img style="margin-left:19px; " src="img/yama.jpg" width="100%">
	 			<br>
	 		<center><b style="margin-left: 29px"> Yamaha</b></center> <br><br>
	<p style="color: black;"> <text style="text-decoration: underline;" >INDUSTRY</text>:	Automotive<br>
<text style="text-decoration: underline;" >FOUNDED</text>: May 1, 1955<br>
<text style="text-decoration: underline;" >FOUNDER</text>:	Genichi Kawakami<br>
<text style="text-decoration: underline;" >HEADQUATER</text>:	Iwata, Shizuoka, Japan<br>
<text style="text-decoration: underline;" >AREA SERVED</text>: Worldwide<br>
<text style="text-decoration: underline;" >KEY PEOPLE</text>:
Yoshihiro Hidaka (President  & Representative Director)<br>
<text style="text-decoration: underline;" >PRODUCTS</text>:	Motorcycles, commuter vehicles & scooters, recreational vehicles, boats, marine engines, snowmobiles, small tractors, personal watercraft, electrically power assisted bicycles, automobile engines, unmanned aerial vehicles, golf cars<br>
<text style="text-decoration: underline;" >OWNER</text>:	Yamaha Corporation (9.92%)<br>
<text style="text-decoration: underline;" >WEBSITE</text>:	Yamaha Motor Global</p>

	 		</div>




	 		<div  id="one"><img src="img/ful.jpg" width="100%">
	 		<center><b> Valentino Rossi</b></center> <br>
			</div>

<script src="https://www.w3schools.com/lib/w3.js"></script>

<br><br><br> <center><b> Riders in motogp</b></center> <br> <br>
<div id="usa" class="city">
<text style="margin-left: 90px;cursor: pointer;"onclick="w3.hide('#London,#australi,#australiaa');document.getElementById('vals').style.display='block';" ><b>1. Valentino Rossi</b></text>
<div id="vals">
<text style="margin-left: 80%;cursor: pointer;"onclick="w3.show('#London,#australi,#australiaa');document.getElementById('vals').style.display='none';" ><b>Hide</b></text><br><br>
<img src="img/hero.jpg"  style="width:110%;height:10%;margin-left: 55px;padding-bottom: 50px;">
</div>

</div>


<br>


<div id="London" class="city">
<text style="margin-left: 90px;cursor: pointer;"onclick="w3.hide('#usa,#australi,#australiaa');document.getElementById('val').style.display='block';"><b>2. Jorge Lorenzo </b></text>
<div id="val">
	<text style="margin-left: 80%;cursor: pointer;" onclick="w3.show('#usa,#australi,#australiaa');document.getElementById('val').style.display='none';"><b>Hide</b></text><br><br>
<img src="img/loren.jpg"  style="width:110%;height:10%;margin-left: 55px;padding-bottom: 50px;">

</div>
</div> 
	 	 <br>

<div id="australi" class="city">
<text style="margin-left: 90px;cursor: pointer;"onclick="w3.hide('#usa,#London,#australiaa');document.getElementById('vale').style.display='block';"><b>3. Maverick Viñales</b></text>
<div id="vale">
	<text style="margin-left: 80%;cursor: pointer;" onclick="w3.show('#usa,#London,#australiaa');document.getElementById('vale').style.display='none';"><b>Hide</b></text><br><br>
<img src="img/vina.jpg"  style="width:110%;height:10%;margin-left: 55px;padding-bottom: 50px;">

</div>
</div> 

<br>

<div id="australiaa" class="city">
<text style="margin-left: 90px;cursor: pointer;"onclick="w3.hide('#usa,#London,#australi');document.getElementById('valee').style.display='block';"><b>4. Fabio Quartararo</b></text>
<div id="valee">
	<text style="margin-left: 80%;cursor: pointer;" onclick="w3.show('#usa,#London,#australi');document.getElementById('valee').style.display='none';"><b>Hide</b></text><br><br>
<img src="img/fabu.png"  style="width:110%;height:10%;margin-left: 55px;padding-bottom: 50px;">

</div>
</div> 





</div>

</section>


<br>
<section style="background-color: white;"id="sec2">
	
	<div id="copyright" style="width: 100%;height: 600px;">


	 <br><br>
	 <div id="ourbikee">
	 		

	 		<div id="twoo"><img src="img/hon.jpg" width="100%">	<center><b style="margin-left: 100px;"> honda</b></center> <br>
	 			<p style="color: black;"><text style="text-decoration: underline;" >INDUSTRY</text>:	Conglomerate<br>
<text style="text-decoration: underline;" >FOUNDED</text>: 24 September 1948<br>
<text style="text-decoration: underline;" >FOUNDER</text>: Soichiro Honda, Takeo Fujisawa<br>
<text style="text-decoration: underline;" >HEADQUATER</text>:	Minato, Tokyo, Japan<br>
<text style="text-decoration: underline;" >AREA SERVED</text>: Worldwide<br>
<text style="text-decoration: underline;" >KEY PEOPLE</text>:
Toshiaki Mikoshiba​ (chairman) Takahiro Hachigo (president​ and CEO)<br>
<text style="text-decoration: underline;" >PRODUCTS</text>:	Motorcycles, commuter vehicles & scooters, recreational vehicles, boats, marine engines, snowmobiles, small tractors, personal watercraft, unmanned aerial vehicles.<br>
<text style="text-decoration: underline;" >OWNER</text>:	Honda Corporation (9.92%)<br>
<text style="text-decoration: underline;" >WEBSITE</text>:	Global.honda </p>

	 		
			</div>

	 		<div id="two">
	 			<img style="padding-bottom: 30px;height: auto;"src="img/mar.jpg" width="100%">
	 			 <center><b>Marq Marquez </b></center>
			</div>




			<script src="https://www.w3schools.com/lib/w3.js"></script>

<br><br><br> <center><b> Riders in motogp</b></center> <br> <br>
<div id="usaa">
<text style="margin-left: 90px;cursor: pointer;"onclick="w3.hide('#Londonn,#australii');document.getElementById('valss').style.display='block';" ><b>1. Marq marquez</b></text>
<div id="valss">
<text style="margin-left: 80%;cursor: pointer;"onclick="w3.show('#Londonn,#australii');document.getElementById('valss').style.display='none';" ><b>Hide</b></text><br><br>
<img src="img/mard.jpg"  style="width:110%;height:10%;margin-left: 55px;padding-bottom: 50px;">
</div>

</div>


<br>


<div id="Londonn" class="city">
<text style="margin-left: 90px;cursor: pointer;"onclick="w3.hide('#usaa,#australii');document.getElementById('vall').style.display='block';"><b>2. Alex Marquez</b></text>
<div id="vall">
	<text style="margin-left: 80%;cursor: pointer;" onclick="w3.show('#usaa,#australii');document.getElementById('vall').style.display='none';"><b>Hide</b></text><br>
<img src="img/alex.jpg"  style="width:110%;height:10%;margin-left: 55px;padding-bottom: 50px;">

</div>
</div> 
	 	 <br>

<div id="australii" class="city">
<text style="margin-left: 90px;cursor: pointer;"onclick="w3.hide('#usaa,#Londonn');document.getElementById('valea').style.display='block';"><b>3. Dani Pedrosa</b></text>
<div id="valea">
	<text style="margin-left: 80%;cursor: pointer;" onclick="w3.show('#usaa,#Londonn');document.getElementById('valea').style.display='none';"><b>Hide</b></text><br><br><br>
<img src="img/dani.jpg"  style="width:130%;height:10%;margin-left: 0px;padding-bottom: 50px;">

</div>
</div> 

<br>




		</div>
	</div>

</section>

<section style="background-color: white;"id="sec3">
	<div id="copyright" style="width: 100%;height: 600px;">


	 
	 <div id="ourbikee">
	 		

	 		<div id="threee"><img style="margin-right: 3px;" src="img/abc.png" width="90%">	<br><center><b style="margin-left: 100px;text-align: center;"> ducati</b></center> <br>
	 			<p style="color: black;"><text style="text-decoration: underline;" > INDUSTRY</text>: Manufacturing<br>
<text style="text-decoration: underline;" >FOUNDED</text>: 1926<br>
<text style="text-decoration: underline;" >FOUNDER</text>:	Antonio Cavalieri Ducati, Adriano Cavalieri Ducati, Bruno Cavalieri Ducati<br>
<text style="text-decoration: underline;" >HEADQUATER</text>:	Bologna, Italy<br>
<text style="text-decoration: underline;" >AREA SERVED</text>: Worldwide<br>
<text style="text-decoration: underline;" >KEY PEOPLE</text>: Claudio Domenicali (CEO)<br>
<text style="text-decoration: underline;" >PRODUCT</text>: Motorcycle,Clothing,Accessories<br>
<text style="text-decoration: underline;" >OWNER</text>:	Ducati Corporation (9.92%)<br>
<text style="text-decoration: underline;" >WEBSITE</text>:	ducati.com</p>

			</div>

	 		<div id="three"><img style="margin-left: 8px;" src="img/dovs.jpg" width="100%"><center> <b>Andrea Dovizioso </b></center><br>
	
			</div>


			<script src="https://www.w3schools.com/lib/w3.js"></script>

<br><br><br> <center><b> Riders in motogp</b></center> <br> <br>



<div id="londonnn" class="city">
<text style="margin-left: 90px;cursor: pointer;"onclick="w3.hide('#australiii');document.getElementById('valll').style.display='block';"><b>1.  Andrea Dovizioso</b></text>
<div id="valll">
	<text style="margin-left: 80%;cursor: pointer;" onclick="w3.show('#australiii');document.getElementById('valll').style.display='none';"><b>Hide</b></text><br><br>
<img src="img/04.jpg"  style="width:110%;height:10%;margin-left: 55px;padding-bottom: 50px;">

</div>
</div> 
	 	 <br>

<div id="australiii" class="city">
<text style="margin-left: 90px;cursor: pointer;"onclick="w3.hide('#londonnn');document.getElementById('valeaa').style.display='block';"><b>2. Danilo Pedrucci</b></text>
<div id="valeaa">
	<text style="margin-left: 80%;cursor: pointer;" onclick="w3.show('#londonnn');document.getElementById('valeaa').style.display='none';"><b>Hide</b></text><br><br><br>
<img src="img/dan.jpg"  style="width:110%;height:10%;margin-left: 55px;padding-bottom: 50px;">

</div>
</div> 


		</div>
	</div>
</section>
	


</body>
</html>