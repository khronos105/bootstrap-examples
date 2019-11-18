<?php
    // Default view
    $q = 'structure/aligns';

    if(isset($_GET['q'])){
        if(file_exists('views/' . $_GET['q'] . '.php')){
            $q = $_GET['q'];
        }
    }
?>

<?php require 'includes/helpers.php'; ?>

<?php require 'includes/header.php'; ?>

<?php require 'includes/nav.php'; ?>

<?php require 'views/' . $q . '.php'; ?>

<?php require 'includes/footer.php'; ?>
