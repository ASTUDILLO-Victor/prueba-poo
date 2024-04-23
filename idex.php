<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/validar.js"></script>
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
                            <form id="miFormulario" method="post" action="php/php.php">
                                <div class="mb-3">
                                    <label for="" class="form-label">cedula</label>
                                    <input type="text" class="form-control" id="cedu" name="cedu">
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
                                <button onclick="volverARegistro()" type="submit" class="btn btn-primary"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-send-arrow-up-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15.854.146a.5.5 0 0 1 .11.54L13.026 8.03A4.5 4.5 0 0 0 8 12.5c0 .5 0 1.5-.773.36l-1.59-2.498L.644 7.184l-.002-.001-.41-.261a.5.5 0 0 1 .083-.886l.452-.18.001-.001L15.314.035a.5.5 0 0 1 .54.111M6.637 10.07l7.494-7.494.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154z" />
                                        <path fill-rule="evenodd"
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.354a.5.5 0 0 0-.722.016l-1.149 1.25a.5.5 0 1 0 .737.676l.28-.305V14a.5.5 0 0 0 1 0v-1.793l.396.397a.5.5 0 0 0 .708-.708z" />
                                    </svg> &nbsp; <strong>ENVIAR</strong></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>