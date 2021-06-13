<!DOCTYPE html>
    <html lang = "es">
        <head>
            <title>Base de datos</title>  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="estilos.css">
            <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
            <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
            

            <style>
                .hide
                {
                    display:none;
                }
            </style>
        </head>
        <body>
            <div class = "container">
                <br/>
                    <div class = "table-responsive">
                        <h2 aling ="Center">Inscritos</h2><br />
                        <div id ="jsGrid"></div>
                    </div>
            </div>
        </body>
    </html>
    <script>
        $('#jsGrid').jsGrid(
            {
                width: "100%",
                height: "600px",

                filtering: true,
                inserting:true,
                editing: true,
                sorting: true,
                paging: true,
                autoload: true,
                pageSize: 10,
                pageButtonCount: 5,
                deleteConfirm: "Desea elimminar al inscrito?",

                controller: 
                    {
                        loadData: function(filter)
                            {
                                return $.ajax({ type: "GET",url: "Fetch_d.php",data: filter});
                            },
                        insertItem: function(item)
                            {
                                return $.ajax({type: "POST",url: "Fetch_d.php",data:item});
                            },
                        updateItem: function(item)
                            {
                                return $.ajax({type: "PUT",url: "Fetch_d.php",data: item});
                            },
                        deleteItem: function(item)
                            {
                                return $.ajax({type: "DELETE",url: "Fetch_d.php",data: item});
                            }
                    },

                fields: 
                    [
                        {name: "Nombre", type: "text",title: "Nombre", width: 150, validate: "required"},
                        {name: "PrimApellido", type: "text",title: "Primer Apellido", width: 150},
                        {name: "SegApellido", type: "text",title: "Segundo Apellido", width: 150},
                        {name: "Edad", type: "text",title: "Edad", width: 50},
                        {type: "control"}
                    ]
            });
    </script>
</html>