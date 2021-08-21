<?php

$name = $_GET["name"];
$email = $_GET["email"];
$phone = $_GET["phone"];
$company = $_GET["company"];
$front = $_GET["from"];
$destination = $_GET["destination"];
$departureDate = $_GET["departureDate"];
$departureTime = $_GET["departureTime"];
$passengers = $_GET["passengers"];
$luggage = $_GET["luggage"];
$pick = $_GET["pick"];
$returnDate = $_GET["returnDate"];
$returnTime = $_GET["returnTime"];
$comments = $_GET["comments"];


$body = "";

$body .= "\n";
$body .= $name;
$body .= "\n";
$body .= $email;
$body .= "\n";
$body .= $phone;
$body .= "\n";
$body .= $company;
$body .= "\n";
$body .= $front;
$body .= "\n";
$body .= $destination;
$body .= "\n";
$body .= $departureDate;
$body .= "\n";
$body .= $departureTime;
$body .= "\n";
$body .= $passengers;
$body .= "\n";
$body .= $luggage;
$body .= "\n";
$body .= $pick;
$body .= "\n";
$body .= $returnDate;
$body .= "\n";
$body .= $returnTime;
$body .= "\n";
$body .= $comments;


$subject = "New Quote From Globuleservices";
$from = "from: noreply@globuleservices.com";
$to = "segunisrael4@gamil.com";

if(mail($to, $subject, $body, $from)){
    echo 'true';
}
?>