$(document).ready(function(){

    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "",
        "method": "GET",
        "headers":{
            "Accep":"*/*"
        }
    };

    $ajax(settings).done(function (response){
        console.log(response);

        let tabla = JSON.parse(response);
        console.log(tabla);

        $("#jsGrid").jsGrid({
            with: "100%",
            height: "400px",

            inserting: true,
            editing: true,
            sorting: true,
            paging: true,
            
            data: tabla,

            fields:[
                { name: "noControl", type: "text", width: 150, validate: "required" },
                { name: "nombres", type: "text", width: 150, validate: "required" },
                { name: "apellidos", type: "text", width: 150, validate: "required" },
                { name: "semestre", type: "text", width: 150, validate: "required" },
                { name: "carrera", type: "text", width: 150, validate: "required" },
            ]
        });
    });
})