<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body style="background-color:#E3BE65">

            

    <div class="container" >
        <h1>Calculadora IMC</h1>
        <div class="row">
            <div class="col-sm-4">
            <form action="datos.php" method="POST">
                
                <label for="">Ingresa tu peso</label>
                <input type="text" name="peso" placeholder="peso" class="form-control">
                
                <label for="">Ingresa tu altura</label>
                <input type="text" name="altura" placeholder="altura" class="form-control">
                <br>
                <button class="btn btn-outline-danger">Calcular</button>
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>