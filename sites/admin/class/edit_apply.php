<br>
<hr>

<br>
<b><?php echo $_GET['edit'];?></b>

<form method="POST">
    <input type="text" name="name" value="<?php echo $_GET['edit'];?>" required>
    <?php $result = mysqli_query($conn, "SELECT * FROM job_desc WHERE category = '".$_GET['edit']."'");
        while ($row = mysqli_fetch_array($result)) {?>
    <textarea type="text" name="text" rows="14" required><?php echo $row["description"];}?></textarea>
    <button name="submit" class="tag-back" type="submit">
        Absenden
    </button>
</form>
<?php
if (isset($_POST['submit'])) {
    $text = mysqli_real_escape_string($conn,$_POST['text']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);

    ///INSERT CREDS
    $result5 = mysqli_query($conn, "UPDATE job_desc SET category = '$name', description = '$text' WHERE category = '".$_GET['edit']."'");
    echo "<meta http-equiv='refresh' content='0; URL=?apply'>";
}
?>