<?php

        $generate = rand(1,30);
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
                case 13:
                    $val = "It’s me😡🤔🙄and😘🥰🤤my jowa💍🥳😱wah😂😱👩‍❤️‍💋‍👩uuwi na sya🥺🥺😄uuwi na sha😘🥳💘wah😄💍💘maghahanap ng iba💕🤤😊maghahanap ng ib-💓💓 */ tinakpan bibig */ niyakap ( tumugtog ung coz you are the one the only thing 🥺💓💓 ) (740)";
                    break;
                case 14:
                    $val = "aba ginoong selecta, macapuno ka ng matcha ang rocky road ay sumasa-oreo bukod kang pinag-vanilla sa babaeng yogurt at pinag-banana naman ang iyong anak na si butterscotch";
                    break;
                case 15:
                    $val = "Isa sa mga pinakabagong rides dito sa Enchanted Kingdom yung tinatawag na, TwiN SPIN! ISANG URI NG ROLLERCOASTER, NA UMIIKOT, BUMUBULUSOK, at winawasiwas ka nang napakabiLIS! PERO BUKOD DITO, UMIIKOT DIN YUNG MISMONG BAGON, KUNG SAN KA NAKASAKAY! KAYA NAPAKAEXCITING, NAPAKABILIS!";
                    break;
                case 16:
                    $val = "ouch pain hurt disease illness sickness disorder stich ache sting wrench sorrow grief sadness loneliness unhappiness dissatisfaction resentment grudge pique displeasure awts pein pighati lumbay hinagpis kirot sakit pagtangis iyak lungkot siphayo dalamhati sama ng loob bigat sa damdamin";
                    break;
                case 17:
                    $val = "★BASTA POST NI IDOL ⓛⓘⓚⓔ KO YAN.!!★ SANA LAGi KANG ACTiVE AH... para my #LiKEkana my #COMMENT kapa.. BASTA WAG MONG KAKALIMUTAN MAG #LiKE_BACK AH..  Sinu dito Gusto #ACTIVE_LiKER & #ACTiVE_COMMENTOR.?? #PM_muko para #ADD kita. #CF_TO_CF TAU.! 👍ⓛⓘⓚⓔ👍 ( BOY & GiRL ) #ACCETPED…√√√ Ung #HONESTLang na #TULAD_KO ah. >ACTiVE AKO sa ACTiVE SAKiN< HONEST PA.! PROMiSE!";
                    break;
                case 18:
                    $val = "Sorry sa lahat. Sorry sa istorbo haha. Ayaw talaga saakin ng mundo. life is so unfair. Sana hindi nalang ako nabuhay haha. Sensya na ah eto lang kasi ako. Sorry wala akong kwenta. Sana di nalang ako ipinanganak haha. im just simple person kasi. lowkey. I am just nobody walang magkakagusto sa walang kwentang tao katulad ko haha sana hindi nalang ako nabuhay. 😎😎😎😎";
                    break;
                case 19:
                    $val = "shining ✨ through 🌺 the🎈city 🏙with 💕a 🧚🏻 little 🤏🏻 funk 🥳 and soul ✨, light 🔥 it 💋 up ⚡️ like 🌈dynamite 🧨";
                    break;
                case 20:
                    $val = "bAsSeRs BassErs wAg mO kOng p4k1l4m4n sA iNyO 😠✋🏼 h1nd1 kAyO 4nG nAgb1b1g4Y,, 🔥😐👎 nG mG4 pAnG4nG41lAngAn q 😼🖕 bAssErs bAsSeRs h1nd1 kAyO Ang nAgp4p4sAyA s4 4k1n 😌☝️🧟 bAssErs bAssErs ay4w niYo $4 4k1n 😂👎🔥👊 sCroLl! 😅 IgnOrE! 😏😏 bLocK!";
                    break;
                case 21:
                    $val = "One💕Two💕Three💕Four💕Five💕Six💕Seven💕Eight💕Nine💕Ten😘.. Kahit anong mangyari😮hindi kita ii-ONE😘💕 dahil papa😂👊TWO-nayan ko😅✋ sau na hindi kita pag😅😮ti-THREE pan😶✋ kaya😘 FOUR-ever💕💗💞 na tayong👩‍❤️‍👨magsasama👫 at kahit na😂💗 FIVE-bigar ako sau😔😒makikipag😂💗SIX-sikan😶😐padin ako😶✋, dumaan man ako😍😍😘😘SEVEN-tana😧😘kaya😂😘EIGHT-to lng tatandaan mo💗💗 ha...?Mahal na Mahal kita😅😍😘 NINE-TENdihan mo...? 👑💕😍😘.";
                    break;
                case 22:
                    $val = "OH MY GOD? ✝️️✞☦✝✟♱⛪🛐🙏📿👼🧔🏽 YOU JUST SAID PHILIPPINES! 🌏💫 ⭐️ 🌟 ✨ ⚡️🌏💫 ⭐️ 🌟 ✨ ⚡️🌏 PUTANGINA! 🤩😱 I AM A FILIPINO 🌏👨‍🌾 AND THIS MAKES MY DAY 🌟📅🌟 but first of all you spelled Philippines 🌏 wrong ❌❌❌ it's 'Philippines' 🌏👍 not 'phillipines'👎🌏 pero I STILL applaud 👏👏👏 you of your effort! secondly 2️⃣✌ we are not Spanish 🇪🇸❌ or Chinese 🇨🇳❌ or asian 🌏❌ we are FILIPINOS 🇵🇭✔️✔️✔️. INDEPENDENT AND LOVING.. 💖💖💖 point takda halos halo-halo and thirdly 3⃣ your country and culture sucks ass. 🍑💨 We proud CHRISTIAN FILIPINOS 👼🌏😇🙏📿🌏🤲🧎🌏⛪🛐🌏🌏 have halo halo and jolibee. 😳🥴🤤🍛 Fuck 💖💕💝✨🖕 You. Fuck 💖💕💝✨🖕 Your Country. Fuck 💖💕💝✨🖕 Yourself. we are SUPERIOR!!!!!! 🥇🥇1🥇1🥇🥇 PINOY 🇵🇭 🇵🇭 PRIDE PINOY 🇵🇭 🇵🇭 PRIDE WOOOOOOOOOOO LAGI TUMAYO 🗣📢 LAGI SUMIGAW 🗣📢 MAG ARAW ☀️☀️☀️ ARAW ☀️☀️ KAYO SUMIGAW 🗣📢 SHOWTIME 🗣📢 THIS IS YOUR SHOW 🗣📢 THIS IS YOUR TIME MAGPASIKAT NA IT'S SHOWTIME!!!!! 🗣📢🎤🗣📢🗣📢🎤";
                    break;
                case 23:
                    $val = "palibhasa kasi 🤡⁉️ alam na alam 🧠🧠🧠 mo kung 😭😭👉🏻 paano ako kunin eh 💔😔 isang ngiti mo lang 😎😎😎 wala umiikot ↪️↩️🔂 na ulit yung mundo ko 🌍🌏 tangina‼️ ang talino kong 👩🏻‍🏫👀 tao❔ pero pag dating 👇🏻👇🏻 sa'yo? 👁👁👁 ewan ko 🌀 natatanga ako. 🥺🥺 haha ems";
                    break;
                case 24:
                    $val = "🥺😭💧 EE UUU U 😭🥺💧Eu💧💧E E😭😭 E EUE🥺🥺😭UUUUE😭🥺💧🥺😭 ue 💧ee😭🥺💧ue 🥺e e e😭. e 💧🥺😭Uueuuue. 💧💧E ee 😭🥺ee e🥺🥺😭eUEE 💧🥺💧EEE 💧💧😭U E 🥺😭EE H💧🥺😭E EUU💧🥺😭 EUHE 🥺💧😭EUEH🥺😭💧💧ue e😭😭eeeeee💧💧💧uu🥺😭 hh 😭🥺 EUH EE H🥺😭💧";
                    break;
                case 25:
                    $val = "Ang Court 😭🤭😏🖕Court of Appeal 🏛🏛🏛Dunk it! Dunk it, Jonathan, Dunk it! ⛹️‍♂️🏀 (ang hina) 😪 “o hawakan mo” 😏 nabali 😟  ayyyyy 😱😨 UYyy Jonathan ⁉️ siraulo 🤪🤪🤪🤪";
                    break;
                case 26:
                    $val = "Uhmmm😘Pano Ko Bato Sisimulan?😆Happy Birthday Beh!!🤪Hehe! Una Sa Lahat Ang Ganda Ko!😛 Char! Eto Na Talaga😀Happy Birthday!🥳🎉Thank You Sa Lahat🙃Omg! Naiiyak Tuloy Ako Charot!😭🤪Hehe Enjoy Your Day!😋Penge Lumpia Beh Ha???!!!😝MBTC Love You❣️❣️❣️";
                    break;
                case 27:
                    $val = "Kala mo di masakit 😫 yung pinagsasabi mo sakin??? 🗣🗣🗣Na patay gutom akohh??? 😤😤😤Bakit?Hindi bayon masakit? 😞😡😡E ikaw nga hinuhuli mo kalapati e.🐦🐦🐦Sabi niya tara Joela ku,hulihin natin yung kalapati 🏃🐦kuhain natin 🚫🚫🚫(MASAMA YON)Oh siya yun,siya yung pagsabihan mo😫🤑😤😡.Siya pa naninisi😿,hati nga kami sa pagkain🍝🌮🍕,hindi naman siya ang bumili🏃.Hindi niya nalang hingiin😡😡😡para hindi ma...🤑🤑🤑O,wag mo na siyang anohin 😡😡😡!!!wag mo na siyang anohin(HULI TAYONG KALAPATI🐦)Bakittt??!!! 😫😡😤Nakikisali ka dito kahit di ka naman kasali.O bakit? 😒🙄🙄Bat mo inaano pinsan ko 😤😡.Iiyak na nga diba😰😰😰,tapos yun na nga,wag mo ng anuhin 😡😡😡.Iiyak na nga eyeyeyye.O bakit??? 🙄🙄🙄O bakit din??!!! 🙄😒😒😒Umalis kana 🗣🗣🗣Aalis ako di naman ako dito eh.😒😒🙄🙄.Bb ka pala eh😒😡Bakit ka nag sasabing bb??? 🙄😤😤Bat ka namamangga??😰😫😿OYY DONDUNGGN INGAY INGAY NIYO!!!HOY🗣🗣🗣";
                    break;
                case 28:
                    $val = "YOU 👶 DO 😫 NOTE 📝📝 THE LIAR 🤥 IS MY ✊🍔 PEYK IS THE CASSIE IN 🕒 PEYK INDI SYA MUKHANG DRAGON 🐉💥 ISIS MY 👈👖 LIAR 🤥 IS THE MAKE 💘 AND A PEYK IN 👉 MY 😀 LIFE 💯 ᵒᵒ ᶜᵃˢˢᶦᵉ ᵒᵒ ᵐᵃʳᵍᵃʳᵉᵗ ᵈᶦ ᵃᵏᵒ... ᵈʳᵃᵍᵒⁿ... ANO 🍚 MAY 🎡 SASALITA KA PA? YOU 🌊👨🏻 DO 😫 NOTE 📝 AMS TALK 💬 YOU 🧍‍♂️ DO 👏 NOTE 💴 AMS TALKING 💬 ABOUT 🤷 IS THE PEOPLE 👫";
                    break;
                case 29:
                    $val = "Hi tapos ano? magiging friends tayo? lagi tayong mag-uusap mula umaga hanggang madaling araw? tas magiging close tayo? sa sobrang close natin nahuhulog na tayo sa isa't isa, tapos ano? magiging tayo tapos iiwan moko?wag na thanks na lang sa hi mo.";
                    break;
                case 30:
                    $val = "★ Basta't ipinaskil ng aking hinahangaan, ⓖⓤⓢⓣⓞ ko 'yan! ★ Ako'y umaasa na lagi kang aktibo sa Facebook upang makapaglagay ako ng reaksyon ng #Kagustuhan o makapagsulat ako ng aking #Puna sa iyong mga pinapaskil! 😘❤♥😄👇 Subalit, ako'y umaasa na tutumbasan mo ang aking pagsisikap, kung saan, #GugustuhinMoRin ang aking mga ipinapaskil. 👉💪👊👈👍😁😄 Ngayon, sino rito ang gusto ng #AktibongTagaGusto o #AktibongTagaPuna? Padalhan mo ako ng #PribadongMensahe upang maidagdag kita bilang isang kaibigan sa Facebook. 👍 ⓖⓤⓢⓣⓞ 👍 (Lalaki at Babae) #Tinatanggap √. Ang hinahanap ko ay 'yung mga #Tapat lamang, #TuladKo. 😁✌👍 AKTIBO AKO SA MGA AKTIBO SA AKIN. AT SAKA, AKO'Y NAPAKA-TAPAT! PINAPANGAKO KO 'YAN! ✋";
                    break;
            }
            session_start();
            $_SESSION["val"] = $val;
        }

        header('Location: index.php');
    ?>
