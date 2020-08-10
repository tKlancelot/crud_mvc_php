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
<div class="d-flex justify-content-center">

<div class="col-9 border border-info mt-5">
    <div class="d-flex justify-content-around border rounded mt-2 mb-2">
    <a class='pl-2' href="../tp_open/index.php?controller=contact&&action=addForm">
    <button style="border-radius:50%;width:50px;height:50px;font-size:1.4rem;" type='submit' class="btn btn-primary  mt-2 mb-2 text-uppercase"><i class="far fa-plus-square"></i></button>
    </a>
        <a class='pl-2' href="#">
    <button style="border-radius:50%;width:50px;height:50px;font-size:1.4rem;" type='submit' class="btn btn-secondary  mt-2 mb-2 text-uppercase"><i class="fas fa-info-circle"></i></button>
    </a>
        <a class='pl-2' href="#">
    <button style="border-radius:50%;width:50px;height:50px;font-size:1.4rem;" type='submit' class="btn btn-danger  mt-2 mb-2 text-uppercase">
        <?php
        echo $data->count();
        ?>
    </button>
    </a>

    </div>
    <h4 class="text-uppercase text-secondary border rounded p-1">ma liste de contacts</h4>
<!--    font-italic-->
    <div>
        <table class="table border rounded">
        <thead class="text-uppercase">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>tel</th>
                <th>mail</th>
                <th colspan="3">options</th>
            </tr>
        </thead>
        <tbody>
            <tr><?php foreach ($contacts as $contact){?>
                <td><?=$contact->getId();?></td>
                <td><?=$contact->getName();?></td>
                <td><?=$contact->getTel();?></td>
                <td><?=$contact->getMail();?></td>
                <td class="lead"><a href="../tp_open/index.php?controller=contact&action=delete&id=<?php echo $contact->getId()?>"><i class="fas fa-trash"></i></a></td>
                <td class="lead"><a href="../tp_open/index.php?controller=contact&action=updateForm&id=<?php echo $contact->getId()?>"><i class="far fa-edit"></i></a></td>
                <td class="lead"><a title="voir les details" href="../tp_open/index.php?controller=contact&action=displayOne&id=<?php echo $contact->getId()?>"><i class="fas fa-info-circle"></i></a></td>
            </tr>
                <?php
            }?>

        </tbody>
        </table>
    </div>
</div>


</div>
</body>
</html>
