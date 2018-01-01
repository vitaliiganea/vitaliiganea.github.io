<?php
$title = "Magazin";
?>
<?php
session_start();
include("../config.php");

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
        <link rel="stylesheet" type="text/css" href="../Stil/stil.css" />
		<link rel="stylesheet" href="../Stil/stil_logare.css" />
		<link rel="stylesheet" href="../Stil/stil_magazin.css" />
    </head>
    <body>
	<div>

		<div id="main" class="shell">

				<h1><center><font face="verdana" color="black">Comenzi:</font></center></h1>
				
				

	
	      <div class="section group">
		  

		  		<div align="center" id="section">
		 <table width="900" cellspacing="20">
	
	<tr >
		  
	<?php

								require_once('db.php');

								

								$result = $conn->prepare("SELECT * FROM producte RIGHT JOIN cumparaturi ON producte.Product_Id = cumparaturi.id_product"); 
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
	
	if ($row['Imagine']!=NULL)
	echo "<td align=center>";
	echo " <p align=center>Data: ".$row['trn_date']." </p>";
	echo " <p align=center>Nume: ".$row['nume']." </p>";	  	
	echo " <p align=center>Prenume: ".$row['prenume']." </p>";
	echo " <p align=center>Email: ".$row['email']." </p>";
	echo " <p align=center>Telefon: ".$row['telefon']." </p>";
	echo " <p align=center>Strada: ".$row['strada']." </p>";
	echo " <img align=center src=uploads/".$row['Imagine']. " width='100' height='100'></img></a><br>";	 
	echo " <p align=center>Denumire: ".$row['Nume']." </p>";	  	
	echo "<p align=center>Descriere: ".$row['Descriere']." </p>";
	echo "<p align=center> Pret: ".$row['Pret']. " Lei </p>";
	echo "</td>";
	$cells=$cells+1;
	if($cells==5)
	{
	echo "</tr><tr>";
	$cells=0;
	}
	
	
	  $counter=$counter+1;	 
	  if($counter==14)
	  break;
	  
								}

												

?>

	</tr>
	</table>
	
	<div style="clear:both"></div>
	</div>

   
	
			
				<div class="cl">&nbsp;</div>
		
			


    </body>
	</div>
	
</html>