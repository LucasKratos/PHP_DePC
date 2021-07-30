<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<script>
    let aProductos = new Array(
        ["Yerba", 200],
        ["Azúcar", 50],
        ["Tallarines", 80],
        ["Leche", 40]
    );

    function actualizarPrecios(aValores, porcentaje){
        return aValores.map(function(numero) {
            return new Array(numero[0], numero[1] * ((porcentaje/100)+1));
        });

    }

    function imprimirPoductos(aArticulos) {
        document.write(`<main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Lista actualizada de precios</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr><th>Producto</th><th>Precio</th></tr>`);
                aArticulos.forEach(function(value, index) {
                    document.write(`<tr><td>${value[0]}</td><td>${value[1].toFixed(2)}</td></tr>`);
                });
   
           document.write(`
                </table>
            </div>
        </div>
    </main>`);
    }

    //Programa
     aProductos = actualizarPrecios(aProductos, 10);
    imprimirPoductos(aProductos);

</script>
<body>
    
</body>
</html>