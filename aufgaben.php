<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aufgaben</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <script src="https://kit.fontawesome.com/4ed5d1a9c1.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="container-fluid">
        <?php
        include("header.php");
        ?>
        <div class="row">
            <?php include("menu.php"); ?>
            <div class="col-8">
                <table class="table">
                    <thead class="table-light">
                    <tr>
                        <th scope="col">Aufgabenbezeichnung:</th>
                        <th scope="col">Beschreibung der Aufgabe:</th>
                        <th scope="col">Reiter:</th>
                        <th scope="col">Zuständig:</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>HTML Datei erstellen</td>
                        <td>HTML Datei erstellen</td>
                        <td>ToDo</td>
                        <td>Max Mustermann</td>
                        <?php include ("table_icons.php");
                        show_icons()?>

                    </tr>
                    <tr>
                        <td>CSS Datei erstellen</td>
                        <td>CSS Datei erstellen</td>
                        <td>ToDo</td>
                        <td>Max Mustermann</td>
                        <?php include ("table_icons.php");
                        show_icons()?>
                    </tr>
                    <tr>
                        <td>PC eingeschaltet</td>
                        <td>PC einschalten</td>
                        <td>Erledigt</td>
                        <td>Petra Müller</td>
                        <?php include ("table_icons.php");
                        show_icons()?>
                    </tr>
                    <tr>
                        <td>Kaffee trinken</td>
                        <td>Kaffee trinken</td>
                        <td>Erledigt</td>
                        <td>Petra Müller</td>
                        <?php include ("table_icons.php");
                        show_icons()?>
                    </tr>
                    <tr>
                        <td>Für die Uni lernen</td>
                        <td>Für die Uni lernen</td>
                        <td>Verschoben</td>
                        <td>Max Mustermann</td>
                        <?php include ("table_icons.php");
                        show_icons()?>
                    </tr>
                    </tbody>
                </table>
                <div class="p-4"></div>
                <h4>Bearbeiten/Erstellen</h4>
                <div class="form-group">
                    <label for="aufgaben_name">Aufgabenbezeichnung:</label>
                    <input class="form-control" id="aufgaben_name" type="text" placeholder="Aufgabe">
                </div>
                <div class="p-2"></div>
                <div class="form-group">
                    <label for="aufgaben_beschreibung">Beschreibung der Aufgabe:</label>
                    <textarea class="form-control" id="aufgaben_beschreibung" rows="3" placeholder="Beschreibung"></textarea>
                </div>
                <div class="p-2"></div>
                <div class="form-group">
                    <label for="erstelldatum">Erstellungsdatum:</label>
                    <input class="form-control" id="erstelldatum" type="text" placeholder="01.01.19">
                </div>
                <div class="p-2"></div>
                <div class="form-group">
                    <label for="fällig">fällig bis:</label>
                    <input class="form-control" id="fällig" type="text" placeholder="01.01.19">
                </div>
                <div class="p-2"></div>
                <div><label for="auswahl_reiter">Zugehöriger Reiter:</label></div>
                <select class="form-control" id="auswahl_reiter">
                    <option>ToDo</option>
                    <option>Erledigt</option>
                    <option>Verschoben</option>
                </select>
                <div class="p-2"></div>
                <div><label for="zuständigkeit">Zuständig:</label></div>
                <select class="form-control" id="zuständigkeit">
                    <option>Max Mustermann</option>
                    <option>Petra Müller</option>
                </select>
                <?php include ("speichern_reset.php"); ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
