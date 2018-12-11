<?php

require("C://xampp/htdocs/api/dbc.php"); 

if(isset($_POST['name']) && isset($_POST['capacity'])){
    
    $name = $_POST['name'];
    $capacity = $_POST['capacity'];
    
    $query = "INSERT INTO planes (name,capacity) VALUES ('$name',$capacity)";
    
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