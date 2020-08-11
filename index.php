<?php

require_once('include.php');
if (empty($_GET)) {
    header('Location: index.php?controller=default&action=home');
}
if ($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
    $myPage = new DefaultController();
    $myPage->home();
}
else if($_GET['controller'] === 'contact' && $_GET['action'] === 'addForm'){
    $contactController = new ContactController();
    $contactController->addForm();
}
else if($_GET['controller'] === 'contact' && $_GET['action'] === 'addContact'){
    $contactController = new ContactController();
    $contactController->InsertOnSubmit();
}
else if($_GET['controller'] === 'contact' && $_GET['action'] === 'delete' && isset($_GET['id'])){
    $contactController = new ContactController();
    $contactController->delete($_GET['id']);
}
else if($_GET['controller'] === 'contact' && $_GET['action'] === 'displayOne' && isset($_GET['id'])){
    $contactController = new ContactController();
    $contactController->getThisById($_GET['id']);
}
else if($_GET['controller'] === 'contact' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
    $contactController = new ContactController();
    $contactController->updateForm($_GET['id']);
}
else if($_GET['controller'] === 'contact' && $_GET['action'] === 'updateContact' && isset($_GET['id'])){
    $contactController = new ContactController();
    $contactController->updateContact($_GET['id']);
}
else if($_GET['controller'] === 'default' && $_GET['action'] === 'orderBy'){
    $defaultController = new DefaultController();
    $defaultController->orderByNameAsc();
}
else if($_GET['controller'] === 'default' && $_GET['action'] === 'orderByDesc'){
    $defaultController = new DefaultController();
    $defaultController->orderByNameDesc();
}
else{
    throw new Exception('la page demandée n\'existe pas', 404);
    }

// $test = new Meuble('armoire','pin',210);

// echo '<pre>';
// var_dump($test);
// echo '</pre>';

// // Meuble::maFonctionStatique();

// // $test::maFonctionStatique();

// $test->acheter($tarik);

?>