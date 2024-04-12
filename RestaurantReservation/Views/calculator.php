<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Réservez votre table chez Aux saveurs de chez Thom">
    <link rel="stylesheet" href="../Style/index.css">
    <title>calculator - Aux 1000 saveurs</title>
</head>
<body>
<?php
include "../Includes/header.php";
?>
<main id="main">
    <h1>caculatrice</h1>
    <form action="calculatorResult.php" method="get">
        <label for="number1">introsuissez le premier numéros</label>
        <input type="number" id="number1" name="number1" >
        <select id="operation" name="operation">
            <option value="addition">addition + </option>
            <option value="soustraction">soustraction - </option>
            <option value="multiplication">multiplication * </option>
            <option value="division">division / </option>
        </select>
        <label for="number2"></label>
        <input type="number" id="number2" name="number2" >
        <input type="submit" >

    </form>
</main>
<?php
include "../Includes/footer.php";
?>

