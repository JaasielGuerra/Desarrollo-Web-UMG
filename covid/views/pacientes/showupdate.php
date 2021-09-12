<div class="row">
    <div class="card">
        <div class="card-header card-header-warning">
            <h4 class="card-title">Formulario</h4>
            <p class="card-category">Editar Paciente</p>
        </div>
        <div class="card-body">

            <form action="?action=update&title=Pacientes" method="post">

                <input type="hidden" name="id" value="<?php echo $paciente->getIdPaciente(); ?>">

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nombre</label>
                            <input type="text" class="form-control" required name="nombre" value="<?php echo $paciente->getNombre(); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Apellido</label>
                            <input type="text" class="form-control" required name="apellido" value="<?php echo $paciente->getApellido() ?>">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Síntomas</label>
                            <input type="text" class="form-control" required name="sintomas" value="<?php echo $paciente->getSintomas(); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Gravedad</label>
                            <select class="form-control selectpicker" data-style="btn btn-link" required name="gravedad" value="<?php echo $paciente->getGravedad(); ?>">
                                <option>Alta</option>
                                <option>Media</option>
                                <option>Baja</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success pull-right">
                    <i class="material-icons">save</i> Guardar
                </button>
                <a class="btn btn-danger pull-right" href="?action=show&title=Pacientes">
                    <i class="material-icons">reply</i> Regresar
                </a>
            </form>
        </div>
    </div>
</div>