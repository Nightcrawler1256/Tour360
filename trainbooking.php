<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $quota = $_POST["quota"];
    $trainnumber = $_POST["trainnumber"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    $date = $_POST["date"];
    $passengername = $_POST["passengername"];
    $passengerage = $_POST["passengerage"];
    $sex = $_POST["sex"];
    $berth = $_POST["berth"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    if ($quota == "" || $trainnumber == "" || $from == "" || $date == "" || $passengerage == "" || $sex == "" || $berth == "" || $phone == "" || $email == ""){

    }
    else {
           $servername = "localhost";
           $username = "root";
           $password = "";
           $database = "travel";

         // Create connection
            $conn = new mysqli($servername, $username, $password, $database);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "INSERT INTO `trainbooking` (`Quota`, `TrainNumber`, `JourneyFrom`, `JourneryTo`, `JourneyDate`, `PassengerName`, `Age`, `Sex`, `Berth`, `Phone`, `Email`) VALUES (' $quota', '$trainnumber', '$from', '$to', '$date', '$passengername', '$passengerage', ' $sex', '$berth', '$phone', '$email')";
                    if ($conn->query($sql) === TRUE) {
                        header("Location: train.html");
                        exit();
                    } else { 
                        header("Location: index.html");
                        exit();
                    }


       }
    }
    else {
        header("Location: index.html");
        exit();
        }

?>