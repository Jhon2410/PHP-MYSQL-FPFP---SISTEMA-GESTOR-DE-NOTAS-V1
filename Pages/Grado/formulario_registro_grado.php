<?php

include_once "../../componentes/encabezado.php";
 ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de grado</h1>
        <form action="guardar_grado.php" method="POST">
        <div class="form-group">
                <label for="id">Codigo de identificación</label>
                <input name="id" required type="text" id="id" class="form-control" placeholder="ID">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                    </svg></button>
            </div>
        </form>
    </div>
</div>
<?php include_once "../../componentes/pie.php";
?>