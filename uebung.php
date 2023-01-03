<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo-Liste</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" />

</head>
<body>
<?php
include 'header.php';
show_header(' ToDo (Aktuelles Projekt)');
?>
<div class="container-fluid" style="margin-top: 20px">
    <div class="row">
        <div class="col-2">
            <?php include("menu.php"); ?>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">ToDo:</div>
                        <ul class="list-group">
                            <li class="list-group-item">Vorlesung besuchen</li>
                            <li class="list-group-item">Essen kochen</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">Erledigt:</div>
                        <ul class="list-group">
                            <li class="list-group-item">Einkaufen gehen</li>
                            <li class="list-group-item">Webentwicklung Übung</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">Verschoben:</div>
                        <ul class="list-group">
                            <!-- nichts verschoben -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>