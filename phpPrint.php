<?php

/*
Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, CSS, VueJS, axios, PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere
*/

include __DIR__ . "/db/db.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Php Dischi Fabrizio Fornone</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="mx-3 py-2">
            <!-- Logo -->
            <img src="./img/logo-small.svg" alt="" />
        </div>
    </header>
    <main>
        <!-- Container -->
        <div class="container-custom my-4">
            <div class="d-flex flex-wrap text-center">
                <!-- Album -->
                <?php
                foreach ($db as $disc) {
                    $discImg = $disc['poster'];
                ?>
                    <div class="disc-box">

                        <div class='single-album py-2'>;

                            <img class="py-1" src="<?php echo $discImg ?> " alt="">
                            <div class="py-1 fs-4 fw-bold text-white"><?php echo $disc['title'] ?></div>
                            <div class="text-secondary"><?php echo $disc['author'] ?></div>
                            <div class="text-secondary"><?php echo $disc['year'] ?></div>

                        </div>;
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>



</body>

</html>