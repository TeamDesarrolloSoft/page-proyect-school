<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/publicaciones.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>No me sale</title>
</head>

<body>
    <?php require_once ("../utils/sidebar.php"); ?>


    <main>
        <h1>Publicaciones:</h1>
        <hr>


        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Crear publicacion</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Completar para publicar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>

                    <div class="modal-body">
                        <form id="form">

                            <div class="mb-3">
                                <label for="nombre" class="col-form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>

                            <div class="mb-3">
                                <label for="rolAdmin" class="form-label">Rol Admin</label>
                                <input type="text" class="form-control" name="rolAdmin" id="rolAdmin">
                            </div>
                            <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="fecha" id="fecha">
                            </div>
                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen</label>
                                <input type="file" class="form-control" name="imagen" id="imagen">
                            </div>

                            <div class="mb-3">
                                <label for="tituloPubli" class="form-label">Titulo publicacion</label>
                                <input type="text" class="form-control" name="tituloPubli" id="tituloPubli">
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Descripcion" name="descripcion" id="descripcion"></textarea>
                                <label for="descripcion">Descripcion</label>
                            </div>

                            <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Publicar</button>
                    </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>







        <div class="contenedorPublicaciones">
            <div class="contenedorHijoPubli">

                <div class="contCabeceraPubli">
                    <div class="imgPubliGa">
                        <img src="../../img/person.png" alt="">
                    </div>
                    <div class="contCabeceraDatos">
                        <h3>Raul Leonsio Prado</h3>
                        <span>Director general</span>
                    </div>
                    <p>22/04/24</p>
                </div>

                <div class="contPubliImg">
                    <div class="contPubliImgSpace">
                        <img src="../../img/paisaje.png" alt="">
                    </div>
                </div>

                <div class="contTextPubli">
                    <div class="contextPubliSpace">
                        <h3>Colegio Pepito Pérez lidera iniciativa ambiental con la apertura del Parque Ecológico</h3>
                        <br>
                        <p>
                            En un esfuerzo por fomentar la conciencia ambiental y brindar un espacio de aprendizaje
                            práctico para sus estudiantes, el Colegio Pepito Pérez, en colaboración con autoridades
                            locales, ha liderado la creación del Parque Ecológico "Verde Esperanza" en Lima. Este
                            proyecto, ubicado en el distrito de San Borja, no solo servirá como un oasis urbano para la
                            comunidad, sino también como un laboratorio viviente para la educación ambiental.
                        </p>
                    </div>
                </div>

                <div class="contFooterPubli">
                    <div class="contFooterPubliIconsData">
                        <div class="contFooterPubliIcons">
                            <ion-icon name="trash-outline"></ion-icon>
                            <ion-icon name="create-outline"></ion-icon>
                        </div>
                        <div class="contPublicarBotonxd">
                            <button>Publicar</button>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </main>


    </main>



    <!-- JS NUBE -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="../../js/sidebar.js"></script>
    <script src="../../js/addimage.js"></script>
    

</body>

</html>