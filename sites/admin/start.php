<h2>Willkommen in der Übersicht von Aurum infinity, hier kannst du deinen Helpdesk Administrieren.</h2>
<form method="POST">
        <b style="float: left;">Bug oder Feature Request an Etwickler senden:</b>
        <br>
                <select required="required" name="select">
				<optgroup label="Wähle bitte aus...">
                    <option value="Feature Request">Feature Request</option>
                    <option value="Bug">Bug</option>
				</optgroup>
            </select>
            <b style="float: left;">Beschreibung:</b>
            <textarea name="text" rows="7" required maxlength="1000"></textarea>
            <b style="float: left;">Email:</b>
            <input type="email" name="mail"  required>
        <button type="submit" name="submit" class="tag-back">
            Absenden
        </button>
    </form>


<?php if(isset($_POST['submit'])){

$select = $_POST['select'];
$text = $_POST['text'];
$user = $_POST['mail'];


$hookObject = json_encode([
    "username" => "Aurum Infinity User Report",
    "content" => "",
    "tts" => false,
    "embeds" => [
        [
            "title" => "$select",
            "type" => "normal",
            "description" => "$text",
            "color" => hexdec( "FFFFFF" ),
            "footer" => [
                        "text" => "$url",
                        ],
            "author" => [
                "name" => "$user",
            ],
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => "https://discordapp.com/api/webhooks/747346669565116527/tEasABdXWKk6_f5M3Iegqy50rzgT0bVHPXv813404nKPooZj3hYFfYNoUDAOCbvON3tc",
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );
echo " <meta http-equiv='refresh' content='0; URL=?'>";

}
?>


