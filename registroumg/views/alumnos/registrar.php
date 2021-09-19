<div class="row">
    <div class="card">
        <div class="card-header card-header-success">
            <h4 class="card-title">Formulario</h4>
            <p class="card-category">Registrar alumno</p>
        </div>
        <div class="card-body">
            <form action="?action=save" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Tipo</label>
                            <select class="form-control selectpicker" data-style="btn btn-link" required name="tipo">
                                <option>Estudiante</option>
                                <option>Catedratico</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Carnet (ej. 0900-21-12345)</label>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="text" class="form-control" required name="carrera" placeholder="0000" maxlength="4">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="text" class="form-control" required name="anio" placeholder="00" maxlength="2">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" required name="correlativo" placeholder="00000" maxlength="5">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nombre completo</label>
                            <input type="text" class="form-control" required name="nombre">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Apellidos</label>
                            <input type="text" class="form-control" required name="apellido">
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">DPI</label>
                            <input type="text" class="form-control" required name="dpi">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">NIT</label>
                            <input type="text" class="form-control" required name="nit">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">E-mail personal</label>
                            <input type="email" class="form-control" required name="email1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Otro e-mail personal</label>
                            <input type="email" class="form-control" name="email2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Teléfono móvil</label>
                            <input type="text" class="form-control" required name="tel1">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Otro Teléfono móvil</label>
                            <input type="tel" class="form-control" name="tel2">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success pull-right">
                    <i class="material-icons">save</i> Registrar
                </button>
                <a class="btn btn-danger pull-right" href="?action=show">
                    <i class="material-icons">reply</i> Regresar
                </a>
            </form>
        </div>
    </div>
</div>