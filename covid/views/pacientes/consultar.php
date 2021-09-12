<a type="button" class="btn btn-success" href="?action=register&title=Registrar%20Paciente">
    <i class="material-icons">add</i>
    Nuevo paciente
</a>

<div class="row">
    <div class="card">
        <div class="card-header card-header-info">
            <h4 class="card-title ">Listado de pacientes</h4>
            <p class="card-category">Consulta de pacientes COVID-19</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            ID
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Apellido
                        </th>
                        <th>
                            Síntomas
                        </th>
                        <th>
                            Gravedad
                        </th>
                        <th class="text-right">
                            Opciones
                        </th>
                    </thead>
                    <tbody>

                        <?php foreach ($listaPacientes as $p) { ?>
                            <tr>
                                <td>
                                    <?php echo $p->getIdPaciente(); ?>
                                </td>
                                <td>
                                    <?php echo $p->getNombre(); ?>
                                </td>
                                <td>
                                    <?php echo $p->getApellido(); ?>
                                </td>
                                <td>
                                    <?php echo $p->getSintomas(); ?>
                                </td>
                                <td>
                                    <?php echo $p->getGravedad(); ?>
                                </td>
                                <td class="td-actions text-right">
                                    <a type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm" href="?action=updateshow&title=Editar&id=<?php echo $p->getIdPaciente(); ?>">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-link btn-sm" href="?action=delete&title=Pacientes&id=<?php echo $p->getIdPaciente(); ?>">
                                        <i class="material-icons">close</i>
                                    </a>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>