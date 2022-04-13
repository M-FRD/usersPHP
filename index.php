<?php include_once 'data.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Générateur aléatoire</title>
</head>
<body>
    
<div class="card">
    <div class="color-top" style="background:<?= $color ?>;">
    </div>
    <div class="head">
        <div class="head-image" style="background : url('<?= $picture ?>');background-position: center; background-size: cover;background-repeat: no-repeat;">
            
        </div>
    </div>
    <div class="informations">
        <p>
            Nom : <?= $name ?>
        </p>
        <p>
            Prénom(s) : <?= $firstname ?>
        </p>
        <p>
            Sexe : <?= $gender ?>
        </p>
        <p>
            Nationalité : <?= $nat?>
        </p>
        <p>
            Né(e) le : <?= $birth?>
        </p>
        <p>
            Age : <?= $age?>
        </p>
        <p>
            Email : <?= $email?>
        </p>
        <p>
            Vit à : <?= $location?>
        </p>
        <p>
            Tel : <?= $cell?>
        </p>
    </div>

</div>
<button class="recharge" style="background-color: <?= $color?>;">RECHARGER</button>
<script>document.querySelector('.recharge').addEventListener('click',()=>{location.reload()})</script>
</body>
</html>