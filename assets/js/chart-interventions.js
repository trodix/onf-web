function createChartIntervention(element, idArbre) {

    let url = escape(base_url + "/api/getIntervention/" + idArbre);

    $.ajax({
        url: url,
        cache: false,
        // data: "zlCateg=" + escape(categChoisie),
        datatype: "json",
        success: function(json) {

            //console.log(json);

            let lesLibInterventions = [];
            let lesQteArbreInterventions = [];
            let titre = "Type de traitement par arbre";

            for (let i = 0; i < json.length; i++) {

                lesLibInterventions[i] = json[i].libelleType;
                lesQteArbreInterventions[i] = json[i].qteArbreTypeIntervention;
            }

            // creation du graph ici
            initGraph(element, lesLibInterventions, lesQteArbreInterventions, titre);

        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(ajaxOptions);
            console.log(thrownError);
            console.log(url);
        }
    });
}

function randomColorGenerator(nbColor) {
    let colors = [];

    for (let i = 0; i < nbColor; i++) {
        colors[i] = '#' + (Math.random().toString(16) + '0000000').slice(2, 8);
    }
    return colors;
};

function initGraph(element, labels, data, titre) {

    let myChart = element;
    let colors = randomColorGenerator(data.length);

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let chartInterventions = new Chart(myChart, {
        type: 'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            //labels: ['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'],
            labels: labels,
            datasets: [{
                label: 'Interventions',
                data: data,
                //backgroundColor:'green',
                backgroundColor: colors,
                borderWidth: 1,
                borderColor: '#777',
                hoverBorderWidth: 3,
                hoverBorderColor: '#000'
            }]
        },
        options: {
            title: {
                display: true,
                //text: 'Type de traitement par arbre',
                text: titre,
                fontSize: 25
            },
            legend: {
                display: false,
                position: 'bottom',
                labels: {
                    fontColor: '#000',
                    boxWidth: 2,
                    boxHeight: 10
                }
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    bottom: 0,
                    top: 0
                }
            },
            tooltips: {
                enabled: true
            }
        }
    });
}