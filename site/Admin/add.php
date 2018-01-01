<?php
require_once('db.php');

$Nume= $_POST['Nume'];
$Descriere= $_POST['Descriere'];
$Pret= $_POST['Pret'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO producte (Nume, Descriere, Pret)
VALUES ('$Nume', '$Descriere', '$Pret')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='index.php'</script>";
?>