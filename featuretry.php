<!DOCTYPE html>  
<html>
<head>

	 <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>jeje typing</title>  
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <?php
        echo "<h1> Hello </h1>";
        echo "<table align='center' cellpadding = '10'>";
        echo "<tr><td><p><button type='submit'>Generate</button></td></tr>";
        echo "<button onclick='copypaste()'>Copy</button>";
        echo "</table>";

        $generate = rand(1,3);
        $sentence ="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            switch ($generate)
            {
                case 1:
                $id = 1;
                  echo "hi gusto kita matagal na. i rlly like ur personality and ur mindset. ipasa mo to sa 15 katao kung hindi magiging sasakyan ka. wag kang tumawa, yung kaibigan ko tricycle na";
                  break;
                case 2:
                  echo "Tandaan mo, alalahanin mo yung mga ano na inano ko kahapon . Kapag nakalimutan mo yung ano, maaano yung ano. Ano ? Hindi mo mainitndihan yung sinasabi ko? Hindi ka kasi nakikinig sa mga ano ko eh. Kaya naaano ka tuloy.";
                  break;
                case 3:
                  echo "yeoboseyo ?? I mean hello >.< *chuckles lightly* oh arasso, i mean okay ah .... ne, i mean yes. jinjjayo i mean really ... eheh ..mianhaeyo !!! I'M SORRY *frustated sigh* aish...ottoke i mean what do we do ?? arasso, i mean okay :3 see you annyeong, i mean bye";
                  break;
                default:
                echo "Made by gnd";
            }
        }
    ?>

    <script>
        function copypaste()
        {
            /* Get the text field */
            var copyText = document.getElementById("$id");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
        }
    </script>
</body>
</html>
</html>

var copyText = document.getElementById("$id");