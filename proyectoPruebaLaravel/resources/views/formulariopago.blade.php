<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .tituloP{
            text-align: center;
            margin: 20px 0;
        }
        .contenedorPrincipal{
            width: 50%;
            margin: 20px auto;
            border: 1px solid #ccc;
            padding: 20px;
        }
        .numTarjeta{
            width: 40%;
            margin: 10px;
        }
        .mesTarjeta{
            width: 10%;
            display: inline-block;
            margin: 10px;
        }
        .yearTarjeta{
            width: 10%;
            display: inline-block;
            margin: 10px;
        }
        .Cvv{
            width: 10%;
            display: inline-block;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h2 class="tituloP">Formulario</h2>
    <div class="contenedorPrincipal">
        <form method="GET" action="/guardardatos">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Inserta tu nombre">
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Inserta tu apellido">
            </div>
            <div class="form-group">
                <label>Cantidad de adultos</label>
                <input type="number" class="form-control" id="adulto" name="adulto" placeholder="Inserta la cantidad de adultos">
            </div>
            <div class="form-group">
                <label>Cantidad de niños</label>
                <input type="number" class="form-control" id="boys" name="boys" placeholder="Inserta la cantidad de niños">
            </div>
            <div class="form-group">
                <label>Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
            </div>
            <div class="form-group">
                <label>Tarjeta de Crédito</label>
                <input type="number" class="form-control numTarjeta" id="tarjeta" name="tarjeta" placeholder="Numero de tarjeta">
                <input type="number" class="form-control mesTarjeta" id="fechaExp1" name="fechaExp1" placeholder="MM">
                <input type="number" class="form-control yearTarjeta" id="fechaExp2" name="fechaExp2" placeholder="YYYY">
                <input type="number" class="form-control Cvv" id="cvv" name="cvv" placeholder="CVV">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>