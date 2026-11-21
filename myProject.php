<?php
    include './header.php';
    require_once './include/bdd.php';
    require_once './functions.php';
    $id = $_GET['id'];

    printProject($bdd, $id);

    include './footer.php';
?>