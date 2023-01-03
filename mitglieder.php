<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mitglieder</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <script src="https://kit.fontawesome.com/4ed5d1a9c1.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <?php
    include 'header.php';
    show_header('Mitglieder');
    ?>
    <div class="row">
        <div class="col-2">
            <?php include("menu.php"); ?>
        </div>
        <div class="col-8">
            <table class="table mb">
                <thead class="bg-light">
                <tr>
                    <th scope="col">ID:</th>
                    <th scope="col">Name:</th>
                    <th scope="col">E-mail:</th>
                    <th scope="col">In Projekt:</th>
                    <th scope="col"></th>

                </tr>
                </thead>
                <tbody>
                <?php
                include("table_mitglieder.php");
                include("table_icons.php");
                $ausgabe = '';
                foreach(get_tab_mitglieder() as $data) {
                    $ausgabe.= "<tr><td class=\"w-25\">" . $data['id'] . "</td>";
                    $ausgabe.= "<td>" . $data['username'] . " </td>";
                    $ausgabe.= "<td>" . $data['email'] . " </td>";
                    $ausgabe.= "<td>" . $data['projektID'] . " </td>";
                    $ausgabe .= show_icons();
                    $ausgabe.= '</tr>';
                }
                echo $ausgabe;
                ?>
                </tbody>
            </table>
            <br>
            <br>
            <br>
            <div class="form-group form-check">

                <h5>Bearbeiten/Erstellen</h5>
                Username:
                <textarea class="form-control" rows="1" placeholder="username" >  </textarea>
                <br>
                Email-Adresse:
                <textarea class="form-control" rows="1" placeholder="Email" >  </textarea>
                <br>
                Passwort:
                <textarea class="form-control" rows="1"> </textarea>
                <br>
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Dem projekt zugeordnet</label>
                <br>
                <br>
                <button class="btn btn-primary">Speichern</button>
                <button class="btn btn-info">Reset</button>

            </div>
        </div>
    </div>
</div>



</body>


