<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'):
$user = filter_var($_POST['username'],FILTER_SANITIZE_STRING) ;
$mail = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL) ;
$phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT) ;
$message = filter_var($_POST['message'],FILTER_SANITIZE_STRING) ;
$userError='';
$messageError='';
if(strlen($user) <4 || strlen($user)>10 ){
$userError="please enter your name and must be larger than <strong>4</strong> and less than <strong>10</strong> characters";
};
if(strlen($message) <= 10){
    $messageError="please write your message and must be larger than <strong>10</strong> characters"; 
};
$header='From '. $mail . '\r\n';
$myEmail='sefeenwageh05@gmail.com';
$subject = 'Contact Form';
if($userError=='' && $messageError==''){
//  mail($myEmail, $subject, $message , $header);
 $user='';
 $mail='';
 $phone='';
 $message='';
$success="<div class='success'>we have recevied your message</div>";
}
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="all.min.css">
</head>
<body>
    <form action=<?php echo $_SERVER['PHP_SELF']?> method='POST'>
    <h1>contact me</h1>
    <?php if(isset($success)) { echo $success; } ?>
    <input  type="text" name='username' 
    placeholder='Enter your name' 
    value=<?php if(isset($user)){echo $user;}; ?>>
    <i class="fa-solid fa-user fa-fw"></i>
    <span class='x'>*</span>
        <?php
          if(isset($userError)){
        echo  "<p>$userError</p>";
        };
        ?>
        <p class='alert a'>please enter your name and must be larger than <strong>3</strong> and less than <strong>10</strong> characters</p>
    <input type="email" name='email'
     placeholder='Enter your valid email'
     value=<?php if(isset($mail)){echo $mail;}; ?>>
    <i class="fa-solid fa-envelope fa-fw"></i>
    <span class='y'>*</span>
    <p class='alert b'> mail filed can't be empty </p>
    <input type="text" name='phone' 
    placeholder='Enter your phone number'
    value=<?php if(isset($phone)){echo $phone;}; ?>>
    <i class="fa-solid fa-phone fa-fw"></i>
    <textarea name="message" placeholder='your message!'><?php if(isset($message)){echo $message;};?></textarea>
    <span class='z'>*</span>
        <?php
        if(isset($messageError)){
            echo  "<p>$messageError</p>";
        }
        ?>
        <p class='alert c'>please write your message and must be larger than <strong>10</strong> characters</p>
    <input type="submit" value='send message'>
    <i class="fa-solid fa-paper-plane fa-fw"></i>
    </form>
    <script src="main.js"></script>
</body>
</html>