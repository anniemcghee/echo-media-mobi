<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "melinda@echomedia.mobi";
 
    $email_subject = "New Message From Website!";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
		
		echo '<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Echo Media Mobile</title>

    <!-- Bootstrap Core CSS -->
    <link href="beta/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="beta/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body " >
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <br><br><br><br>
                        <p><object type="image/svg+xml" height="300px" width="300px" data="beta/img/echo.svg" class="appimage"></object></p><br> 
                        <div style="background-color: grey">
                        <p style="color: white;">';

echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please re-submit the corrected <a href='http://echomedia.mobi/index.html#contact'><u><strong>form</strong></u></a>.<br /><br /> </p></div>";
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['email']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $email_from = $_POST['email']; // required
 
    $comments_from = $_POST['comments']; // required

 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($comments_from) == 0) {
 
    $error_message .= 'Your message is empty.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
// create email headers
 
$headers = 'From: admin@echomedia.mobi'."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 <html>
 <head>
<meta http-equiv="refresh" content="0; url=http://echomedia.mobi/index.html#contactModal" />
 </head>
 </html>
 
 
<?php
 
}
 
?>