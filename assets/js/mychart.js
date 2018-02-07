function getGenres(){
    $.ajax({
        url: "/api/getGenres",
        cache: false,
        // data: "zlCateg=" + escape(categChoisie),
        datatype: "json",
        success: function (json) {
            console.log(json);
            let lesGenres = [];
            for(let i = 0; i < json.length; i++){
                lesGenres[i] = 
                    {
                        libelleGenre: json[i].libelleGenre,
                        qteArbreGenre: json[i].qteArbreGenre
                    };
                
            }
            return console.log('return: ' + lesGenres);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(ajaxOptions);
            console.log(thrownError);
        }
    });
}

function createChartGenre(element) {

    let myChart = element;

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let lesGenres = getGenres();
    let lesLibGenres = [];
    let lesQteArbreGenre = [];

    // for (let i = 0; i < lesGenres.length; i++) {
    //     lesLibGenres[i] = lesGenres[i].libelleGenre;
    //     lesQteArbreGenre[i] = lesGenres[i].qteArbreGenre;
    // }

    for(unGenre in lesGenres){
        console.log(unGenre);
        for(unObjet in unGenre){
            console.log('objet: ' + unObjet);
        }
        // lesLibGenres.push(unGenre.libelleGenre);
        // lesQteArbreGenre.push(unGenre.qteArbreGenre);
    }

    console.log(lesLibGenres);

    let massPopChart = new Chart(myChart, {
        type: 'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            //labels: ['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'],
            labels: lesLibGenres,
            datasets: [{
                label: 'Genres',
                data: lesQteArbreGenre,
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