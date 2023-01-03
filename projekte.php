<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>projekte</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet"/>
</head>
<body>

<div class="container-fluid">
    <?php
    include 'header.php';
    show_header('Projekte');
    ?>
    <div class="row">
        <div class="col-xl-2">
            <?php include("menu.php") ?>
        </div>

        <div class="col-xl-8">
            <div class="mb-3">
                <div class="form-group">
                    <h4> Projekt auswählen</h4>
                    <select  class="form-select" id="choose-project" placeholder="Bitte Auswählen">
                        <option selected> </option>
                    </select>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit">
                            auswählen
                        </button>
                        <button class="btn btn-primary" type="submit">
                            bearbeiten
                        </button>
                        <button class="btn btn-danger" type="submit">
                            löschen
                        </button>
                        <div class="form-group">
                            <br>
                            <label><h4> Projekt bearbeiten/erstellen</h4></label>
                            <br>
                            Projektname:
                            <textarea class="form-control" id="Projektname" rows="1" placeholder="Projekt"></textarea>
                        </div>
                        <div class="form-group">
                            <label aria-label="Beschreibung"> Projektbeschreibung:</label>
                            <textarea class="form-control"  rows="3" placeholder="Beschreibung"></textarea>
                            <br>
                            <button class="btn btn-primary">Speichern</button>
                            <button class="btn btn-info">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

<?php
