<br>
<h2>Verwaltung von <?php echo $site_name; ?></h2>
<h4>Bitte Domains immer mit https oder http angeben</h4>
<br>

<b>Name des Helpdesk</b>
<br>

<?php
$result = mysqli_query($conn, "SELECT * FROM aurum_info WHERE ID = '1'");
while ($row = mysqli_fetch_array($result)) { ?>

    <form method="POST">
        <input type="text" value="<?php echo $row["info"]; ?>" name="text" required>
        <button name="submit-1" class="tag-back" type="submit">
            Absenden
        </button>
    </form>
<?php } ?>
<?php
if (isset($_POST['submit-1'])) {
    $text = $_POST['text'];
    ///INSERT CREDS
    $result5 = mysqli_query($conn, "UPDATE aurum_info SET info = '$text' WHERE ID = '1'");
?>
    <meta http-equiv='refresh' content='0; URL=?settings'><?php } ?>
<br>

<!-- TIDIO -->

<b>Tidio Support chat Integration</b>
<br>
<small>Lösche den eintrag um die Integration zu deaktivieren.</small>

<?php
$result = mysqli_query($conn, "SELECT * FROM domain_config WHERE ID = '2'");
while ($row = mysqli_fetch_array($result)) { ?>

    <form method="POST">
        <input type="text" value="<?php echo $row["domain_path"]; ?>" placeholder="Deaktiviert" name="text" pattern="//.+" title="Bitte gib gib eine Validen Link zu Tidio an.">
        <button name="submit-2" class="tag-back" type="submit">
            Absenden
        </button>
    </form>
<?php } ?>
<?php
if (isset($_POST['submit-2'])) {
    $text = $_POST['text'];
    ///INSERT CREDS
    $result5 = mysqli_query($conn, "UPDATE domain_config SET domain_path = '$text' WHERE ID = '2'");
?>
    <meta http-equiv='refresh' content='0; URL=?settings'><?php } ?>
<br>

<!-- Impressum -->

<br>
<b>Impressum</b>
<?php
$result = mysqli_query($conn, "SELECT * FROM domain_config WHERE ID = '4'");
while ($row = mysqli_fetch_array($result)) { ?>

    <form method="POST">
        <input type="text" value="<?php echo $row["domain_path"]; ?>" name="text" pattern="https?://.+" title="Bitte Domains immer mit https oder http angeben">
        <button name="submit-4" class="tag-back" type="submit">
            Absenden
        </button>
    </form>
<?php } ?>
<?php
if (isset($_POST['submit-4'])) {
    $text = $_POST['text'];
    ///INSERT CREDS
    $result5 = mysqli_query($conn, "UPDATE domain_config SET domain_path = '$text' WHERE ID = '4'");
?>
    <meta http-equiv='refresh' content='0; URL=?settings'><?php } ?>
<br>


<!-- Datenschutz -->

<br>
<b>Datenschutzerklärung</b>
<?php
$result = mysqli_query($conn, "SELECT * FROM domain_config WHERE ID = '5'");
while ($row = mysqli_fetch_array($result)) { ?>

    <form method="POST">
    <input type="text" value="<?php echo $row["domain_path"]; ?>" name="text" pattern="https?://.+" title="Bitte Domains immer mit https oder http angeben">
        <button name="submit-5" class="tag-back" type="submit">
            Absenden
        </button>
    </form>
<?php } ?>
<?php
if (isset($_POST['submit-5'])) {
    $text = $_POST['text'];
    ///INSERT CREDS
    $result5 = mysqli_query($conn, "UPDATE domain_config SET domain_path = '$text' WHERE ID = '5'");
?>
    <meta http-equiv='refresh' content='0; URL=?settings'><?php } ?>
<br>


<!-- AGB -->

<br>
<b>AGB</b>
<br>
<small>Lösche den eintrag um die AGB zu deaktivieren.</small>
<?php
$result = mysqli_query($conn, "SELECT * FROM domain_config WHERE ID = '6'");
while ($row = mysqli_fetch_array($result)) { ?>

    <form method="POST">
    <input type="text" value="<?php echo $row["domain_path"]; ?>" name="text" pattern="https?://.+" title="Bitte Domains immer mit https oder http angeben">
        <button name="submit-6" class="tag-back" type="submit">
            Absenden
        </button>
    </form>
<?php } ?>
<?php
if (isset($_POST['submit-6'])) {
    $text = $_POST['text'];
    ///INSERT CREDS
    $result5 = mysqli_query($conn, "UPDATE domain_config SET domain_path = '$text' WHERE ID = '6'");
?>
    <meta http-equiv='refresh' content='0; URL=?settings'><?php } ?>
<br>

<!-- Background -->

<br>
<b>Hintergrundbild</b>
<br>
<small>Lösche den eintrag um das Hintergrundbild zu deaktivieren.</small>
<?php
$result = mysqli_query($conn, "SELECT * FROM domain_config WHERE ID = '7'");
while ($row = mysqli_fetch_array($result)) { ?>

    <form method="POST">
    <input type="text" value="<?php echo $row["domain_path"]; ?>" name="text" pattern="https?://.+" title="Bitte Domains immer mit https oder http angeben">
        <button name="submit-7" class="tag-back" type="submit">
            Absenden
        </button>
    </form>
<?php } ?>
<?php
if (isset($_POST['submit-7'])) {
    $text = $_POST['text'];
    ///INSERT CREDS
    $result5 = mysqli_query($conn, "UPDATE domain_config SET domain_path = '$text' WHERE ID = '7'");
?>
    <meta http-equiv='refresh' content='0; URL=?settings'><?php } ?>
<br>
<!-- MAIL -->

<br>
<b>Mail-Server Daten weitergabe</b>
<br>
<small>Die Mail muss angegeben werden, da sonst der Support Desk nicht Funktioniert!</small>
<?php
$result = mysqli_query($conn, "SELECT * FROM mail_config WHERE ID = '1'");
while ($row = mysqli_fetch_array($result)) { ?>

    <form method="POST">
    <input type="text" value="<?php echo $row["description"]; ?>" name="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
        <button name="submit-71" class="tag-back" type="submit">
            Absenden
        </button>
    </form>
<?php } ?>
<?php
if (isset($_POST['submit-71'])) {
    $text = $_POST['text'];
    ///INSERT CREDS
    $result5 = mysqli_query($conn, "UPDATE mail_config SET description = '$text' WHERE ID = '1'");
?>
    <meta http-equiv='refresh' content='0; URL=?settings'><?php } ?>
<br>
</div>