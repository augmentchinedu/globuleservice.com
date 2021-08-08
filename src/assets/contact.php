<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}


if (empty($_POST["phone"])) {
    $errorMSG = "Phone Number is required ";
} else {
    $phone = $_POST["phone"];
}

if (empty($_POST["company"])) {
    $errorMSG = "Company is required ";
} else {
    $company = $_POST["company"];
}

if (empty($_POST["from"])) {
    $errorMSG = "From is required ";
} else {
    $from = $_POST["from"];
}

if (empty($_POST["destination"])) {
    $errorMSG = "From is required ";
} else {
    $destination = $_POST["destination"];
}

if (empty($_POST["departureTime"])) {
    $errorMSG = "Departure time is required ";
} else {
    $departureTime = $_POST["departureTime"];
}

if (empty($_POST["passengers"])) {
    $errorMSG = "Passengers is required ";
} else {
    $passengers = $_POST["passengers"];
}

if (empty($_POST["returnTime"])) {
    $errorMSG = "Return time is required ";
} else {
    $returnTime = $_POST["returnTime"];
}

if (empty($_POST["comments"])) {
    $errorMSG = "Comments time is required ";
} else {
    $comments = $_POST["comments"];
}

if(isset($_POST['luggage'])) {

    if($_POST['luggage'] == 'light') {

        $luggage = $_POST["luggage"];

    } elseif($_POST['luggage'] == 'heavy') {

        $luggage = $_POST["luggage"];
    }
}

if(isset($_POST['pick'])) {

    if($_POST['pick'] == 'one') {

        $pick = $_POST["pick"];

    } elseif($_POST['pick'] == 'round') {

        $pick = $_POST["pick"];
    }

    elseif($_POST['pick'] == 'multi') {

        $pick = $_POST["pick"];
    }
}

$EmailTo = "support@globuleservices.com";
$Subject = "New message from glider website page";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "PhoneNumber: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Company: ";
$Body .= $company;
$Body .= "\n";
$Body .= "From: ";
$Body .= $from;
$Body .= "\n";
$Body .= "Destination: ";
$Body .= $destination;
$Body .= "\n";
$Body .= "DepartureDate: ";
$Body .= $departureDate;
$Body .= "\n";
$Body .= "DepartureTime: ";
$Body .= $departureTime;
$Body .= "\n";
$Body .= "Passengers: ";
$Body .= $passengers;
$Body .= "\n";
$Body .= "ReturnDate: ";
$Body .= $returnDate;
$Body .= "\n";
$Body .= "ReturnTime: ";
$Body .= $returnTime;
$Body .= "\n";
$Body .= "Comments: ";
$Body .= $comments;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>