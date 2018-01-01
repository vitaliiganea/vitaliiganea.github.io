<?php
$title = "Galerie";
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Stil/stil.css" />
		<link rel="stylesheet" href="Stil/stil_logare.css" />
<style>		
ul.ppt {
	position: relative;
	margin: auto;
    width: 26%;
}

.ppt li {
	list-style-type: none;
	position: absolute;
	top: 0;
	left: 0;
}

.ppt img {
	border: 1px solid #e7e7e7;
	padding: 5px;
	background-color: #ececec;
	
}

@import url('http://fonts.googleapis.com/css?family=Open+Sans:300');


.gallery {
  width: 95%;
  margin: 0 auto;
  padding: 5px;
  background: #fff;
  box-shadow: 0 1px 2px rgba(0,0,0,.3);
  
}

.gallery > div {
  position: relative;
  float: left;
  padding: 3%;
  
}

.gallery > div > img {
  width: 345px;
  transition: .1s transform;
  transform: translateZ(0);
  
  
}

.gallery > div:hover {
  z-index: 1;
  
}

.gallery > div:hover > img {
	
  transform: scale(3.0,3.0);
  transition: .3s transform;
  
}

.cf:before, .cf:after {
  display: table;
  content: "";
  line-height: 0;
  
}

.cf:after {
  clear: both;
}

h1 {
  margin: 40px 0;
  font-size: 30px;
  font-weight: 300;
  text-align: center;
}


</style>
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            <center>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Acasa</a></li>
                    <li><a href="galerie.php">Galerie</a></li>
                    <li><a href="magazin.php">Magazin</a></li>
                    <li><a href="despre.php">Despre noi</a></li>
                </ul>
            </nav>
			</center>
<div class="form">
<center>
<h1>Galerie</h1>
</center>

<div>
<div class="gallery cf">

  <div>
    <img src="Galerie/1.jpg" width="350" height="250"  alt="">
  </div>
  <div>
    <img src="Galerie/2.jpg" width="350" height="250"  alt="">
  </div>
  <div>
    <img src="Galerie/3.jpg" width="350" height="250"  alt="">
  </div>
  <div>
    <img src="Galerie/4.jpg" width="350" height="250"  alt="">
  </div>
  <div>
    <img src="Galerie/5.jpg" width="350" height="250"  alt="">
  </div>
  <div>
    <img src="Galerie/6.jpg" width="350" height="250"  alt="">
  </div>

	<div style="clear:both"></div>
	</div>

   
	
			
				<div class="cl">&nbsp;</div>
		
			

	<div>		
<footer>
                <p>Dolls Shop</p>
            </footer>
        </div>
    </body>
	</div>
	
</html>
