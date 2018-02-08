<div class="row" ng-app="myApp">    
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

    <div class="col-9" ng-controller="ArbresCtrl">
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
                                <tr ng-repeat="arbre in arbres | filter: {libelleFrancais: query}">
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

<div class="row">
    <div class="col-4">
        <canvas id="chartGenre"></canvas>
    </div>
    <div class="col-4">
        <canvas id="chartEspece"></canvas>
    </div>
    <div class="col-4">
        <canvas id="chartCommune"></canvas>
    </div>
</div>

<script>

let filterBy = 'libelleFrancais';

$('.listeCheckBox :checkbox').change(function() {
 
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
