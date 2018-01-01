<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Stil/stil.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            <center>
            <nav id="navigation">
                <ul id="nav">
				<center>
                    <li><a href="index.php">Acasa</a></li>
                    <li><a href="galerie.php">Galerie</a></li>
                    <li><a href="magazin.php">Magazin</a></li>
                    <li><a href="despre.php">Despre noi</a></li>
                </ul>
            </nav>
			</center>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
<img src="galerie/trandafir.gif"  style="width:250px;height:400px;">
                
            </div>
            
            <footer>
                <p>Dolls Shop</p>
            </footer>
        </div>
    </body>
</html>
