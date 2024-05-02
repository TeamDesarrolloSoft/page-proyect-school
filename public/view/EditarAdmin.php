<!DOCTYPE html>
<html lang="es">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<body>
    <div class="container mt-3">
        <header>
            <h1 class="text-success">
                <i class="fas fa-pen-square"></i> Editar Publicacion
            </h1>
            <hr/>
        </header>

        <nav>
            <a href="../view/publicacionesAdmin.php" class="btn btn-outline-seconday btn-sm">
                <i class="fas fa-arrow-circle-left"></i> Regresar
            </a>
        </nav>

        <section>
            <article>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form id="frm_editar_prod" name="frm_editar_prod" method="post"  action="../controlador/ctr_grabar_prod.php" autocomplete="off">
                                        <input type="hidden" id="txt_tipo" name="txt_tipo" value="e">

                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <label for="txt_nombre" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Codigo" maxlength="5" readonly value="<?=$arr_prod->nombrePublicacionAdmin?>">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="txt_roles" class="form-label">Rol</label>
                                                <input type="text" class="form-control" id="txt_roles" name="txt_roles" placeholder="Nombre del Autor" maxlength="40" value="<?=$arr_prod->rolPublicacionAdmin?>" >
                                            </div>
                                            <div class="col-md-4">
                                                <label for="txt_fecha" class="form-label">Fecha de Publicacion</label>
                                                <input type="text" class="form-control" id="txt_fecha" name="txt_fecha" placeholder="Apellido del Autor"  value="<?=$arr_prod->fechaPublicacionAdmin?>" >
                                            </div>
                                            <div class="col-md-4">
                                                <label for="txt_titulo" class="form-label">Titulo</label>
                                                <input type="text" class="form-control" id="txt_titulo" name="txt_titulo" placeholder="Pais"  value="<?=$arr_prod->tituloPublicacionAdmin?>" >
                                            </div>
                                            <div class="col-md-4">
                                                <label for="txt_foto" class="form-label">Foto y/o Imagen</label>
                                                <input type="text" class="form-control" id="txt_foto" name="txt_foto" placeholder="Pais"  value="<?=$arr_prod->imgPublicacionAdmin?>" >
                                            </div>
                                            <div class="col-md-4">
                                                <label for="txt_desc" class="form-label">Descripcion</label>
                                                <input type="text" class="form-control" id="txt_desc" name="txt_desc" placeholder="Pais"  value="<?=$arr_prod->descripcionPublicacionAdmin?>" >
                                            </div>
                                        </div><br>
                                        <div class="text-center">
                                                <button type="submit" class="btn btn-outline-success" id="btn_editar_prod" name="btn_editar_prod">
                                                    <i class="fas fa-save"></i> Actualizar información
                                                </button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
<br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>