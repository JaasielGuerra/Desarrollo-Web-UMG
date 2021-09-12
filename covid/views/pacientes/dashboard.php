<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">accessibility_new</i>
                </div>
                <p class="card-category">Gravedad media</p>
                <h3 class="card-title">
                    <?php echo Paciente::cantidadPacientesGravedad('Media'); ?>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-warning">info</i>Pacientes con gravedad media
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">accessibility_new</i>
                </div>
                <p class="card-category">Gravedad baja</p>
                <h3 class="card-title">
                <?php echo Paciente::cantidadPacientesGravedad('Baja'); ?>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-warning">info</i> Pacientes con grabedad baja
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">accessibility_new</i>
                </div>
                <p class="card-category">Gravedad alta</p>
                <h3 class="card-title">
                <?php echo Paciente::cantidadPacientesGravedad('Alta'); ?>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-warning">info</i> Pacientes con gravedad alta
                </div>
            </div>
        </div>
    </div>
</div>