<!DOCTYPE html>
<html>
 <head>
	<title>Jeje Typings Generator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="JejeHome.css">
 </head>
 <body>
	<img src='projectlogo.png' class='jejelogo' alt='Jeje Typings Logo'>
	<form method="POST" action="jejebackend.php">

    <?php
		echo "<center><button name='s' type='submit' class='generatebtn'>Generate</button>";
		echo "<br><br><br>";
        $val = "";

        session_start();
        if(isset($_SESSION['val'])){
            $val = $_SESSION['val'];
        }


        echo "<textarea name='mytext' id='mytext' rows='4' cols='50' readonly='true';>$val</textarea>";
    ?>
    </form>

    <button type="button" onclick='myFunction()'>Copy text</button>

	<script>
		function myFunction() {
		var mytext = document.getElementById("mytext");	
		
		mytext.select(); //select text field
		
		document.execCommand("copy");  //Copy text
		
		alert("Copied na, mamsh!");
		}
	</script>

<br><br><img src='companylogo.png' class='companylogo' alt='GND Company Logo'> <!-- direct to repository -->

 </body>
 </html>
