<div clas="box2">
    <div class="text ">
        <a href="?apply" style="color: white; ">
            <div class="tag-back">
                ❮ Übersicht
        </a>
    </div>
</div>

<h5>Partner</h5>
<form method="POST">
    <textarea type="text" name="text" rows="14" required>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM job_desc WHERE category = 'partner'");
        while ($row = mysqli_fetch_array($result)) {
            echo $row["description"];
        }
        ?>    
     </textarea>
    <button name="submit" class="tag-back" type="submit">
        Absenden
    </button>
</form>
</div>
<?php
if (isset($_POST['submit'])) {
    $text = mysqli_real_escape_string($conn,$_POST['text']);
    ///INSERT CREDS
    $result5 = mysqli_query($conn, "UPDATE job_desc SET description = '$text' WHERE category= 'partner'");
    echo "<meta http-equiv='refresh' content='0; URL=?apply_partner'>";
}
?>