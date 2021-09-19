<a type="button" class="btn btn-success" href="?action=register">
    <i class="material-icons">add</i>
    Nuevo
</a>

<a type="button" class="btn btn-info" href="?action=show">
    <i class="material-icons">search</i>
    Consultar
</a>

<div class="row">
    <div class="card">
        <div class="card-header card-header-info">
            <h4 class="card-title ">Listado de alumnos</h4>
            <p class="card-category">Consulta de alumnos registrados</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            ID
                        </th>
                        <th>
                            Tipo
                        </th>
                        <th>
                            Carnet
                        </th>
                        <th>
                            Nombre completo
                        </th>
                        <th>
                            Apellidos
                        </th>

                    </thead>
                    <tbody>

                        <?php foreach ($listaAlumnos as  $a) { ?>
                            <tr>
                                <td>
                                    <?php echo $a->getId(); ?>
                                </td>
                                <td>
                                    <?php echo $a->getTipo(); ?>
                                </td>
                                <td>
                                    <?php echo $a->getCarnet(); ?>
                                </td>
                                <td>
                                    <?php echo $a->getNombre(); ?>
                                </td>
                                <td>
                                    <?php echo $a->getApellidos(); ?>
                                </td>

                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>