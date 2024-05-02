<!DOCTYPE html>
<html lang="en">
<?php

$fileCSS = ["publicacionesAdmin", "eventosAdmin"];
$fileJS = ["publicacionesAdmin", "eventosAdmin"];





require_once("../includePublicacionesAdmin/html_head.php");
?>

<body>



    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear publicacion</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EventoAdminModal" data-bs-whatever="@mdo">Crear Evento</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">Completar para publicar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            </div>

                            <div class="modal-body">
                                <form id="formPublicacionesAdmin">

                                    <div class="mb-3">
                                        <label for="nombre" class="col-form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombrePublicacionAdmin" id="nombrePublicacionAdmin">
                                    </div>

                                    <div class="mb-3">
                                        <label for="rolAdmin" class="form-label">Rol Admin</label>
                                        <input type="text" class="form-control" name="rolPublicacionAdmin" id="rolPublicacionAdmin">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fecha" class="form-label">Fecha</label>
                                        <input type="date" class="form-control" name="fechaPublicacionAdmin" id="fechaPublicacionAdmin">
                                    </div>

                                    <div class="mb-3">
                                        <label for="tituloPubli" class="form-label">Titulo publicacion</label>
                                        <input type="text" class="form-control" name="tituloPublicacionAdmin" id="tituloPublicacionAdmin">
                                    </div>

                                    <div class="mb-3">
                                        <label for="imgPublicacionAdmin" class="form-label">Imagen publicacion</label>
                                        <input type="file" name="imgPublicacionAdmin" id="imgPublicacionAdmin" required>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="descripcionPublicacionAdmin" name="descripcionPublicacionAdmin" id="descripcionPublicacionAdmin"></textarea>
                                        <label for="descripcion">Descripcion</label>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" data-bs-dismiss="modal" id="cacca" class="btn btn-primary">Publicar</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="EventoAdminModal" tabindex="-1" aria-labelledby="EventoAdminModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">Completar para publicar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            </div>

                            <div class="modal-body">
                                <form id="formEventosAdmin">

                                    <div class="mb-3">
                                        <label for="descripcionEventosAdmin" class="form-label">Descripcion del Evento</label>
                                        <input type="text" class="form-control" name="descripcionEventos" id="descripcionEventosAdmin">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fechaEventosAdmin" class="form-label">Fecha</label>
                                        <input type="date" class="form-control" name="fechaEventos" id="fechaEventosAdmin">
                                    </div>

                                    <div class="mb-3">
                                        <label for="imgEventoAdmin" class="form-label">Imagen publicacion</label>
                                        <input type="file" name="imgEventoAdmin" id="imgEventoAdmin" required>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" data-bs-dismiss="modal" id="cacca" class="btn btn-primary">Publicar</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="publicData">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="public_eventos_data">

                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-10">
                <div class="contNoticiasDatos">

                </div>

            </div>
        </div>

        
    </div>


</body>

</html>