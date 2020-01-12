<?php
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {

    $name       = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $com        = $_POST['mail'];
    $nummer     = $_POST['num'];
    $message    = $_POST['bericht'];
    $subject    = 'Aanmelding mediacollege';

    $email_body = "BSN: $name\n" .
        "Email: $achternaam\n" .
        "Naam: $com\n" .
        "Gebrotendatum: $nummer\n" . 
        "Tefeloonnummer: $message.\n";

    $to = "25383@ma-web.nl";
    $headers = "Van: $com \r\n";
    
   mail($to, $subject, $email_body, $headers);

    if ($result === false) {
        echo 'Mail niet verstuurd';
        exit;
    }

    header("Location: index.html");
    $message = "De mail is verstuurd!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
