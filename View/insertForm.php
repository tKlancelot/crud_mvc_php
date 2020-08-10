<?php
    include ('stylesheet.html');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insertForm</title>
</head>
<body>

    <div class="d-flex justify-content-center">
        <div class="col-9 border rounded mt-5">
        <a href="index.php?controller=default&&action=home">
            <button type='submit' class="btn btn-secondary mt-2 mb-2">retour</button>
        </a>
        <h4 class="text-uppercase text-success   border rounded p-1 font-italic">ajouter un contact</h4>
        <form class="form" method="post" action="index.php?controller=contact&action=addContact">
            <div class="form-group">
                <label for="name">nom</label>
                <input class='form-control' type="text" name="name" id="name" placeholder="nom du contact" required>
            </div>
            <div class="form-group">
                <label for="tel">téléphone</label>
                <input class="form-control" type="tel" name="tel" id="tel" placeholder="telephone">
            </div>
            <div class="form-group">
                <label for="mail">e-mail</label>
                <input class='form-control' type="mail" name="mail" id="mail" placeholder="jean.rachid@gmail.com">
            </div>
            <div class="form-group">
                <input class='btn btn-primary' type="submit" value="ajouter">
            </div>
        </form>
    </div>
</div>
</body>
</html>
