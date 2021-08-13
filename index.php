<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="style.css">-->
        <title>Home</title>
    </head>
    <body>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="p-3 m-2 bg-info text-white">
                        <h4>Formulario Alta</h4>
                        <br>
                        <form class="form-inline" method="post" action="#">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="saludo" class="sr-only">Saludo</label>
                                <br>
                                <br>
                                <input type="text" class="form-control" id="saludo" name="saludo" placeholder="Saluda aca payasin...">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
                        </form>
                    </div>
                </div>
                <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h4>Revisar Datos</h4>
                    <br>
                    <br>
                    <br>
                    <?php
                        if(isset($_POST['saludo'])){
                            echo $_POST['saludo'];
                        }else{
                            echo 'Esperando saludito';
                        }
                    ?>
                </div>
                </div>
            </div>
        </div>
    <!--scripts--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    </body>
</html>
