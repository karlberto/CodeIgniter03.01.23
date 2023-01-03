<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>aufgaben</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <script src="https://kit.fontawesome.com/4ed5d1a9c1.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <?php
    include 'header.php';
    show_header('Aufgaben');
    ?>
    <div class="row">
        <div class="col-2">
            <?php include("menu.php"); ?>
        </div>
        <div class="col-8">
                <div class="card">
                    <table class="table ">
                        <thead class="bg-light">
                        <tr>
                            <th scope="col">Aufgabenbezeichnung:</th>
                            <th scope="col">Beschreibung der Aufgabe:</th>
                            <th scope="col">Reiter:</th>
                            <th scope="col">Zuständig</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        include("table_aufgaben.php");
                        include("table_icons.php");
                        foreach(get_tab_aufgabe() as $data){
                            echo"<tr><td class=\"w-25\">". $data['Bezeichnung']."</td>";
                            echo "<td>" . $data['Beschreibung'] . " </td>";
                            echo "<td>" . $data['Reiter'] . " </td>";
                            echo "<td>" . $data['Mitarbeiter'] . " </td>";
                            echo show_icons() . "</tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>


            <br>
            <br>
            <div class="form-group">
                <h5>Bearbeiten/Erstellen</h5>
                Aufgabenbezeichnung:
                <textarea class="form-control" rows="1" placeholder="Aufgabe" >  </textarea>
                <br>
                Beschreibung der Aufgabe:
                <textarea class="form-control" rows="3" placeholder="Beschreibung" >   </textarea>
                <br>
                Erstellungsdatum:
                <textarea class="form-control" rows="1" placeholder="01.01.19" > </textarea>
                <br>
                fällig bis:
                <textarea class="form-control" rows="1" placeholder="19.09.19" > </textarea>
                <br>
                <label>Zugehöriger Reiter:</label>
                <select class="form-control" >
                    <option>ToDo</option>
                    <option>Uni</option>
                    <option>Schule</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <br>
                <label>Zuständig:</label>
                <select class="form-control" >
                    <option>Kahlenborn</option>
                    <option>Lamberty</option>
                    <option>Kropp</option>
                    <option>Ziegler</option>
                    <option>Strauß</option>
                </select>
                <br>

                <button class="btn btn-primary">Speichern</button>
                <button class="btn btn-info">Reset</button>

            </div>
        </div>
    </div>
</div>



</body>

