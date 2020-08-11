
<div class="bg-white">
    <table class="table border rounded">
    <thead class="text-uppercase text-light">
        <tr>
            <th>id</th>
            <th>
                <span>name&emsp;</span>
                &emsp;<a class='tri' href="../tp_open/index.php?controller=default&action=orderBy"><i class="fas fa-caret-down"></i></a>
                &emsp;<a class='tri' href="../tp_open/index.php?controller=default&action=orderByDesc"><i class="fas fa-caret-up"></i></a>
            </th>
            <th>tel</th>
            <th>mail</th>
            <th>picture</th>
            <th class="text-center" colspan="3">options</th>
        </tr>
    </thead>
    <tbody>
        <tr><?php foreach ($contacts as $contact){?>
            <td><?=$contact->getId();?></td>
            <td><?=$contact->getName();?></td>
            <td><?=$contact->getTel();?></td>
            <td><?=$contact->getMail();?></td>
            <td width="10%"><img width=50% height=40px src="assets/<?=$contact->getPicture();?>"</td>
            <td class=""><a href="../tp_open/index.php?controller=contact&action=delete&id=<?php echo $contact->getId()?>"><i class="fas fa-trash"></i></a></td>
            <td class=""><a href="../tp_open/index.php?controller=contact&action=updateForm&id=<?php echo $contact->getId()?>"><i class="far fa-edit"></i></a></td>
            <td class=""><a title="voir les details" href="../tp_open/index.php?controller=contact&action=displayOne&id=<?php echo $contact->getId()?>"><i class="fas fa-info-circle"></i></a></td>
        </tr>
            <?php
        }?>

    </tbody>
    </table>
</div>