<?php

require_once ('db.php');

if (isset($_POST['Submit'])) {
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$Imagine=$_FILES["image"]["name"];
$Nume=$_POST['Nume'];
$Descriere=$_POST['Descriere'];
$Pret=$_POST['Pret'];



$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO producte (Nume, Descriere,Pret, Imagine)
VALUES ('$Nume', '$Descriere','$Pret', '$Imagine')";

$conn->exec($sql);
echo "<script>alert('Produsul a fost adaugat cu succes'); window.location='index.php'</script>";
// }
}
// }
?>