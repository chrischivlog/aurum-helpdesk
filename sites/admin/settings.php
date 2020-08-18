 
            <!-- Name des Desks ändern -->

            <form action="" method="post">
                <b style="float: left;">Name des Helpdesk's:</b>
                <input type="text" name="name" value="<?php echo $site_name; ?>" required=""></input>
                <br>
                <button name="submit" class="tag-back" type="submit">
                    Absenden
                </button>
            </form>

            <!-- Mail adresse der Bestätigungs-Mail -->

            <form action="" method="post">
                <b style="float: left;">Noreply Mail des Helpdesk:</b>
                <input type="Mail" name="mail" value="<?php echo $mail_adress; ?>" required=""></input>
                <br>
                <button name="submit" class="tag-back" type="submit">
                    Absenden
                </button>
            </form>

            <!-- Datenschutz -->

            <form action="" method="post">
                <b style="float: left;">URL zum Datenschutz:</b>
                <input type="text" name="datenschutz" value="<?php echo $datenschutz; ?>" required=""></input>
                <br>
                <button name="submit" class="tag-back" type="submit">
                    Absenden
                </button>
            </form>

            
            <!-- Impressum -->

            <form action="" method="post">
                <b style="float: left;">URL zum Impressum:</b>
                <input type="text" name="impressum" value="<?php echo $impressum; ?>" required=""></input>
                <br>
                <button name="submit" class="tag-back" type="submit">
                    Absenden
                </button>
            </form>
