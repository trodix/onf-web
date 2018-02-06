<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Bubuche Statistiques</title>
</head>
<body>
    <header>
        <div class="btn btn-success">
            <h1>Bubûche Statistiques</h1>
        </div>

    </header>
    <div class="vertical-menu">
        <a href="#">Accueil</a>
        <h5>Recherche par Filtre :</h5>
        <div class="listeCheckBox">

            <div class="filtre">
                <label for="cbEspece">Espece</label>
                <input id="cbEspece" type="checkbox" name="" placeholder="Espece"/>
            </div>

            <div class="filtre">
                <label for="cbEspece">Espece</label>
                <input id="cbEspece" type="checkbox" name="" placeholder="Espece"/>
            </div class="filtre">

            <div class="filtre">
                <label for="cbEspece">Espece</label>
                <input id="cbEspece" type="checkbox" name="" placeholder="Espece"/>
            </div>
        </div>


         </div>
    <div class="container">
        <?= $output ?>
    </div>

    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

    <script type="text/javascript" src="assets/js/mychart.js"></script>

    <script>
        createChartCities(document.getElementById('myChart').getContext('2d'));
        createChartCities(document.getElementById('myChart2').getContext('2d'));
        createChartCities(document.getElementById('myChart3').getContext('2d'));
    </script>
</body>
</html>