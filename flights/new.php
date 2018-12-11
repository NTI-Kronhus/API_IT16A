<?php

require("C://xampp/htdocs/api/dbc.php"); 

if(isset($_POST['plane_id']) && 
isset($_POST['departure']) && 
isset($_POST['arrival']) &&
isset($_POST['from_city']) &&  
isset($_POST['to_city']) && 
isset($_POST['distance']) && 
isset($_POST['flight_number'])){
    
    $plane_id = $_POST['plane_id'];
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $from_city = $_POST['from_city'];
    $to_city = $_POST['to_city'];
    $distance = $_POST['distance'];
    $flight_number = $_POST['flight_number'];
    
    $query = "INSERT INTO flights (plane_id,departure,arrival,from_city,to_city,distance,flight_number) VALUES ('$plane_id','$departure','$arrival','$from_city','$to_city','$distance','$flight_number')";
    
    if(mysqli_query($dbc,$query)){
        echo '{"success": true}';
    }
    else{
        echo '{"success": false}';
        http_response_code(400);
    }
}else{
    echo '{"success": false}';
    http_response_code(400);
}

?>