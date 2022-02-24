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
		echo "<center><button name='s' type='submit' class='generatebtn'>Generate
		     <center><button type='button' class='generatebtn' onclick='myFunction()'>Copy</button>";
		echo "<br><br><br>";
        $val = "";

        session_start();
        if(isset($_SESSION['val'])){
            $val = $_SESSION['val'];
        }


        echo "<textarea name='mytext' id='mytext' rows='4' cols='50' readonly='true';>$val</textarea>";
    ?>
    </form>

	<script>
		function myFunction() {
		var mytext = document.getElementById("mytext");

		mytext.select(); //select text field

		document.execCommand("copy");//Copy text

		alert("Copied na, mamsh!");
		}
	</script>

<br><br>
<a href="https://github.com/darladvd/filipino-jeje-typings/"><img src='companylogo.png' class='companylogo' alt='GND Company Logo'></a>

</body>
 </html>
