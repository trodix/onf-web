<h1>Details de l'arbre n°<?= $unArbre->idArbre ?></h1>
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
                    </tr>  
                </thead>
                <tbody class="tbody-scroll-300">
                    <tr>
                        <td scope='col'><?= $unArbre->idArbre ?></td>
                        <td scope='col'><?= $unArbre->dateIntervention ?></td>
                        <td scope='col'><?= $unArbre->libelleType ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-block">
                <h2>Observations:</h2>
                <P><?= $unArbre->observations ?></P>
            </div>
        </div>
    </div>
</div>

