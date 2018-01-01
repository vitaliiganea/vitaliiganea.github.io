<?php
 $id = $_GET['id'];
?>


<html>
    <head>
	<style>
#section {
background-color:#FFF;
min-height:200px;

}
</style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Stil/stil.css" />
		<link rel="stylesheet" href="Stil/stil_logare.css" />
		<link rel="stylesheet" href="Stil/stil_magazin.css" />
    </head>
    <body>
	<div>
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
				<div class="cl">&nbsp;</div>
			
		<div id="slider">
		</div>
		<div id="main" class="shell">

				<h1><center><font face="verdana" color="black">Detalii despre productul ales</font></center></h1>
				
				

	
	      <div class="section group">
		  

		  		<div align="center" id="section">
		 <table width="900" cellspacing="20">
	
	<tr >
		  
	<?php

 $id=$_GET['Product_ID'];

								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM producte WHERE Product_Id = '$id'"); 
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['Product_Id'];

	
	
	
	
	echo "<td align=center>";
	
	  if ($row['Imagine']!=NULL)
	echo "".$row['Product_ID=']." <img align=center src=Admin/uploads/".$row['Imagine']. " width='650' height='700'></img></a><br>";	 
	echo "".$row['Product_ID']." <h1 align=center>Denumire: ".$row['Nume']." </h1>";	  	
	echo "".$row['Product_ID']."<p align=center>Descriere: ".$row['Descriere']." </p>";
	echo "".$row['Product_ID']."<h5 align=center> Pret: ".$row['Pret']. " Lei </h5>";
	echo "<a href=cumpara.php?Product_ID=".$id." ><h1 align=center><u>Cumpara  </h1></a>";

 
	  	if ($row['price']>0)	 
	  echo "<font color=red align=center >Price:<br></font><b> Ksh ". $row['Pret'] . "</b><br>";	  
	
		echo "</td>";
	  
	  

								}

?>

	</tr>
	</table>
	
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