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

<div class="cadre col-9 bg-light">
    <a href="../tp_open/index.php?controller=default&action=home">
        <button class="btn btn-secondary p-1 mt-2 mb-2 text-uppercase">retour</button>
    </a>
    <h4 class="text-uppercase border rounded">modifier le contact <?php echo $contact->getName();?></h4>

    <form method="post" action="index.php?controller=contact&action=updateContact&id=<?php echo $contact->getId()?>">
        <div class="form-group">
        <label for="name"><i class="fas fa-id-badge"></i>&emsp;name</label>
        <input name="name" id="name" value="<?php echo $contact->getName()?>" class="form-control">
        </div>

        <div class="form-group">
        <label for="tel"><i class="fas fa-phone-square-alt"></i>&emsp;tel</label>
        <input name="tel" id="tel" value="<?php echo $contact->getTel()?>" class="form-control">
        </div>

        <div class="form-group">
        <label for="mail"><i class="fas fa-at"></i>&emsp;mail</label>
        <input type="mail" name="mail" id="mail" value="<?php echo $contact->getMail()?>" class="form-control"/>
        </div>

        <div class="form-group">
        <label for="picture"><i class="far fa-image"></i>&emsp;photo</label>
            <input class='form-control mb-2' type="text" readonly value="<?php echo $contact->getPicture()?>"/>
        <input type="file" name="picture" id="picture" class="form-control p-1"/>
        </div>

        <div class="form-group">
        <input class="btn btn-success" type="submit" value="valider">
        </div>
    </form>
    <?php
    if (isset($errors)){
    ?>
    <div class="text-danger">
        <h4 class="text-uppercase border rounded p-1 small">liste des erreurs</h4>
        <ul>
            <?php
            foreach ($errors as $error){
                echo '<li><div class="alert alert-warning" role="alert">'.$error.'</alert></div></li>';
            }
            }
            ?>
        </ul>
    </div>
</div>
</div>
</body>
</html>