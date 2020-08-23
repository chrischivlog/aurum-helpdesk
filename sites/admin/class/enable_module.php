<br>
<b>Support Formular im Footer</b>
<br><br>
    <?php
        $result = mysqli_query($conn, "SELECT * FROM modules_enable WHERE ID = '1'");
            while ($row = mysqli_fetch_array($result)) { 
                if ($row['state'] == '0') {
                        ?><a href="?module&enable=1"><div class="tag-back">Aktivieren</div></a>
                    <?php
                } else { 
                    ?><a href="?module&disabled=1"><div class="tag-back">Deaktivieren</div></a>
                    <?php
                }
            }
    ?>


<br>
<b>Entbannen Modul</b>
<br><br>
    <?php
        $result = mysqli_query($conn, "SELECT * FROM modules_enable WHERE ID = '2'");
            while ($row = mysqli_fetch_array($result)) { 
                if ($row['state'] == '0') {
                        ?><a href="?module&enable_unban"><div class="tag-back">Aktivieren</div></a>
                    <?php
                } else { 
                    ?><a href="?module&disabled_unban"><div class="tag-back">Deaktivieren</div></a>
                    <?php
                }
            }
    ?>

<?php
                if (isset($_GET['enable'])=='1') {
                    $result5 = mysqli_query($conn, "UPDATE modules_enable SET state = '1' WHERE ID = '1'");
                        echo "<meta http-equiv='refresh' content='0; URL=?module'>";

                } elseif(isset($_GET['disabled'])=='1') {
                    $result5 = mysqli_query($conn, "UPDATE modules_enable SET state = '0' WHERE ID = '1'");
                        echo "<meta http-equiv='refresh' content='0; URL=?module'>";


                }
                ?>

    <?php
                if (isset($_GET['enable_unban']) == 'unban') {
                    $result5 = mysqli_query($conn, "UPDATE modules_enable SET state = '1' WHERE ID = '2'");
                        echo "<meta http-equiv='refresh' content='0; URL=?module'>";

                } elseif(isset($_GET['disabled_unban'])=='unban') {
                    $result5 = mysqli_query($conn, "UPDATE modules_enable SET state = '0' WHERE ID = '2'");
                        echo "<meta http-equiv='refresh' content='0; URL=?module'>";


                }
                ?>