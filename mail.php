<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "gregorymark254@gmail.com";
    $headers = "From :".$mailFrom;
    $txt = "You have received an email from". $name.".\n\n" .$message;

    mail($mailTo,$subject,$headers,$txt);
    $headers("Location : index.php?mailsend");

}