function getGenres(){
    $.ajax({
        url: "/api/getGenres",
        cache: false,
        // data: "zlCateg=" + escape(categChoisie),
        datatype: "json",
        success: function (json) {
            // $('#zlProduit').empty();
            // $('#zlProduit').append(html);
            let lesGenres = [];
            for(let i = 0; i < json.length; i++){
                lesGenres.push(
                    {
                        libelleGenre: json[i].libelleGenre,
                        qteArbreGenre: json[i].qteArbreGenre
                    }
                );
            }
            return lesGenres;
        }
    });
}

function createChartCities(element) {

    let myChart = element;

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let lesGenres = getGenres();
    let lesLibGenres = [];
    let qteArbreGenre = [];
    for (let index = 0; index < array.length; index++) {
        lesLibGenres.push();
        qteArbreGenre.push();

        
    }

    let massPopChart = new Chart(myChart, {
        type: 'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            //labels: ['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'],
            labels: getLibGenre(),
            datasets: [{
                label: 'Genres',
                data: [
                    617594,
                    181045,
                    153060,
                    106519,
                    105162,
                    95072
                ],
                //backgroundColor:'green',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 99, 132, 0.6)'
                ],
                borderWidth: 1,
                borderColor: '#777',
                hoverBorderWidth: 3,
                hoverBorderColor: '#000'
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Genres les plus courants',
                fontSize: 25
            },
            legend: {
                display: true,
                position: 'right',
                labels: {
                    fontColor: '#000'
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