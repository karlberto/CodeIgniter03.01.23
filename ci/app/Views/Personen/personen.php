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