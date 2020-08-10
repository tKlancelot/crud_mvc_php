<?php

include('stylesheet.html');

?>
<div class="d-flex justify-content-center">


<div class="card m-5" style="width: 28rem;">
    <img class="card-img-top" src="assets/<?=$contact->getPicture()?>" alt="<?= $contact->getPicture()?>">
    <div class="card-header text-uppercase">
        détails de <?=$contact->getName();?>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fas fa-id-badge"></i>&emsp;<?= $contact->getName();?></li>
            <li class="list-group-item"><i class="fas fa-phone-square-alt"></i>&emsp;<?= $contact->getTel();?></li>
            <li class="list-group-item"><i class="fas fa-at"></i>&emsp;<?= $contact->getMail();?></li>
        </ul>
    </div>
    <div class="card-footer text-center">
        <a href="index.php?controller=default&&action=home">
            <button type='submit' class="btn btn-secondary mt-2 mb-2">retour</button>
        </a>
    </div>
</div>
</div>