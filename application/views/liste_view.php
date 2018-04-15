<div class="row" ng-app="myApp">    
    <div class="col-sm-3 no-padding">
        <nav class="navbar flex-column vertical-menu">
            <!-- <a class="accueil" href="/">Accueil</a> -->
            <div class="" id="navbarSupportedContent">
                <h5 class="text-right">Visualisation par Filtre :</h5>
                <ul class="">
                    <li class="nav-item filtre nav-link">
                        <label for="cbGenre">Genre</label>
                        <input id="cbGenre" type="checkbox" name="" placeholder="Genre"/>
                    </li>

                    <li class="nav-item filtre nav-link">
                        <label for="cbEspece">Espece</label>
                        <input id="cbEspece" type="checkbox" name="" placeholder="Espece"/>
                    </li>

                    <li class="nav-item filtre nav-link">
                        <label for="cbCommune">Commune</label>
                        <input id="cbCommune" type="checkbox" name="" placeholder="Commune"/>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="col-sm-9" ng-controller="ArbresCtrl">
        <h1>Liste des arbres</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Rechercher par mot clé" ng-model="query">
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
                        <table class="table table-striped">
                            <thead class="">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Libelle Français</th>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Espece</th>
                                    <th scope="col">Commune</th>
                                    <th scope="col">#</th>
                                </tr>  
                            </thead>
                            <tbody class="tbody-scroll-500">
                                <tr ng-repeat="arbre in arbres | filter: query">
                                    <td scope='col'>{{arbre.idArbre}}</td>
                                    <td scope='col'>{{arbre.libelleFrancais}}</td>
                                    <td scope='col'>{{arbre.libelleGenre}}</td>
                                    <td scope='col'>{{arbre.libelleEspece}}</td>
                                    <td scope='col'>{{arbre.commune}}</td>
                                    <td scope='col'><a href='<?=base_url()."liste/detail/"?>{{arbre.idArbre}}'>Voir</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!--  container -->
    </div>
</div>

<hr class="mt-5">
<div class="container-fluid my-5">
    <h2>Visualisation des données</h2>
    <div class="row">
        <div class="col-12 col-md-4 card my-2">
            <canvas id="chartGenre"></canvas>
        </div>
        <div class="col-12 col-md-4 card my-2">
            <canvas id="chartEspece"></canvas>
        </div>
        <div class="col-12 col-md-4 card my-2">
            <canvas id="chartCommune"></canvas>
        </div>
    </div>
</div>
<script>

let filterBy = 'libelleFrancais';

$('.filtre :checkbox').change(function() {
 
    if (this.checked) {
        console.log('check #cbGenre');
        switch (this.id) {
            case 'cbGenre':
                filterBy = 'libelleGenre';
                $('#chartGenre').show();
                createChartGenre(document.getElementById('chartGenre').getContext('2d'));
                break;

            case 'cbEspece':
                filterBy = 'libelleEspece';
                $('#chartEspece').show();
                createChartEspece(document.getElementById('chartEspece').getContext('2d'));
                break;

            case 'cbCommune':
                filterBy = 'commune';
                $('#chartCommune').show();
                createChartCommune(document.getElementById('chartCommune').getContext('2d'));
                break;
        
            default:
                break;
        }
    } else {

        switch (this.id) {
            case 'cbGenre':
                $('#chartGenre').hide();
                //parent.appendChild(document.createElement("<canevas id='chartGenre'></canevas>"));
                //$(parent).add("<canevas id='chartGenre'></canevas>");
                break;

            case 'cbEspece':
                $('#chartEspece').hide();
                //parent.appendChild(document.createElement("<canevas id='chartEspece'></canevas>"));
                break;

            case 'cbCommune':
                $('#chartCommune').hide();
                //parent.appendChild(document.createElement("<canevas id='chartCommune'></canevas>"));
                break;
        
            default:
                break;
        }
    }

});

$("html").ready(function() {
  $("input[type=checkbox]").prop('checked', false);
});
   
</script>
