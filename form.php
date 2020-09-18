<html>

<head>
    <title>Registro de Programador</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
</head>

<body>
    <div class="container">
        <form name="programador" action="" onsubmit="enviarDatos(); return false">
            <h2>Nuevo Programador</h2>

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">

            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido">
            </div>

            <div class="form-group">
                <label for="cedula">Cedula</label>
                <input type="text" name="cedula" class="form-control" id="cedula" placeholder="Cedula">

            </div>

            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" name="correo" class="form-control" id="correo" placeholder="Correo">

            </div>

            <div class="form-group">
                <label for="lenguaje">Lenguaje</label>
                <input type="text" name="lenguaje" class="form-control" id="lenguaje" placeholder="Lenguaje">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

        <div id="resultado"><?php include('consulta.php');?></div>
    </div>
</body>

</html>