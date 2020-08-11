<?php
    include ('stylesheet.html');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
<div id='test' class="d-flex justify-content-center">
<div class="cadre col-9 bg-light p-2">
    <div class="d-flex justify-content-around bg-light border rounded">
        <a class='pl-2' href="../tp_open/index.php?controller=default&action=home">
            <button style="border-radius:50%;width:50px;height:50px;font-size:1.4rem;" type='submit' class="btn btn-success  mt-2 mb-2 text-uppercase"><i class="far fa-address-book"></i></button>
        </a>
    <a class='pl-2' href="../tp_open/index.php?controller=contact&&action=addForm">
    <button style="border-radius:50%;width:50px;height:50px;font-size:1.4rem;" type='submit' class="btn btn-primary  mt-2 mb-2 text-uppercase">
        <i class="far fa-plus-square"></i>
    </button>
    </a>
        <a class='pl-2' href="#">
    <button style="border-radius:50%;width:50px;height:50px;font-size:1.4rem;" type='submit' class="btn btn-secondary  mt-2 mb-2 text-uppercase"><i class="fas fa-info-circle"></i></button>
    </a>

        <a class='pl-2' href="#">
    <button style="border-radius:50%;width:50px;height:50px;font-size:1.4rem;background-color:<?=$color?>;color:white;padding-top:0.6rem;" type='submit' class="btn mt-2 mb-2 text-uppercase">
        <?php
        echo $data;
        ?>
    </button>
    </a>

    </div>
    <h4 class="text-uppercase border border-primary border-left-0 border-top-0 border-right-0 bg-light"><i class="fas fa-smile-wink"></i>&emsp;ma liste de contacts&emsp;<i class="far fa-smile-wink"></i></h4>
<!--    font-italic-->
    <?php
    include ('Parts/listContacts.php');
    ?>
</div>


</div>
</body>
</html>
