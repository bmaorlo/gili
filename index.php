<?php

     if (!empty($_POST) && !empty($_FILES['my_photo']['name'])) {

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            $sent = true;
               // Please change to your credentials
            $to = 'gilgilmos@gmail.com';
            $subject = 'הרשמה למסיבה : '.$_POST['name'];


            $headers = "From: gilgilmos@gmail.com \r\n";
            $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



            //$header = "From: info@sparty.ga \r\n";
            //$header .= 'MIME-Version: 1.0' . "\r\n";
            //$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            //$header .= "From: info@sparty.ga \r\n";  
            //$header .= "Reply-To: ".$_POST['email']." \r\n";  


            //from: info@sparty.ga";
            // IMPORTANT, there is no validation to this page form

            // Save image to uploads folder
            $path = dirname(__FILE__).'/uploads/';
            $fileName=time()."_".basename($_FILES['my_photo']['name']);
            $uploadfile = $path . $fileName;

            move_uploaded_file($_FILES['my_photo']['tmp_name'], $uploadfile);
            $body ='
                <html>
                <head></head>
                <body style="direction:rtl;">
                    <u><b>פרטים: </b></u><br><br>

                    שם מלא :  ' . $_POST['name'] . ' <br/>
                    בני כמה : ' . $_POST['age'] . '  <br/>
                    אימייל : ' . $_POST['email'] . ' <br/>
                    טלפון : ' . $_POST['phone'] . ' <br/>
                    מהיכן : ' . $_POST['city'] . ' <br/>
                    הערות : ' . $_POST['notes'] . ' <br/>
                    תמונה : <a href="http://www.sparty.ga/gili/uploads/'.$fileName.'">http://www.sparty.ga/gili/uploads/'.$fileName.'</a>
                    <br/><br/><img src="http://www.sparty.ga/gili/uploads/'.$fileName.'"><br/>
                </body>
                </html>
            ';

            // Send email
            /*$body = "פרטים שהשאירו". "\n\n";
            $body .= "שם מלא: " . $_POST['name'] . "\n";
            $body .= "גיל: " . $_POST['age'] . "\n";
            $body .= "כתובת אימייל: " . $_POST['email'] . "\n";
            $body .= "מהיכן: " . $_POST['city'] . "\n";
            $body .= "טלפון: " . $_POST['phone'] . "\n";
            $body .= "הערות: " . $_POST['notes'] . "\n";
            $body .= "קישור לתמונה: <a href='http://www.google.com'></a>" . $_POST['notes'] . "\n";
            */
            // IMPORTANT, locally it is not working but on live hosting it should work
            mail($to,$subject,$body, $headers);
            mail('mor.balo81@gmail.com',$subject,$body, $headers);
        }
        else {
            $sent = false;
            $error_email = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ליין מסיבות האהבה של גילי מוסינזון בסאונה</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap3.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">

    <style>
        body {
            direction: rtl;
            background-color: #f5f5f5;
        }
        .error {
            color: red;
        }
        .container {
            background-color: #fff;
            padding-left: 15px;
            padding-right: 15px;
            width: 60%;
        }
        @media (max-width: 767px) {
            .container {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center>
                <h1>ליין מסיבות האהבה של גילי מוסינזון בסאונה</h1>
                <img src="img/theme.jpeg" width="50%"/>
            </center>
            <p>
                בימי ראשון-
                <br/>
                <b>***ערב סגור למוזמנים/ות בלבד***</b>
                <br/>
⁦                ⬇️⁩ מוזמנים להציץ בלוקיישן הכי מפנק בארץ ⬇️⁩
                <br/>
                <a target="_blank" href="http://saunatelaviv.com">http://saunatelaviv.com</a>
                
                
                <br/><br/><b>***** </b><br/>
                ה"סאונה" בקרליבך נבנתה במיוחד לקיום מסיבות מין ברמה אירופאית גבוהה ביותר: סאונה/גאקוזי/בריכה/מלתחות/לוקרים/רחבת ריקודים/באר/סלינג/חדרים פרטים/כלוב/איקס קשירה וכל מה שאפשר להעלות על הדעת בהקשר של מסיבת מין איכותית!!!
                באחריות- אין כזה מקום בארץ !!!
                

<br/><br/><b>***** </b><br/>
                כל המוזמנים יקבלו בכניסה למקום צמיד ותא אישי (לוקר)/מגבת/חומר סיכה/קונדומים וכל זה כלול במחיר פלוס פינוקים של צוות הבית.
                לרשות הבליינים/בלייניות יש בר עשיר בתשלום 🍺,


<br/><br/><b>***** </b><br/>
הצמיד אותו אתם/ן מקבלים/ות בכניסה למקום הוא אלקטרוני ומשמש לפתיחת תא האחסון (לוקר)
וכן משמש עבור חשבון הבר המשולם ביציאה.


<br/><br/><b>***** </b><br/>
כל מה שאתם/ן צריכים/ות לעשות הוא לשלוח לנו מייל/וואטסאפ עם קצת פרטים מזהים שלכם/ן וכמובן לבחור את התאריך הכי נוח לכם להגיע באחד מימי  ראשון הקרובים
הכי נשמח כי תשריינו את כל התאריכים כי


<b>איך אפשר יום ראשון בלי אורגיה?!</b>



<br/><br/><b>***** </b><br/>
מסיבות זימה אוגוסט:
<ul>
    <li>12.8</li>
    <li>19.8</li>
    <li>26.8</li>
</ul>
מסיבות זימה ספטמבר
<ul>
    <li>2.9</li>
    <li>16.9</li>
    <li>23.9</li>
    <li>30.9</li>
</ul>


<br/><br/><b>***** </b><br/>
מתחילים בשעה 20:00 ועד אחרון המשתגלים

<br/><br/><b>***** </b><br/>
כניסה מותרת רק מעל גיל 18


<br/><br/><b>***** </b><br/>
הרזידנט ניסן גבני יגיע לתת לכם שואו אמיתי עם קשירות והשפרצות בליין הכי איכותי בארץ עם הקהל הכי יפה כמוכם😍
ניסן⁦⬇️⁩
<br/>
<a target="_blank" href="https://www.instagram.com/nissan_gavni">https://www.instagram.com/nissan_gavni</a>


<br/><br/><b>***** </b><br/>
בכל שבוע זוג אחר יעלה על הבמה וייתן שואו בתיאום מראשי איתנו.
תרגישו חופשי להעלות הצעות ולעשות את את מה שהכי מחרמן אתכם עם קהל של 100 צופים מינימום ממממ

<br/><br/><b>***** </b><br/>
עלויות:
<ul>
    <li>עלות ההשתתפות ברכישת כרטיס זוגי למסיבה עבור גבר ואישה- 300₪</li>
    <li>עלות ההשתתפות ברכישת כרטיס זוגי ל-2- מסיבות עבור גבר ואישה- 550₪</li>
    <li>עלות ההשתתפות ברכישת כרטיס זוגי ל-3- מסיבות עבור גבור ואישה- 750₪</li>
    <li>עלות ההשתתפות ברכישת כרטיס זוגי ל-4- מסיבות עבור גבר ואישה- 950₪</li>
    <li>עלות כרטיס כניסה לאישה בלבד100₪</li>
    <li>עלות כרטיס גבר בודד למסיבה-  400₪</li>
    <li>עלות כרטיס גבר בודד ל-2- מסיבות- 750₪</li>
    <li>עלות כרטיס גבר בודד ל-3- מסיבות- 1050₪</li>
    <li>עלות כרטיס גבר בודד ל-4- מסיבות 1300₪</li>
</ul>

<br/><br/><b>***** </b><br/>

בנושא גברים המעוניינים להגיע ללא בת-זוג: אישור הגעה עבור כרטיס גבר לבד מותנה ברשימת ההמתנה, וזאת לטובת האיזון המגדרי.<br/>
עדיפות תינתן לגברים אשר ביצעו את התשלום כנדרש.<br/>
ברגע בו צוות המסיבה יקבל אישור השתתפות מבחורה ללא בן זוג- תקבלו הזמנה רשמית מאיתנו לאחר כבוד ותוכלו גם כן להשתתף.בחגיגות של אחד מהחגיגות של ימי ראשון.<br/>

<br/><br/><b>***** </b><br/>

רוצים להצטרף, מלאו את הטופס או שלחו אימייל לGilimosinzon@gmail.com עם הפרטים הבאים
<ul>
    <li>שם מלא</li>
    <li>בני כמה</li>
    <li>מהיכן</li>
    <li>תמונה עדכנית</li>
</ul>   
למבלים/ות הקבועים/ות של ליין מסיבות האהבה של גילי מוסינזון בסאונה- אנה מכם תשלחו את השם שלכם ואת התאריך שאתם/מעוניינים לשריין
<br/><br/><b>***** </b><br/>

לאחר קבלת המייל עם הפרטים שלכם 
נשלח אליכם/ן במייל/וואטאספ לינק התשלום להרשמה מראש באמצעות כרטיס אשראי
וכן לאישור ולהבטחת השתתפותכם/ן באירוע.

<br/><br/><b>***** </b><br/>
אין תשלום ביום המסיבה מאחר והרכב המשתתפים נקבע מראש !!!
באמשכ'ם אל תנסו להירשם בדקה ה90 כי לא נוכל לענות לכם/ן
נהיה עסוקים בהכנות אחרונות באופן הכי טובה שצוות המסיבה יודע לעשות לטובת מי שהבטיח/ה את השתתפותו/ה מבעוד מועד.

<br/><br/><b>***** </b><br/>
צוות האבטחה/בר/מנקים/יח"צ/מנהלים של הסאונה עושה הכל על-מנת לדאוג לשלומם/ן ולביטחונם/ן של המבלים והמבלות במקום -
אנא שמעו להוראותיו.

<br/><br/><b>***** </b><br/>
אין ברכישת כרטיס הבטחה מצד הנהלת האירוע לקיום יחסי מין או למגע.
כל הנעשה באם נעשה חייב להגיע אחרי הסכמה מפורשת של כל הצדדים בעניין
בקיצור גברים חרמנים אתם לא נוגעים ללא רשות ואם אמרו לכם לא אתם לא מקריפים/מנדנדים וכל התנהגות אחרת שעשוייה לגרום לאחת מהבלייניות
אי-נוחות,
אותו כנ"ל חל גם לגבי נשים החשות את עצמן יתר על המידה.
<br/><br/>
העובדה כי רכשתם כרטיס למסיבת מין לא אומרת שאתם הולכים להשתגל כי אז כבר יש לזה שם אחר והוא לא חוקי ואף לא מוסרי.
<br/>
פשוט תהיו חמודים/ות והשאר כבר יזרום.

<br/><br/><b>***** </b><br/>
<b><u>לסיכום: כל החוקים של העולם האמיתי שבחוץ תקפים לגבי ליין מסיבות האהבה בסאונה לרבות הסכמה וכן כבוד הדדי לא נהסס להרחיק בליינים/בלייניות לצמיתות במידה והם/ן עברו על חוקי הבית.
</u></b>

<br/><br/><b>***** </b><br/><br/>

⁦❤️⁩מקווים לראותכם/ן בקרוב!!!⁦❤️⁩


<br/><br/><b>***** </b><br/>


<br/><br/>
🔞🔞🔞🔞🔞🔞🔞🔞🔞🔞🔞🔞
<br/><br/>
<b>ולהלן התקנון אנא קראו בקפידה:</b>
<br/><br/>
1. ידוע לי שבאי המסיבה עשויים להימצא בעירום חלקי או מלא ואני מתחייב/ת לכבד זאת. 
<br/>
2. ידוע לי שמשתתפי המסיבה רשאים לבוא במגע מיני חלקי או מלא בכל שטח המסיבה ואני מתחייב/ת לכבד זאת.
<br/>
3. אני מבין/ה שאין לראות בעירום או במיניות מוחצנת הסכמה או הזמנה למגע, לאמירה או לכל התנהגות מינית אחרת. כל מעשה מיני שאינו בהסכמה ברורה,חד-משמעית ומלאה הוא הטרדה מינית.
<br/>
4. ידוע לי שכל סוג של מגע גופני מחייב קבלת רשות מפורשת מהזולת. אני מצהיר/ה כי בכל מגע, שיחה או אפילו מבט אהיה רגיש.ה לגבולות הזולת, אתקשר ואוודא שיש הסכמה בכל רגע.
<br/>
5. ידוע לי שכל התלבטות של הזולת לגבי מוכנותו לבוא במגע לרבות שתיקה, השתהות, היסוס, ספק וכמובן חרטה תוך כדי מגע, נחשבים כולם אי הסכמה מפורשת למגע ומחייבים הימנעות והפסקה מיידית של המגע.
<br/>
6. ידוע לי שחל איסור מוחלט על צילום או הקלטה בכל שטח המסיבה.
<br/>
7. אני מתחייב/ת לשמור על פרטיות באי המסיבה. אני מתחייב/ת כי לא אפרט את שמות באי המסיבה או מידע אחר עליהם לאדם שאינו במסיבה. 
<br/>
8. ידוע לי שהתכנים עשויים להיות כרוכים במגע גופני ו/או מיני ויחד עם זאת ידוע לי שאוכל בכל רגע נתון לעזוב או תוכן כלשהו במידה ואינם לרוחי ואני לוקח/ת על כך אחריות מלאה.
<br/>
9. בכל מקרה של תחושת הטרדה או חוסר נוחות אני מתחייב/ת ליידע באופן מיידי את מפיקי האירוע או מי מבאי טעמם.
<br/>
10. אני מתחייב/ת להישמע להוראות המפיקים. ידוע לי שכל הפרה של הכללים הנ"ל כמו כל תלונה שתתקבל לגביי מסמיכה את מפיקי האירוע להרחיק אותי משטח המסיבה באופן מיידי וללא החזר כספי. 
<br/>
11. אני מתחייב/ת להיות נאמן/נה ליצירת מרחב בטוח במהלך המסיבה ואם אתקל בהתנהגות מטרידה, אלימה או כפויה, אפעל לעצור אותה ואדווח למפיקים.
<br/>
12. אני מתחייב לשמור על הרכוש והציוד של מקום האירוע.
<br/>
13. שימוש באלכוהול או בכל חומר צריכה אחר הינו האחריות המשתתף בלבד. המארגנים אינם אחראים ואינם מעודדים צריכת חומרים מכל סוג בניגוד לדין"
<br/>
14. השתתפותי מותנית בוויתור מראש על כל תביעה מכל סוג שהוא כלפי המארגנים.
<br/>
15.      ידוע לי כי המארגנים עושים את מיטב יכולתם כדי לקיים את האירוע עבור קבוצת חברים סגורה, ועל כן אין הם נושאים בכל אחריות מלבד לפעול לשם התקיימות האירוע.
<br/>
16.      ידוע לי כי המארגנים לא יישאו בכל אחריות נזקית מכל סוג, וההשתתפות באירוע היא על אחריות המשתתף בלבד.
<br/>
17.      ידוע לי כי עלות האירוע הנה בכדי לקיימו ואינה מבטחת את המשתתף בכל ביטוח, וכל נזק שייגרם יהיה על אחריות המשתתף בלבד.
<br/>
18.      אני מצהיר בזאת שבעצם השתתפותי באירוע, אני מוותר על כל תביעה כנגד המארגנים.
<br/>

            </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <!-- IF EMAIL SENT SUCCESSFULLY -->
            <?php
            if($sent === true){
                echo '<h3> תודה על ההרשמה, ניצור איתכם קשר בכתובת אימייל שציינתם</h3>';die;
            }
            ?>
            <!-- HERE COMES FORM-->
                <h3> מלא פרטים להרשמה</h3>
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>שם מלא</label>
                        <input required type="text" class="form-control" placeholder="" value="<?=(!empty($_POST['name']) ? $_POST['name'] : '')?>" name="name">
                    </div>

                    <div class="form-group">
                        <label>בני כמה</label>
                        <input required type="text" class="form-control" placeholder="" value="<?=(!empty($_POST['age']) ? $_POST['age'] : '')?>" name="age">
                    </div>

                    <div class="form-group">
                        <label>כתובת אימייל</label>
                        <input required type="email" class="form-control" placeholder="" value="<?=(!empty($_POST['email']) ? $_POST['email'] : '')?>" name="email">
                    </div>

                    <div class="form-group">
                        <label>מהיכן</label>
                        <input required type="text" class="form-control" placeholder="" value="<?=(!empty($_POST['city']) ? $_POST['city'] : '')?>" name="city">
                    </div>

                    <div class="form-group">
                        <label>טלפון</label>
                        <input required type="text" class="form-control" placeholder="" value="<?=(!empty($_POST['phone']) ? $_POST['phone'] : '')?>" name="phone">
                    </div>

                    <div class="form-group">
                        <label>באיזו מסיבה תרצו להשתתף?</label>
                        <textarea required class="form-control" placeholder="" name="notes"><?=(!empty($_POST['notes']) ? $_POST['notes'] : '')?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Photo</label>
                        <input required type="file" name="my_photo">
                        <p class="help-block">תמונה עדכנית.</p>
                    </div>

                    <button type="submit" class="btn btn-primary">הרשם</button>
                </form>
        </div>
    </div>
    <br/><br/><br/><br/><br/>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
