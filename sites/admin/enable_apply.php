<form method="POST">
<?php 
        $result = mysqli_query($conn, "SELECT * FROM jobs_online WHERE ID = '1'");
        while ($row = mysqli_fetch_array($result)) {?>
             
            <?php 
            if($row['online'] > '0'){    
            ?>
            <input type="checkbox" name="01" id="0" checked>Supporter</input><?php
            } else {?>
            <input type="checkbox" name="01" value="1">Supporter</input>
            <?php
            }

        }?>



<br><br>
    <button name="submit-sup-online" class="tag-start" type="submit">
        Absenden
    </button>
    <?php

        if (isset($_POST['submit-sup-online'])) {
                ///INSERT CREDS
                $result5 = mysqli_query($conn, "UPDATE jobs_online SET online = '$text' WHERE category= 'partner'");
                echo "<meta http-equiv='refresh' content='3; URL=?apply'>";
            }
?>
</form>