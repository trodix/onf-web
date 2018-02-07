function getObservation(idArbre, idIntervention) {

    $.ajax({
        url: "/api/getObservation/4/1",
        type: 'GET',
        cache: false,
        //data: "/" + idArbre + "/" + idIntervention,
        //data: "idArbre=4",
        datatype: 'json',
        success: function (json) {
            //let json2 = [{ "observations": "Observation intervention 1 2018-02-22" }];

            $('#observation-content').empty();

            for (let i = 0; i < json.length; i++) {

                //$('#observation-content').append('Contenu: ' + json2[i].observations);
                console.log('json: ' + json[i].observations);
                $('#observation-content').append('Contenu: ' + json[i].observations);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(ajaxOptions);
            console.log(thrownError);
        }
    });

}