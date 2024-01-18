<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cabname = $_POST["cabname"];
    $source = $_POST["source"];
    $destination = $_POST["destination"];
    $dateTime = $_POST["dateTime"];
    $fare = $_POST["fare"];

    if ($cabname == "" ||  $source == "" || $destination == "" || $dateTime == "" || $fare == ""  ) {
        
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

        $sql = "INSERT INTO `cabbooking` (`cabname`, `source`, `destination`, `dateTime`, `fare`) VALUES ('$cabname', ' $source', '$destination', '$dateTime', '$fare')";
        if ($conn->query($sql) === TRUE) {
            header("Location: cab.html");
            exit();
        } else 
        { 
            header("Location: index.html");
            exit();
        }
    }
}else {
header("Location: index.html");
exit();
}



?>