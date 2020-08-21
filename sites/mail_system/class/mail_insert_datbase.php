<?php

//Forms APPLY
if($_GET['type'] == 'apply') {
    if(isset($_GET['cat'])) {
    $cat_v = $_GET['cat']; 
    $v1 = mysqli_real_escape_string($conn,$_POST['user_name']);
    $v2 = mysqli_real_escape_string($conn,$_POST['mail']);
    $v3 = mysqli_real_escape_string($conn,$_POST['request1']);
    $v4 = mysqli_real_escape_string($conn,$_POST['request2']);
    $v5 = mysqli_real_escape_string($conn,$_POST['request3']);

    $result2 = mysqli_query($conn, "INSERT INTO mail_cache (text, pin, date) VALUES ('<h1>Bewerbung als $cat_v</h1> 
                                                                                        Mail: $v2
                                                                                        <br>Name:<br>$v1
                                                                                        <br>Stell dich kurz vor:<br> $v3
                                                                                        <br>Warum willst du dich bei uns bewerben?<br>$v4  
                                                                                        <br>Anmerkungen zu deiner Bewerbung:<br>$v5', '$pin', '$date_server')");

}

} elseif($_GET['type'] == 'support') {
    $v1 = mysqli_real_escape_string($conn,$_POST['mail']);
    $v2 = mysqli_real_escape_string($conn,$_POST['request1']);
    $v3 = mysqli_real_escape_string($conn,$_POST['request2']);


    $result3 = mysqli_query($conn, "INSERT INTO mail_cache (text, pin, date) VALUES ('<h1>Allgemeine Support-Anfrage </h1> 
                                                                                        Mail: $v1
                                                                                        <br>Kategorie:<br>$v2
                                                                                        <br>
                                                                                        <br>Nachricht:<br> $v3', '$pin', '$date_server')");

} elseif($_GET['type'] == 'bug') {
        $v1 = mysqli_real_escape_string($conn,$_POST['mail']);
        $v2 = mysqli_real_escape_string($conn,$_POST['user_name']);
        $v3 = mysqli_real_escape_string($conn,$_POST['request1']);
        $v4 = mysqli_real_escape_string($conn,$_POST['request2']);
        $v5 = mysqli_real_escape_string($conn,$_POST['request3']);
    
        $result2 = mysqli_query($conn, "INSERT INTO mail_cache (text, pin, date) VALUES ('<h1>Bugreport $v4</h1> 
                                                                                            Mail: $v1
                                                                                            <br>Name:<br>$v2
                                                                                            <br>Beschreibung:<br> $v3
                                                                                            <br>Weitere Anhänge oder Links:<br>$v5', '$pin', '$date_server')");
    
} else{
    echo "Es ist ein fehler aufgetreten";
}




 





?>