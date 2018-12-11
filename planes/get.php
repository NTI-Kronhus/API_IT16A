<?php

require("C://xampp/htdocs/api/dbc.php"); 

if(isset($_GET['id'])){ // SPECIFY ID
    
    $id = $_GET['id'];
    
    $query = "SELECT * FROM planes WHERE id = $id";
    
    $result = mysqli_query($dbc,$query);
    
    $row = mysqli_fetch_array($result);
    
    if($row){
        $name = $row['name'];
        $capacity = $row['capacity'];
        echo '{"id":'.$id.',"name":"'.$name.'","capacity":'.$capacity.'}';
    }
    else{
        echo '{"success": false}';
        http_response_code(400);
    }
}
else{ // SEARCH ALL PLANES
    
    $query = "SELECT * FROM planes";
    
    $result = mysqli_query($dbc,$query);
    
    echo '{"planes":[';
    
    $row = mysqli_fetch_array($result);
    while($row){

        $id = $row['id'];
        $name = $row['name'];
        $capacity = $row['capacity'];
        
        echo "{\"id\":\"$id\",\"name\":\"$name\",\"capacity\":\"$capacity\" }";

        if($row = mysqli_fetch_array($result)){ // HAS MORE ROWS
            echo ",";
        }
    }
    
    echo "]}";
        
}

?>
