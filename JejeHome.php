<!DOCTYPE html>
<html>
 <head>
	<title>Jeje Typings Generator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="JejeHome.css">
 </head>
 <body>
	<img src='projectlogo.png' class='jejelogo' alt='Jeje Typings Logo'>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php
		echo "<center><button name='s' type='submit' class='generatebtn'>Generate</button>";
		echo "<br><br><br>";

        $generate = rand(1,8);
        $val = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            switch ($generate)
            {
                case 1:
                    $val = "hi gusto kita matagal na. i rlly like ur personality and ur mindset. ipasa mo to sa 15 katao kung hindi magiging sasakyan ka. wag kang tumawa, yung kaibigan ko tricycle na";
                    break;
                case 2:
                    $val = "Tandaan mo, alalahanin mo yung mga ano na inano ko kahapon . Kapag nakalimutan mo yung ano, maaano yung ano. Ano ? Hindi mo mainitndihan yung sinasabi ko? Hindi ka kasi nakikinig sa mga ano ko eh. Kaya naaano ka tuloy.";
                    break;
                case 3:
                    $val = "yeoboseyo ?? I mean hello 😣 *chuckles lightly* oh arasso, i mean okay ah .... ne, i mean yes. jinjjayo i mean really ... eheh ..mianhaeyo !!! I'M SORRY *frustated sigh* aish...ottoke i mean what do we do ?? arasso, i mean okay :3 see you annyeong, i mean bye";
                    break;
                case 5:
                    $val = "Pag ako UMIBIG.,. Pag ako UMIBIG😍💘 Malinaw pa sa TUBIG💦😋 Pag akoy NABIGO 💔😭💔Malabo pa Sa DUGO👊Matamis akong mag MAHAL💏💑Sweet parang ASUKAL😍😘💞Pero pag may KARIBAL😡👊💔para akong KRIMINAL👿🔫(99 percent) ka sa buhay ko 😘💓 (100 percent) ka sa puso ko😍😘💘";
                    break;
                case 6:
                    $val = "kikiam🥐 lima🖐🏻 fishball🍡 lima🖐🏻 palamig🍹 lima🖐🏻 bayad💵 bente🖐🏻🖐🏻🖐🏻🖐🏻 sukli💸 lima🖐🏻 kung d k bibili❌💰 umalis kna🚶🏻‍♀🚶🏻‍♂🤨 ehh😜🎤 ohh😲🎤ice pop🧊🍧 lollipop🍭 pag na2naw🧊🥵 palpak😰😰 yelo🧊 malamig🥶🥶 pag na2naw🧊🥵 2big💧💧😮";
                    break;
                case 7:
                    $val = "Hi Lodi😍 Walang signal sa Bukid😢 Pero nung nalaman ko na nag post ka ng pic mo😍🎉Dali Dali akong bumaba ng bukid🏃Tumawid ako sa Ilog🏃🏊🌊, Tinumbok ko ang pitong Bundok🗻Nakipag patayan🔫at umutang ako ng pera para pamasahe papuntang syudad🌆❤";
                    break;
                case 8:
                    $val = "UH 🤩 YOU 👉THINK 🧠YA 🤘BIG 💪BOY👦 THROWIN 🤾‍♂️THREE3️⃣ STACK 💵IMMA 🙌SHOW 👐YOU 👉HOW 🗣TO ✍️BALL 🏀YOU 👉A 👄MISMATCH 🌝OPINIONATED 🧠BUT ✊IM 👉ALWAYS 🖐SPITTING 👄STRAIGHT➖ FACTS 🍽THROWBACK ⬅️I 👉MIGHT 🤏THROW 🤾‍♂️THIS 👇ON 🌚AN ✨EIGHT 8️⃣TRACK";
                    break;
            }
        }

        echo "<input type='text' name='mytext' id='mytext' value='$val';>";
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
