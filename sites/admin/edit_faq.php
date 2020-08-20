


<?php
        $result = mysqli_query($conn, "SELECT * FROM faq_article WHERE ID = '".$_GET['id']."'");
        while ($row = mysqli_fetch_array($result)) {?>


<h2>FAQ mit ID <?php  echo $row["ID"];?> ändern</h2>

<form method="POST">
    <input type="text" value="<?php  echo $row["title"];?>" name="title">
    <textarea type="text" name="text" rows="14" required><?php  echo $row["details"];?></textarea>
    <button name="submit" class="tag-back" type="submit">
        Absenden
    </button>
</form>
</div>
<?php          
        }
        ?> 
<?php
if (isset($_POST['submit'])) {
    $text = mysqli_real_escape_string($conn,$_POST['text']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);

    ///INSERT CREDS
    $result5 = mysqli_query($conn, "UPDATE faq_article SET details = '$text', title = '$title' WHERE ID = '".$_GET['id']."'");
    ?><meta http-equiv='refresh' content='0; URL=?edit_faq&id=<?php  echo $_GET['id'];?>'><?php
}
?>