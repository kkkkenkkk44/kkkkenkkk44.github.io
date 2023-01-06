<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailForm = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "kenyang890404@gmail.com";
    $headers = "From: " .$mailForm;
    $txt = "You have a message ".$name.$message;

    mail($mailTo, $name, $txt, $headers);

    header("Location: index.html?MessageSent")
}

?>
