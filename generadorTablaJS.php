<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Generador de Tabla con JS</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div style="margin: 20px;">
            <input type="number" id="numFilas" min="1" value="1"/>
            <br/><br/>
            <input type="number" id="numColumnas" min="1" value="1"/>
            <br/><br/>        
            <button onclick="generarTabla();">Generar Tabla</button>
            <hr/>
            <div id="contenedorTabla">
                <!-- Mediante JavaScript. -->
            </div>
        </div>
        <script type="text/javascript" src="js/generadorTablaJS.js"></script>
    </body>
</html>