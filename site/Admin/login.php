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

				<h1><center><font face="verdana" color="black">Pagina de administrare:</font></center></h1>
				
				

	
	      <div class="section group">
		  

		  		<div align="center" id="section">
		 <table width="900" cellspacing="20">
	
	<tr >
		  
<?php
session_start();

if($_SESSION['admin']){
	header("Location: index.php");
	exit();
}
$admin = 'admin';
$password = '123';

if ($_POST['submit']){
	if($admin == $_POST['user'] AND $password == $_POST['password']){
		$_SESSION['admin'] = $admin;
		header("Location: index.php");
		exit();
	} else echo '<p> Login sau parola gresita. </p>';
}
?>

<form method ="post">
Username: <input type="text" name="user" /><br/>
Password: <input type="text" name="password" /><br/>
<input type="submit" name="submit" value="Autorizare" />
</form>

	</tr>
	</table>
	
	<div style="clear:both"></div>
	</div>

   
	
			
				<div class="cl">&nbsp;</div>
		
			


    </body>
	</div>
	
</html>