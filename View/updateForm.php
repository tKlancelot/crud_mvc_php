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
    <title>updateForm</title>
</head>
<body>
<div class="d-flex justify-content-center">

<div class="col-9 border rounded mt-5">
    <a href="../tp_open/index.php?controller=default&action=home">
        <button class="btn btn-secondary p-1 mt-2 mb-2 text-uppercase">retour</button>
    </a>
    <h4 class="text-uppercase text-secondary border rounded p-1">modifier le contact <?php echo $contact->getName();?></h4>

    <form method="post" action="index.php?controller=contact&action=updateContact&id=<?php echo $contact->getId()?>">
        <div class="form-group">
        <label for="name">name</label>
        <input name="name" id="name" value="<?php echo $contact->getName()?>" class="form-control">
        </div>

        <div class="form-group">
        <label for="tel">tel</label>
        <input name="tel" id="tel" value="<?php echo $contact->getTel()?>" class="form-control">
        </div>

        <div class="form-group">
        <label for="mail">mail</label>
        <input type="mail" name="mail" id="mail" value="<?php echo $contact->getMail()?>" class="form-control"/>
        </div>

        <div class="form-group">
        <input class="btn btn-success" type="submit" value="valider">
        </div>
    </form>
</div>
</div>
</body>
</html>