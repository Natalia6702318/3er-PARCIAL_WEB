<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EXAMEN 21 DE SEPTIEMBRE </title>

    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
    <div class="menu"> 
        <div>
            <a href=""> Inicio </a>
        </div>

        <div> 
            <a href=""> Creacion de la BD </a>
        </div>

        <div> 
            <a href=""> Registro de datos </a>
        </div>

        <div> 
            <a href=""> Reportes </a>
        </div>
</div>

<div class="contenedor">
    <br><br>
        <h1> Creacion  de la base de datos </h1>
        <p> Aqui creamos la base de datos </p>

        <form action="creacion de BD.php"method="post">

            <h3 class="etiqueta"> Nombre de la BD: </h3>
        
        <input class="tbx"  type="text" name="examenbd" placeholder="Coloque aqui el nombre de la base de datos"> <br>

            <div>
            <br>
                <input type="submit" class="boton">
            </div>
       </form>

    </div>

    <br>
    <div class="contenedor">

        <h1>Creacion  de las tablas </h1>
        <p> Aqui creamos las tablas </p>

        <form action="creacion de tablas.php" method="post">

            <h3 class="etiqueta"> Nombre de la BD: </h3>

            <input class="tbx"  type="text" name="nombre" placeholder="Coloque aqui el nombre de la tabla"><br>

            <h3 class="etiqueta"> Nombre TABLA:</h3>

            <input class="tbx"  type="text" name="nombrebd" placeholder="Coloque aqui el nombre de la base de datos"><br>

            <h3 class="etiqueta"> Columnas </h3>

            <input class="tbx"  type="text" name="nombrebd" placeholder="1erCampo"><br>

            <input class="tbx"  type="text" name="nombrebd" placeholder="2doCampo"><br>

            <input class="tbx"  type="text" name="nombrebd" placeholder="3erCampo"><br>

            <input class="tbx"  type="text" name="nombrebd" placeholder="4toCampo"><br>

            <input class="tbx"  type="text" name="nombrebd" placeholder="5toCampo"><br>

            <div>
                <br>
                <input type="submit" class="boton">
            </div>
            
           </form>
    </div>

</body>
</html>