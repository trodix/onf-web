<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script>let base_url = '<?= base_url() ?>';</script>

    <link rel="stylesheet" type='text/css' href='<?= base_url() . "assets/css/bootstrap.css"?>'>
    <link rel="stylesheet" type='text/css' href='<?= base_url() . "assets/css/fontawesome-all.min.css"?>'>
    <link rel="stylesheet" type='text/css' href='<?= base_url() . "assets/css/style.css"?>'>

    <script type="text/javascript" src='<?= base_url() . "assets/js/lib/jquery.min.js"?>'></script>
    <script type="text/javascript" src='<?= base_url() . "assets/js/lib/bootstrap.min.js"?>'></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.14/angular.js"></script> -->
    <script type="text/javascript" src='<?= base_url() . "assets/js/lib/angular.js"?>'></script>
    <script type="text/javascript" src='<?= base_url() . "assets/js/lib/Chart.min.js"?>'></script>

    <script type="text/javascript" src='<?= base_url() . "assets/js/arbres.js"?>'></script>
    <script type="text/javascript" src='<?= base_url() . "assets/js/observation.js"?>'></script>
    <script type="text/javascript" src='<?= base_url() . "assets/js/chart-genres.js"?>'></script>
    <script type="text/javascript" src='<?= base_url() . "assets/js/chart-especes.js"?>'></script>
    <script type="text/javascript" src='<?= base_url() . "assets/js/chart-communes.js"?>'></script>
    <script type="text/javascript" src='<?= base_url() . "assets/js/chart-interventions.js"?>'></script>

    <title>Bubuche Statistiques</title>
</head>
<body>
    <header>
        <div class="btn btn-success">
            <h1>Bubûche Statistiques</h1>
        </div>
        <nav class="navbar ">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href='<?= base_url() ?>' class="nav-link accueil"><i class="fa fa-home"></i> Accueil</a>
                </li>
            </ul>
        </nav>
        
    </header>
    
    <div class="container-fluid">
        <div class="">
            <!-- ancienne navbar + col-9 -->
                <?= $output ?>

        </div>
    </div>   

    <footer>
    </footer> 

</body>
</html>
