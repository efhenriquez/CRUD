<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDphp</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class = 'container mt-5'>
        <div class = 'row'>
            <div class ='col-md-4'>
                <form action= "insert.php" method= 'POST'>
                <input type ='text' class='form-control mb-3' name= 'nombre' placeholder='Nombre'>
                <input type ='text' class='form-control mb-3' name= 'apellido' placeholder='Apellido'>
                <input type ='text' class='form-control mb-3' name= 'DNI' placeholder='DNI'>
                <input type ='text' class='form-control mb-3' name= 'correo' placeholder='Correo Electrónico'>

                <button type="button" class="btn btn-primary">Enviar</button>
                </form> 

            </div>
            <div class ='col-md-8'></div>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">DNI</th>
      <th scope="col">Correo electrónico</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>

        </div>
    </div>



    
</body>
</html>