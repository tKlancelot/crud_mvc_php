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
            <h4 class="text-uppercase text-secondary border rounded p-1">ajouter un contact</h4>
        <form class="form" method="post" action="index.php?controller=contact&action=addContact">
            <div class="form-group">
                <label for="name"><i class="fas fa-id-badge"></i>&emsp;nom</label>
                <input class='form-control' type="text" name="name" id="name" placeholder="nom du contact" required>
            </div>
            <div class="form-group">
                <label for="tel"><i class="fas fa-phone-square-alt"></i>&emsp;téléphone</label>
                <input class="form-control" type="tel" name="tel" id="tel" minlength="8" maxlength="10" placeholder="telephone" pattern="[0-9]{10}" value="<?php
                $a = mt_rand(00000000 ,99999999);
                echo "06$a";
            ?>">
            </div>
            <div class="form-group">
                <label for="mail"><i class="fas fa-at"></i>&emsp;e-mail</label>
                <input class='form-control' type="email" name="mail" id="mail" placeholder="jean.rachid@gmail.com">
            </div>
            <div class="form-group">
                <label for="picture"><i class="far fa-image"></i>&emsp;photo</label>
                <input class='form-control p-1' type="file" name="picture" id="picture">
            </div>
            <div class="form-group">
                <input class='btn btn-primary' type="submit" value="ajouter">
            </div>
        </form>
    </div>
</div>
</body>
</html>
