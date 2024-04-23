<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <style>
        /* Estilo personalizado para centrar el card */
        .center-card {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Ajustar la altura al 100% del viewport */
        }
    </style>

</head>

<body>
    <section>
        <div class="row">
            <div class="center-card">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header bg-dark text-center">
                            <h1 class="text-white"><strong>Formulario con POO</strong></h1>
                        </div>
                        <div class="card-body">
                            <form method="post" action="php/php.php">
                                <div class="mb-3">
                                    <label for="" class="form-label">cedula</label>
                                    <input type="text" class="form-control" id="cedu" name="cedu"
                                        >
                                    <div id="emailHelp" class="form-text">We'll never share your cedula with anyone
                                        else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nom" name="nom">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="ape" name="ape">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>