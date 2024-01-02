<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="">

    <div class="card">

        <div class="card-body">
            <form action="" method="POST" ><br>
                <h2><b>Crear Usuario</b>
                    <hr>
                </h2>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Nombre Usuario</b></label>
                    <input type="text" name="NombreUsuario" class="form-control" placeholder="Nombre Usuario" id="nombre" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><b>Contraseña</b></label>
                    <input type="password" name="Password" class="form-control" placeholder="Contraseña" id="email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><b>Confirmar Contraseña</b></label>
                    <input type="password" name="ConfirmPass" class="form-control" placeholder="Confirmar contraseña" id="email" required>
                </div>
                <button id="boton2" type="submit" class="btn btn-info form-control" ><b>REGISTRARSE</b></button>
                <!-- <button  type="submit" class="btn btn-dark form-control" id="boton2">Enviar Consulta</button> -->
            </form>
        </div>
    </div>
</div>
</body>
</html>