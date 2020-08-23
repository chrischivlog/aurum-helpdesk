<?php

//CHECK IF FORMS EMPTY APPLY
if($_GET['type'] == 'apply') {
    if(isset($_GET['cat'])) {
        $cat_check = $_GET['cat']; ///DEFINE CAT TO REDIRECT
        if(empty($_POST['user_name'] && $_POST['mail'] && $_POST['request1'] && $_POST['request2'])){
            ///SEND BACK TO FORM
            header("Refresh:4; url=../join/formular.php?cat=$cat_check");
            echo"<h1>Bitte verwende eine Browser der <kbd>required</kbd> als HTML Attribute zulässt!</h1>";
            exit();
        } else {

        }
    }
}

//CHECK IF FORMS EMPTY SUPPORT NOT WITH REQUEST 1 CAUSE not empty by default
if($_GET['type'] == 'support') {
    if(empty($_POST['mail'] && $_POST['request2'])){
        ///SEND BACK TO FORM
        header("Refresh:4; url=../support-request/");
        echo"<h1>Bitte verwende eine Browser der <kbd>required</kbd> als HTML Attribute zulässt!</h1>";
        exit();
    } else {

    }
}


//CHECK IF FORMS EMPTY BUG NOT WITH REQUEST 1 CAUSE not empty by default
if($_GET['type'] == 'bug') {
        if(empty($_POST['user_name'] && $_POST['mail'] && $_POST['request2'] && $_POST['request3'])){
            ///SEND BACK TO FORM
            header("Refresh:4; url=../bugreport/");
            echo"<h1>Bitte verwende eine Browser der <kbd>required</kbd> als HTML Attribute zulässt!</h1>";
            exit();
        } else {

        }
    }

//CHECK IF FORMS EMPTY BANN NOT WITH REQUEST 2 CAUSE not empty by default
if($_GET['type'] == 'bann') {
        if(empty($_POST['user_name'] && $_POST['mail'] && $_POST['request1'] && $_POST['request3'] && $_POST['request4'])){
            ///SEND BACK TO FORM
            header("Refresh:4; url=../unban/");
            echo"<h1>Bitte verwende eine Browser der <kbd>required</kbd> als HTML Attribute zulässt!</h1>";
            exit();
        } else {

        }
    }
?>