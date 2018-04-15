<div class="row">
    <h1>Details de l'arbre n°<?= $unArbre->idArbre ?></h1>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-block">
                <P><strong>Commune:</strong> <?= $unArbre->commune ?> (<?= $unArbre->cp ?>)</P>
                <p><strong>Date de plantation:</strong> <?= $unArbre->datePlantation ?></p>
                <P><strong>Genre:</strong> <?= $unArbre->libelleGenre ?></P>
                <p><strong>Espece:</strong> <?= $unArbre->libelleEspece ?></p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="table-responsive">
            <table class="table table-striped" ng-app>
                <thead class="">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Date intervention</th>
                        <th scope="col">Type traitement</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody class="tbody-scroll-300">
                    
                        <?php
                        foreach($lesInterventions as $uneIntervention):
                        ?>
                        <tr>
                            <td scope='col'><?= $uneIntervention->idArbre ?></td>
                            <td scope='col'><?= $uneIntervention->dateIntervention ?></td>
                            <td scope='col'><?= $uneIntervention->libelleType ?></td>
                            <td scope='col'><button class="btn btn-success" 
                                                data-idArbre='<?= $uneIntervention->idArbre ?>' 
                                                data-idIntervention='<?= $uneIntervention->idIntervention ?>' 
                                                onclick="getObservation(this.getAttribute('data-idArbre'), 
                                                this.getAttribute('data-idIntervention'));">
                                                Observations</button></td>
                        </tr>
                        <?php endforeach ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-12 col-md-6">
        <div class="card">
            <div class="card-block" id="divObs">
                <h2>Observations:</h2>
                <P id="observation-content">Aucune observation à afficher</P>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <h2>Visualisation des interventions</h2>
        <div class="card">
            <canvas id="chartIntervention"></canvas>
        </div>
    </div>
</div>



<script>
    createChartIntervention(document.getElementById('chartIntervention').getContext('2d'), <?= $uneIntervention->idArbre ?>);
</script>