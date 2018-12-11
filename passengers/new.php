<?php

require("C://xampp/htdocs/api/dbc.php"); 

if(isset($_POST['name']) && isset($_POST['passport_number']) && isset($_POST['birth'])){
    
    $name = $_POST['name'];
    $passport_number = $_POST['passport_number'];
    $birth = $_POST['birth'];
    
    $query = "INSERT INTO passengers (name,passport_number,birth) VALUES ('$name','$passport_number','$birth')";
    
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