<div class="row">    
    <div class="col-3 no-padding">
        <nav class="navbar vertical-menu navbar-fixed-side">
            <!-- <a class="accueil" href="/">Accueil</a> -->
            <h5>Recherche par Filtre :</h5>
            <div class="listeCheckBox">
                <div class="filtre">
                    <label for="cbGenre">Genre</label>
                    <input id="cbGenre" type="checkbox" name="" placeholder="Genre"/>
                </div>

                <div class="filtre">
                    <label for="cbEspece">Espece</label>
                    <input id="cbEspece" type="checkbox" name="" placeholder="Espece"/>
                </div>

                <div class="filtre">
                    <label for="cbCommune">Commune</label>
                    <input id="cbCommune" type="checkbox" name="" placeholder="Commune"/>
                </div>
            </div>
        </nav>
    </div>

<div class="col-9">
    <h1>Liste des arbres</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher par mot clé">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
    </div></br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped" ng-app>
                        <thead class="">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Libélle Français</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Espece</th>
                                <th scope="col">Commune</th>
                                <th scope="col">#</th>
                            </tr>  
                        </thead>
                        <tbody class="tbody-scroll-500">
                            <?php

                                foreach ($lesArbres as $unArbre) {
                                    echo("<tr><td scope='col'>".$unArbre->idArbre."</td>");
                                    echo("<td scope='col'>".$unArbre->libelleFrancais."</td>");
                                    echo("<td scope='col'>".$unArbre->libelleGenre."</td>");
                                    echo("<td scope='col'>".$unArbre->libelleEspece."</td>");
                                    echo("<td scope='col' >".$unArbre->commune."</td>");
                                    echo("<td scope='col'><a href='/liste/detail/".$unArbre->idArbre."'>Voir</a></td></tr>");
                                }

                            ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <canvas id="myChart"></canvas>
        </div>
        <div class="col-sm-4">
            <canvas id="myChart2"></canvas>
        </div>
        <div class="col-sm-4">
            <canvas id="myChart3"></canvas>
        </div>
    </div>

 </div>

</div> <!-- <div class='row'> principale -->
