<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="<?= CSS_URL . "style.css" ?>">
<meta charset="UTF-8" />
<title>Artikel</title>

<h1>Artikel <?= $toy["artikel_ime"] ?></h1>

<div>
    
    <p>Ime: <?= $toy["artikel_ime"] ?></p>
    <p>Cena: <?= $toy["artikel_cena"] ?> EUR</p>
    <p>Opis: <?= $toy["artikel_opis"] ?></p>
    <!--tle dodaj še povezavo na slike izdelka -->
</div>

<?php // else ($uporabnik == "prodajalec") : ?>
    
    <a href="<?= BASE_URL . "toy/edit?id=" . $toy["artikel_id"] ?>"> <button>Uredi artikel </button></a>
    <a href="<?= BASE_URL . "toy/delete?id=" . $toy["artikel_id"] ?>"> <button> Izbriši artikel </button></a> <br>
    
<?php //endif; ?>
    
    
<br><a href="<?= BASE_URL . "" ?>"> Vrni se na prvo stran </a>