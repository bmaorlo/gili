<?php
include "class-phpmailer.php";
$sent = false;
     if (!empty($_POST) && !empty($_FILES['my_photo']['name'])) {

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            $sent = true;
               // Please change to your credentials
            
            
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

$mail = new PHPMailer();

$mail->isSMTP();
$mail->CharSet = 'UTF-8';
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'mor.balo81@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'guhparxdqvllnxrs';
$mail->SMTPSecure = 'tls';

$mail->Debugoutput = 'html';
//Set who the message is to be sent from
$mail->setFrom('gilgilmos@gmail.com', 'Gili Parties');
//Set an alternative reply-to address
$mail->addReplyTo($_POST['email'], $_POST['name']);
//Set who the message is to be sent to

$mail->addAddress('gilgilmos@gmail.com', 'Gili');
$mail->addCC('Dviradani0@gmail.com', 'Dvir');


$mail->addBcc('mor.balo81@gmail.com', 'Mor');
//Set the subject line
$mail->Subject = 'Party Register : '.$_POST['name'];
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
$mail->Body    = $body;
$mail->IsHTML(true);
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    $sent = false;
} else {
    $sent = true;
}







/*
            $headers = "From: gilgilmos@gmail.com \r\n";
            $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

*/

            //$header = "From: info@sparty.ga \r\n";
            //$header .= 'MIME-Version: 1.0' . "\r\n";
            //$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            //$header .= "From: info@sparty.ga \r\n";  
            //$header .= "Reply-To: ".$_POST['email']." \r\n";  


            //from: info@sparty.ga";
            // IMPORTANT, there is no validation to this page form

            // Save image to uploads folder
            
            

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
            //mail($to,$subject,$body, $headers);
            //mail('mor.balo81@gmail.com',$subject,$body, $headers);
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
                <h1>ליין מסיבות האהבה של גילי מוסינזוון</h1>
                <img src="img/theme.jpeg" width="50%"/>
            </center>
            <br><br><br>
            <p>
                המסיבה היא מסיבה סטרייטית וכולם מוזמנים להשתתף בחגיגה: <br>
                לרבות זוגות/בודדות/בודדים/בי די אס אמים/ממש לא בידיאסאמים/גבוהים/נמוכים שחרחרות/בהירות ובקיצור כל מי שחובב מין<br>
                אנחנו מזמינים את כולם למסיבת האהבה של גילי מוסינזון  אשר כבר הפכו למותג מנצח משפריץ ניטים 💓
                <br/>
                <br/><br/><b>***** </b><br/>
            התשלום נעשה מראש בלינק תשלום באשראי או בההעברה למספר חשבון בנק .
            <br>
            300₪ לזוג- אישה+ גבר
            <br>
            400₪ לגבר בודד
            <br>
            150₪ לאישה בודדה
            <br>
<br/><br/><b>***** </b><br/>



מסיבות האהבה נערכות כל יום ראשון פתיחת דלתות 21:00- 03:00<br>
<ul>
    <li>30.12</li>
    <li>6.1</li>
    <li>13.1</li>
    <li>20.1</li>
    <li>27.1</li>
    <li>3.2</li>
    <li>10.2</li>
    <li>17.2</li>
    <li>23.2</li>
</ul>


<br/><br/><b>***** </b><br/>
קרליבך 14 תא- קומה מינוס 2

<br/><br/><b>***** </b><br/>
כניסה מותרת רק מעל גיל 18 

<br/><br/><b>***** </b><br/>
הרזידנט ניסן גבני יגיע לתת לכם שואו אמיתי עם קשירות והשפרצות בליין הכי איכותי בארץ עם הקהל הכי יפה כמוכם😍

<br/><br/><b>***** </b><br/>
אין דרס קוד תבואו איך שנוח לכם וגם בגד ים אם רוצים.


<br/><br/><b>***** </b><br/>
בסאונה אתם מקבלים כלול במחיר- <br/>
לוקר אישי/מגבות/קונדומים/חומר סיכה/ סאונה רטובה/סאונה יבשה/גאקוזי/מלתחות/חדרונים. אינטימיים.<br/>
וכמובן את הקהל הטוב בארץ.<br/>


<br/><br/><b>***** </b><br/>
בכניסה תקבלו תמיד אלקטרוני אשר פותח את הלוקר וכן החשבון שלכם בבר נרשם על הצמיד- תשלום ביציאה.

<br/><br/><b>***** </b><br/>
רוצים להצטרף?, מלאו את הטופס בתחתית העמוד או צרו קשר ושלחו לנו את הפרטים הבאים בוואטסאפ או אימייל
<ul>
    <li>שם מלא</li>
    <li>בני כמה</li>
    <li>מהיכן</li>
    <li>תמונה עדכנית</li>
</ul>

<br/><br/>

גילי
<br/>
0543443334

<br/><br/>
דביר-
<br/>
Dviradani0@gmail.com
<br/>
0542530344
<br/><br/>


<br/><br/><b>***** </b><br/>
צוות האבטחה/בר/מנקים/יח"צ/מנהלים של הסאונה עושה הכל על-מנת לדאוג לשלומם/ן ולביטחונם/ן של המבלים והמבלות במקום - אנא שמעו להוראותיו. 



