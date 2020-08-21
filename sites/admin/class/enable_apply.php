<br>
<br>
<?php
$result = mysqli_query($conn, "SELECT * FROM job_desc");
while ($row = mysqli_fetch_array($result)) {
?>
    <?php
    if ($row['online'] == '0') {
        ///BUTTON online offline
    ?>

        <details>
            <summary>
                <div class="btn">Inaktiv</div> <?php echo $row['category']; ?>
            </summary>
            <div class="sum-word-breakUI">
                <br>
                <a href="?apply&enable=<?php echo $row['category']; ?>">
                    <button class="tag-back">Bewerbung Aktivieren</button>
                </a>
                <a href="?apply&=<?php echo $row['category']; ?>">
                    <button class="tag-start">Voraussetzungen Editieren</button>
                </a>
                <br><br>
                <a href="?apply&delete=<?php echo $row['category']; ?>">
                    <button class="tag-logout">Löschen</button>
                </a>
                <br>
                <br>
            </div>
        </details>

    <?php
    } else {
    ?>
        <details>
            <summary>
                <div class="btn">Aktiv</div> <?php echo $row['category']; ?>
            </summary>
            <div class="sum-word-breakUI">
                <br>
                <a href="?apply&disabled=<?php echo $row['category']; ?>">
                    <button class="tag-back">Bewerbung Deaktivieren</button>
                </a>
                <a href="?apply&edit=<?php echo $row['category']; ?>">
                    <button class="tag-start">Voraussetzungen Editieren</button>
                </a>
                <br><br>
                <a href="?apply&delete=<?php echo $row['category']; ?>" href="url_to_delete" onclick="return confirm('Soll die Gruppe <?php echo $row['category']; ?> wirklich entfernt werden?');">
                    <button class="tag-logout">Löschen (Nicht wiederherstellbar)</button>
                </a>
                <br>
                <br>
            </div>
        </details>
    <?php
    } ?>













<?php
    ///SET ONLINE OFFLINE
    if (isset($_GET['enable'])) {
        mysqli_query($conn, "UPDATE job_desc SET online = '1' WHERE category = '" . $_GET['enable'] . "'");
        echo "<meta http-equiv='refresh' content='0; URL=?apply'>";
    } elseif (isset($_GET['disabled']) == $row['category']) {
        mysqli_query($conn, "UPDATE job_desc SET online = '0' WHERE category = '" . $_GET['disabled'] . "'");
        echo "<meta http-equiv='refresh' content='0; URL=?apply'>";
    }
}
?>

<?php
///SET ONLINE OFFLINE
if (isset($_GET['delete'])) {
    $result5 = mysqli_query($conn, "DELETE FROM job_desc WHERE category = '" . $_GET['delete'] . "'");
    echo "<meta http-equiv='refresh' content='0; URL=?apply'>";
}
?>

<?php
///SET EDIT
if (isset($_GET['edit'])) {
    include './class/edit_apply.php';
}
?>

<?php
///SET APPLY PHASE
if (isset($_GET['apply_phase'])) {

    mysqli_query($conn, "UPDATE job_desc SET date = '" . $_GET['apply_phase'] . "' WHERE category = '" . $_GET['category'] . "'");
    echo "<meta http-equiv='refresh' content='0; URL=?apply'>";
}
?>