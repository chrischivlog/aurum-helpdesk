<?php

//Forms APPLY
if(isset($_GET['type']) == 'apply') {
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
                                                                                        <br>Anmerkungen zu deiner Bewerbung<br>$v5', '$pin', '$date_')");
} else {
    echo "Es ist ein fehler aufgetreten, falsche Kategorie...";

}

} elseif(isset($_GET['type']) == 'support') {

} elseif(isset($_GET['type']) == 'bug') {

} else{
    echo "Es ist ein fehler aufgetreten";
}




 





?>