<br/><br/><b>***** </b><br/>
אין ברכישת כרטיס הבטחה מצד הנהלת האירוע לקיום יחסי מין או למגע. כל הנעשה באם נעשה חייב להגיע אחרי הסכמה מפורשת של כל הצדדים בעניין בקיצור גברים חרמנים אתם <br>
לא נוגעים ללא רשות ואם אמרו לכם לא אתם לא מקריפים/מנדנדים וכל התנהגות אחרת שעשוייה לגרום לאחת מהבלייניות אי-נוחות, אותו כנ"ל חל גם לגבי נשים החשות את עצמן יתר על המידה. <br>
לא נהסס להרחיק בליינים מטרידים!<br>
פליזזזז תשלטו על הסטלה שלכם ותנהגו בכבוד הדדי.<br>
תודה.<br>
<br>
העובדה כי רכשתם כרטיס למסיבת מין לא אומרת שאתם הולכים להשתגל כי אז כבר יש לזה שם אחר והוא לא חוקי ואף לא מוסרי. <br>
פשוט תהיו חמודים/ות והשאר כבר יזרום.<br>


<br/><br/><b>***** </b><br/>
⁦❤️⁩מקווים לראותכם/ן בקרוב!!!⁦❤️⁩ 

<br/><br/><b>***** </b><br/>
כאשר ביצעתם תשלום אתם מסכימים על התקנון והתנאים הכתובים במסמך זה 

<br/>
🔞🔞🔞🔞🔞🔞🔞🔞🔞🔞🔞🔞 
<br/><br/>
ולהלן התקנון אנא קראו בקפידה ותשלח אישור שלכם שהכל מקובל עליכם/ן  וכן תנהגו לפי הוראות התקנות בזמן שהותכם במסיבת האהבה.
<br/><br/>
1. ידוע לי שבאי המסיבה עשויים להימצא בעירום חלקי או מלא ואני מתחייב/ת לכבד זאת. <br>
2. ידוע לי שמשתתפי המסיבה רשאים לבוא במגע מיני חלקי או מלא בכל שטח המסיבה ואני מתחייב/ת לכבד זאת. <br>
3. אני מבין/ה שאין לראות בעירום או במיניות מוחצנת הסכמה או הזמנה למגע, לאמירה או לכל התנהגות מינית אחרת. כל מעשה מיני שאינו בהסכמה ברורה,חד-משמעית ומלאה הוא הטרדה מינית. <br>
4. ידוע לי שכל סוג של מגע גופני מחייב קבלת רשות מפורשת מהזולת. אני מצהיר/ה כי בכל מגע, שיחה או אפילו מבט אהיה רגיש.ה לגבולות הזולת, אתקשר ואוודא שיש הסכמה בכל רגע. <br>
5. ידוע לי שכל התלבטות של הזולת לגבי מוכנותו לבוא במגע לרבות שתיקה, השתהות, היסוס, ספק וכמובן חרטה תוך כדי מגע, נחשבים כולם אי הסכמה מפורשת למגע ומחייבים הימנעות והפסקה מיידית של המגע. <br>
6. ידוע לי שחל איסור מוחלט על צילום או הקלטה בכל שטח המסיבה. <br>
7. אני מתחייב/ת לשמור על פרטיות באי המסיבה. אני מתחייב/ת כי לא אפרט את שמות באי המסיבה או מידע אחר עליהם לאדם שאינו במסיבה. <br>
8. ידוע לי שהתכנים עשויים להיות כרוכים במגע גופני ו/או מיני ויחד עם זאת ידוע לי שאוכל בכל רגע נתון לעזוב או תוכן כלשהו במידה ואינם לרוחי ואני לוקח/ת על כך אחריות מלאה. <br>
9. בכל מקרה של תחושת הטרדה או חוסר נוחות אני מתחייב/ת ליידע באופן מיידי את מפיקי האירוע או מי מבאי טעמם. <br>
10. אני מתחייב/ת להישמע להוראות המפיקים. ידוע לי שכל הפרה של הכללים הנ"ל כמו כל תלונה שתתקבל לגביי מסמיכה את מפיקי האירוע להרחיק אותי משטח המסיבה באופן מיידי וללא החזר כספי. <br>
11. אני מתחייב/ת להיות נאמן/נה ליצירת מרחב בטוח במהלך המסיבה ואם אתקל בהתנהגות מטרידה, אלימה או כפויה, אפעל לעצור אותה ואדווח למפיקים. <br>
12. אני מתחייב לשמור על הרכוש והציוד של מקום האירוע. <br>
13. שימוש באלכוהול או בכל חומר צריכה אחר הינו האחריות המשתתף בלבד. המארגנים אינם אחראים ואינם מעודדים צריכת חומרים מכל סוג בניגוד לדין" <br>
14. השתתפותי מותנית בוויתור מראש על כל תביעה מכל סוג שהוא כלפי המארגנים. <br>
15. ידוע לי כי המארגנים עושים את מיטב יכולתם כדי לקיים את האירוע עבור קבוצת חברים סגורה, ועל כן אין הם נושאים בכל אחריות מלבד לפעול לשם התקיימות האירוע. <br>
16. ידוע לי כי המארגנים לא יישאו בכל אחריות נזקית מכל סוג, וההשתתפות באירוע היא על אחריות המשתתף בלבד. <br>
17. ידוע לי כי עלות האירוע הנה בכדי לקיימו ואינה מבטחת את המשתתף בכל ביטוח, וכל נזק שייגרם יהיה על אחריות המשתתף בלבד. <br>
18. אני מצהיר בזאת שבעצם השתתפותי באירוע, אני מוותר על כל תביעה כנגד המארגנים. <br>

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
