<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $busname = $_POST["busname"];
    $source = $_POST["source"];
    $destination = $_POST["destination"];
    $departureTime = $_POST["departureTime"];
    $arrivalTime = $_POST["arrivalTime"];
    $price = $POST["price"];

    if ($busname == "" ||  $source == "" || $destination == "" || $departureTime == "" ||  $arrivalTime == "" ||  $price == "" ) {
        
    }
    else
      {
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

        $sql =" INSERT INTO `busbooking` (`Busname`, `Source`, `Destination`, `DepartureTime`, `ArrivalTime`, `Price`) VALUES ('$busname', ' $source', '$destination', '$departureTime', ' $arrivalTime', ' $price')";
        if ($conn->query($sql) === TRUE) {
            header("Location: bus.html");
            exit();
        } else { 
            header("Location: index.html");
            exit();
        }
    }
}else {
header("Location: index.html");
exit();
}



?>