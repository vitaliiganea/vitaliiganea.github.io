<?php
session_start();
 
 if($_GET['do']== 'logout'){
	 unset($_SESSION['admin']);
	 session_destroy();
 }
 
if(!$_SESSION['admin']){
	header("Location: login.php");
	exit();
}
?>

   <head>
<style>
input.MyButton {
width: 40%;
padding: 10px;
cursor: pointer;
font-weight: bold;
font-size: 100%;
background: #3366cc;
color: #fff;
border: 1px solid #3366cc;
border-radius: 10px;
}
input.MyButton:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}




</style>
</head>
	<center>
	<br><a class="btn btn-primary" href="#myModal" data-toggle="modal">Apasa aici pentru a adauga</a></br>
	<form>
<br><input class="MyButton" type="button" value="Apasa aici pentru a vizualiza cumparaturile" onclick="window.location.href='cumparaturi.php'" /></br>
<br><input class="MyButton" type="button" value="Ieși din pagina de administrare" onclick="window.location.href='index.php?do=logout'" /></br>
</form>
</center>
	<br>
	<br>
	<br>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">

<h3 id="myModalLabel">Adauga</h3>
</div>
<div class="modal-body">
<form method="post" action="upload.php"  enctype="multipart/form-data">
<table class="table1">
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Denumire</label></td>
		<td width="30"></td>
		<td><input type="text" name="Nume" placeholder="Denumire product" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Descriere</label></td>
		<td width="30"></td>
		<td><input type="text" name="Descriere" placeholder="Descriere product" required /></td>
	</tr>
		<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Pret</label></td>
		<td width="30"></td>
		<td><input type="text" name="Pret" placeholder="Pret la product" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Selecteaza imagine</label></td>
		<td width="30"></td>
		<td><input type="file" name="image"></td>
	</tr>
</table>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Renunta</button>
<button type="submit" name="Submit" class="btn btn-primary">Adauga</button>
    </div>
</form>
</div>			