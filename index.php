<!DOCTYPE html>
<html>
<head>
	<title>Hash Manager</title>
	<style type="text/css">

		body{
           font-size: 14px;
		}

	</style>
</head>
<body>
    

	<?php
        
        include("class/hash-manager.php");

        $hashmanager = new Hashmanager();	

        echo "<h1>64</h1>".$hashmanager->hash_1x64("github")."<br>";
        echo "<h1>128</h1> ".$hashmanager->hash_1x128("github")."<br>";
        echo "<h1>254</h1> ".$hashmanager->hash_1x256("github")."<br>";

	?>

</body>
</html>