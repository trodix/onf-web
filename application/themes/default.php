<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <script type="text/javascript" src="<?= '/assets/js/jquery.min.js' ?>"></script>
    <script type="text/javascript" src="<?= '/assets/js/bootstrap.min.js' ?>"></script>
    <script type="text/javascript" src="/assets/js/angular.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

    <script type="text/javascript" src="/assets/js/observation.js"></script>
    <script type="text/javascript" src="/assets/js/mychart.js"></script>

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
                    <a href="/" class="nav-link accueil"><i class="fa fa-home"></i>Accueil</a>
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

    <script>
        // $("input[type=checkbox]").click(function(){
        //     let elementId = $(this).attr('id');
        //     switch (elementId) {
        //         case 'cbGenre':
        //             createChartCities(document.getElementById('myChart').getContext('2d'));
        //             break;
        //         case 'cbEspece':
        //             createChartCities(document.getElementById('myChart').getContext('2d'));
        //             break;
        //         case 'cbCommune':
        //             createChartCities(document.getElementById('myChart').getContext('2d'));
        //             break;
            
        //         default:
        //             console.log('default');
        //             break;
        //     }
        // });
        //createChartCities(document.getElementById('myChart').getContext('2d'));

        $scope.arbre = [
        {
            "idArbre" : <?= $lesArbres->idArbre();?>,
            "genre" : <?= $lesArbres->libellefrancais();?>,
            "espece ": ""
        }];
        
    </script>
</body>
</html>
