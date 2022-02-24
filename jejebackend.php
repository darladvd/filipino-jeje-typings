<?php

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
                case 9:
                    $val = "It😞 reALly 😭huRts😘 AnG😨m@gm4h4l😨 ng gAni2 🤫🤭kUnG cno🤭😰 phAng pInili kø 😰😯hiñdi 😳😳mhAkUha😤 Ng buø 😤hAngG@Ng g@nUn n4😰😰 l4ng ng4😞😞k@ilANg4n kØ tØng🤜✊ t@nGg4pin n@ s4 phUxxo 😤mHø😭😘👍 mhErhØn 😤nA 😍😰ngh@ng 😤ib4ng UmA4ngkin😃😆 +";
                    break;
                case 10:
                    $val = "aT alAm khØ nA😭😍 rEn 😠nh4🤗🤗 mAyrØøn nAng n4gmh@m4yAri sA pAg ivhig🤲🤲 sA iyø aqoU itøng💔 nAKikihATi at aNo mAn 💞AnG maNgyari 'dI qo khAyang 👁️👃maNuMbat🙄 at kahit pa😟 iliHiim👅👅 mA akØ sHa LAhat gAaNo m4n 👂🗨️kabIgAt sA puSo kO itØng 💤💤4minin hindi d4daiNg 😕";
                    break;
                case 11:
                    $val = "w@g ka lAng mAwal@y🗯️🗯️ sa akIn 😳maSakit man na isipin na ako🖐️✋ ang ☝️☝️NaGhiRam khAya 😥piNaSya💅💅 mong🤕🤕 huwAg na ngAng 😷😱aT k@hit hiNdi to táMA 🤯ako🤮😓 ay shumUgal k@hiT ph4 nga 🤢alAm køng máyróøn😐😤 káng iBaÑg mahal binigay kØ😠aNg laHat🤢 kAhit g4nto 😶";
                    break;
                case 12:
                    $val = "iNiIsIp kO 🤔👈🤔 kUnG bAkIt ❓⁉️ gAnItO 👇aNg lAnGiT ☁️🌤🌄niLaYo 👐👀 aKo sAyOo 😥🚷🙍‍♂️hIndI 🙅‍♂️🚫kO mAtAngGap 😤🔪mAhIrAp ⛏🔨mAgPaNgGaP 🤡❌nA aKo'Y hInDi bIgO 💔🙅nGunIt dI kO rIn iNaAsAhAnG 😱‼️‼️mAnGyAyArI tO ✊😿kUnG eKaW aY aLa aLa 💆🤔nAlaNg pAaNo nA aKoOo 🥺👉👈";
                    break;
            }
            session_start();
            $_SESSION["val"] = $val;
        }

        header('Location: Jejehome.php');
    ?>