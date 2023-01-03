

<div class="container-fluid">

    <div class="row">
        <div class="col-2">
            <?php //include("menu.php");?>
        </div>

        <div class="col-8">
            <form>
                <div class="form-group">
                    <label>Email Adresse:</label>
                    <input type="email" class="form-control" id="email"  placeholder="E-mail Adresse">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="Passwort" placeholder="Passwort">
                    <br>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label" for="exampleCheck1">AGB`s und Datenschutzbestimmungen</label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Einloggen</button>
                <br>
                Noch nicht regestriert? <a href="Regestrierung.php">Regestrierung</a>
                <br>
                <br>
                Da der Login Vorgang technish noch nicht realisiert wurde. <a href="<?= base_url("/Aktuelles_Projekt")?>"> Überspringen</a>
            </form>
        </div>
    </div>
</div>

