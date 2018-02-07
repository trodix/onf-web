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
                    <tr>
                        <?php
                        foreach($lesInterventions as $uneIntervention):
                        ?>
                        <td scope='col'><?= $uneIntervention->idArbre ?></td>
                        <td scope='col'><?= $uneIntervention->dateIntervention ?></td>
                        <td scope='col'><?= $uneIntervention->libelleType ?></td>
                        <td scope='col'><button class="btn btn-success" 
                                            data-idArbre='<?= $uneIntervention->idArbre ?>' 
                                            data-idIntervention='<?= $uneIntervention->idIntervention ?>' 
                                            onclick="getObservation($(this).data('idArbre'), 
                                            $(this).data('idIntervention'));">
                                            Details</button></td>
                                            <script>
                                            getObservation(<?= $uneIntervention->idArbre?>, <?= $uneIntervention->idIntervention ?>);
                                            </script>
                        <?php endforeach ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-block" id="divObs">
                <h2>Observations:</h2>
                <P id="observation-content"></P>
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