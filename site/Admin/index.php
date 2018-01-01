<?php
session_start();

if(!$_SESSION['admin']){
	header("Location: login.php");
	exit();
}
?>
<?php include('header.php'); ?>
<body>


    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">


<?php include('modal_add.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <thead>
                                <tr>
									<th style="text-align:center;">Id</th>
									<th style="text-align:center;">Imagine</th>
                                    <th style="text-align:center;">Denumire</th>
                                    <th style="text-align:center;">Descriere</th>
                                    <th style="text-align:center;">Pret</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM producte ORDER BY Product_Id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['Product_Id'];
							?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['Product_Id']; ?></td>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
									<?php if($row['Imagine'] != ""): ?>
									<img src="uploads/<?php echo $row['Imagine']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
								</td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['Nume']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['Descriere']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['Pret']; ?></td>
								</tr>
								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>


</body>
</html>


