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

				<h1><center><font face="verdana" color="black">Cumparaturi:</font></center></h1>
				
				

	
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
	echo "".$row['Product_ID=']." <img align=center src=Admin/uploads/".$row['Imagine']. " width='250' height='300'></img></a><br>";	 
	echo "".$row['Product_ID']." <h1 align=center>Denumire: ".$row['Nume']." </h1>";	  	
	echo "".$row['Product_ID']."<p align=center>Descriere: ".$row['Descriere']." </p>";
	echo "".$row['Product_ID']."<h5 align=center> Pret: ".$row['Pret']. " Lei </h5>";

	
	

 
	  	if ($row['price']>0)	 
	  echo "<font color=red align=center >Price:<br></font><b> Ksh ". $row['Pret'] . "</b><br>";	  
	
		echo "</td>";
	  
	  

								}

?>
	</tr>
	</table>
	
	<div style="clear:both"></div>
	</div>

	
	<div>
	
	<?php
	require('db.php');
    if (isset($_REQUEST['nume'])){
		$nume = stripslashes($_REQUEST['nume']); 
		$nume = mysqli_real_escape_string($con,$nume); 
		$prenume = stripslashes($_REQUEST['prenume']);
		$prenume = mysqli_real_escape_string($con,$prenume);
		$strada = stripslashes($_REQUEST['strada']);
		$strada = mysqli_real_escape_string($con,$strada);
		$telefon = stripslashes($_REQUEST['telefon']);
		$telefon = mysqli_real_escape_string($con,$telefon);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$trn_date = date("Y-m-d H:i:s");
         $query = "INSERT into `cumparaturi` (id_product,nume, prenume, strada, telefon, email, trn_date) VALUES ('$id','$nume', '$prenume', '$strada', '$telefon','$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div><center><h3>Timp de 24 ore veti fi telefonati pentru a afla detalii despre livrare!</h3><br/></center></div>";
			echo "<div><center><h1><a href='index.php'>Acasa</a></h1></div></center>";
        }
    }else{
?>
<div class="form">
<form name="registration" action="" method="post">
<input type="text" name="nume" placeholder="Nume" required />
<input type="text" name="prenume" placeholder="Prenume" required />
<input type="email" name="email" placeholder="E-mail" required />
<input type="text" name="strada" placeholder="Strada" required />
<input type="text" name="telefon" placeholder="Telefon" required />
<input type="submit" name="submit" value="Finisare" />
</form>
<br /><br />
</div>
<?php } ?>
	
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