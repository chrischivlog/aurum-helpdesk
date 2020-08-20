<?php

if(isset($_GET['id'])){
    $result = mysqli_query($conn, "DELETE FROM faq_article WHERE ID = '".$_GET['id']."'");
    ?>
    <meta http-equiv='refresh' content='0; URL=?faq'>
    <?php
} else {
    echo "Gib eine ID an!";
}

?>