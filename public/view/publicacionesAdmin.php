<!DOCTYPE html>
<html lang="en">
<?php

$fileCSS = ["publicacionesAdmin", "eventosAdmin"];
$fileJS = ["publicacionesAdmin", "eventosAdmin", "noticiaAdmin"];





require_once("../includePublicacionesAdmin/html_head.php");
?>

<body>



    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear publicacion</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EventoAdminModal" data-bs-whatever="@mdo">Crear Evento</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#NoticiaAdmin" data-bs-whatever="@mdo">Crear Noticias</button>

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

                <div class="modal fade" id="EventoAdminModal" tabindex="-1" aria-labelledby="EventoAdminModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">Completar para publicar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            </div>

                            <div class="modal-body">
                                <form id="formNoticiaAdmin">

                                    <div class="mb-3">
                                        <label for="descripcionNoticia" class="form-label">Descripcion del Evento</label>
                                        <input type="text" class="form-control" name="descripcionNoticia" id="descripcionNoticia">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fechaNoticiaAdmin" class="form-label">Fecha</label>
                                        <input type="date" class="form-control" name="fechaNoticiaAdmin" id="fechaNoticiaAdmin">
                                    </div>

                                    <div class="mb-3">
                                        <label for="imgNoticiaAdmin" class="form-label">Imagen noticia</label>
                                        <input type="file" name="imgNoticiaAdmin" id="imgNoticiaAdmin" required>
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
                <div class="public_noticias_data">

                </div>

            </div>
        </div>

        
        <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">Editar para publicar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formPublicacionesAdminEdit">

                                    <div class="mb-3">
                                        <label for="nombre" class="col-form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombrePublicacionAdminEdit" id="nombrePublicacionAdminEdit">
                                    </div>

                                    <div class="mb-3">
                                        <label for="rolAdmin" class="form-label">Rol Admin</label>
                                        <input type="text" class="form-control" name="rolPublicacionAdminEdit" id="rolPublicacionAdminEdit">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fecha" class="form-label">Fecha</label>
                                        <input type="date" class="form-control" name="fechaPublicacionAdminEdit" id="fechaPublicacionAdminEdit">
                                    </div>

                                    <div class="mb-3">
                                        <label for="tituloPubli" class="form-label">Titulo publicacion</label>
                                        <input type="text" class="form-control" name="tituloPublicacionAdminEdit" id="tituloPublicacionAdminEdit">
                                    </div> 
                                    <div class="mb-3">
                                        <label for="imgPublicacionAdminEdit" class="form-label">Imagen de la publicación</label>
                                        <input type="text" class="form-control mt-2" name="imgUrlPublicacionAdminEdit" id="imgUrlPublicacionAdminEdit" placeholder="URL de la imagen"><br>
                                        <div class="input-group">
                                            <input type="file" style="display: none;" name="imgPublicacionAdminEdit" id="imgPublicacionAdminEdit">
                                            <input type="text" class="form-control" placeholder="Seleccionar imagen" readonly>
                                            <button type="button" class="btn btn-secondary" onclick="document.getElementById('imgPublicacionAdminEdit').click()">Seleccionar</button>
                                        </div>
                                        
                                    </div>

                                    
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="descripcionPublicacionAdmin" name="descripcionPublicacionAdminEdit" id="descripcionPublicacionAdminEdit"></textarea>
                                        <label for="descripcion">Descripcion</label>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button"  data-action="Editar" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" id="btnEditar" class="btn btn-primary">Editar</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
    </div>  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>