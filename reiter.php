<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>reiter</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <script src="https://kit.fontawesome.com/4ed5d1a9c1.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container-fluid">
        <?php
        include 'header.php';
        show_header('Reiter');
        ?>
        <div class="row">
            <div class="col-2">
                <?php include("menu.php"); ?>
            </div>

            <div class="col-8">
                <table class="table mb">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Beschreibung</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">ToDo</th>
                            <td> Dinge die erledigt werden müssen</td>
                            <td> <?php include("table_icons.php");
                            show_icons();
                            ?></td>
                        </tr>
                        <tr>
                            <th scope="row">ToDo</th>
                            <td> Dinge die erledigt werden müssen</td>
                            <td> <?php include("table_icons.php");
                            show_icons();
                            ?></td>
                        </tr>
                        <tr>
                            <th scope="row">ToDo</th>
                            <td> Dinge die erledigt werden müssen</td>
                            <td>
                                <?php
                                    show_icons();
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <h4>Bearbeiten/Erstellen</h4>
                    Bezeichnung des Reiters:
                    <br>
                    <textarea class="form-control" rows="1" placeholder="Reiter"></textarea>
                    <br>
                    Beschreibung:
                    <textarea class="form-control" rows="3">  Beschreibung </textarea>
                    <br>
                    <button class="btn btn-primary">Speichern</button>
                    <button class="btn btn-info">Reset</button>

                </div>
            </div>
        </div>
    </div>



</body>

<?php
