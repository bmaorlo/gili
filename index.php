<?php

    // Please change to your credentials
    $to = 'konstantin.mrlens@gmail.com';
    $subject = 'some subject';
    $header = "From: webmaster@example.com";

    if (!empty($_POST) && !empty($_FILES['my_photo']['name'])) {

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            $sent = true;
            // IMPORTANT, there is no validation to this page form

            // Save image to uploads folder
            $path = dirname(__FILE__).'/uploads/';
            $uploadfile = $path . basename($_FILES['my_photo']['name']);

            move_uploaded_file($_FILES['my_photo']['tmp_name'], $uploadfile);


            // Send email
            $body = "User filled the form with this data:". "\n";
            $body .= "Name: " . $_POST['name'] . "\n";
            $body .= "Age: " . $_POST['age'] . "\n";
            $body .= "Email: " . $_POST['email'] . "\n";
            $body .= "City: " . $_POST['city'] . "\n";
            $body .= "Notes: " . $_POST['notes'] . "\n";

            // IMPORTANT, locally it is not working but on live hosting it should work
            mail($to,$subject,$body, $header);
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
    <title>Special</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap3.min.css">
    <link rel="stylesheet" href="/css/bootstrap-rtl.css">

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
            <h1>Special page</h1>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <!-- IF EMAIL SENT SUCCESSFULLY -->
            <? if (!empty($sent)) {?>
                <h3> Thank you for registration. We will be in touch with you by email.</h3>
            <?} else {?>
            <!-- HERE COMES FORM-->
                <h3> Your Information</h3>
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input required type="text" class="form-control" placeholder="Add Name" value="<?=(!empty($_POST['name']) ? $_POST['name'] : '')?>" name="name">
                    </div>

                    <div class="form-group">
                        <label>Age</label>
                        <input required type="text" class="form-control" placeholder="Add Age" value="<?=(!empty($_POST['age']) ? $_POST['age'] : '')?>" name="age">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input required type="email" class="form-control" placeholder="Add Email" value="<?=(!empty($_POST['email']) ? $_POST['email'] : '')?>" name="email">
                        <? if (!empty($error_email)) {?>
                            <div class="error">
                                Your email is not valid
                            </div>
                        <?}?>
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input required type="text" class="form-control" placeholder="Add City" value="<?=(!empty($_POST['city']) ? $_POST['city'] : '')?>" name="city">
                    </div>

                    <div class="form-group">
                        <label>Notes</label>
                        <textarea required class="form-control" placeholder="Add Notes" name="notes"><?=(!empty($_POST['notes']) ? $_POST['notes'] : '')?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Photo</label>
                        <input required type="file" name="my_photo">
                        <p class="help-block">Please add your photo here.</p>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            <?}?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <hr>

            <!-- HERE COMES ACCORDEON WITH QUESTIONS -->
            <h3>Some Questions</h3>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                Question One
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                Question Two
                            </a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                Question Three
                            </a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                Question Four
                            </a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

</body>
</html>