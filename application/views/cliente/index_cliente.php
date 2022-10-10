<div class="row">
    <div class="col-md-6">
        <h5>Gestión de Clientes</h5>
    </div>
    <div class="col-md-6">
        <button class="btn btn-success" id="agregarCliente">
            Agregar
        </button>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0" id="dataCliente">
        <thead>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <?php
            foreach ($clientes as $cliente) {
                echo
                "<tr>
                        <td>$cliente->nombres</td>
                        <td>$cliente->apellidos</td>
                        <td>$cliente->direccion</td>
                        <td>
                            <button class='btn btn-warning editarCliente' id='$cliente->id'>
                                Editar
                            </button>
                        </td>
                </tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </tfoot>
    </table>
</div>

<!-- Modal Insercion Cliente -->
<div class="modal fade" id="frmInsercionCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insercion Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="cliente/save_cliente" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-column col-md-6">
                            <div class="form-group">
                                <label for="nombres">Nombres</label>
                                <input type="text" name="nombres" id="nombres" class="form-control">
                            </div>
                        </div>
                        <div class="form-column col-md-6">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-column col-md-6">
                            <div class="form-group">
                                <label for="direccion">Direccion</label>
                                <input type="text" name="direccion" id="direccion" class="form-control">
                            </div>
                        </div>
                        <div class="form-column col-md-6">
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-column col-md-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="cmdGuardarCliente" type="submit" class="btn btn-success">Guardar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal EdicionCliente -->
<div class="modal fade" id="frmEdicionCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edicion Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="cliente/update_cliente" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-column col-md-6">
                            <input type="hidden" name="idCliente" id="idCliente">
                            <div class="form-group">
                                <label for="nombres">Nombres</label>
                                <input type="text" name="nombres" id="nombresE" class="form-control">
                            </div>
                        </div>
                        <div class="form-column col-md-6">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos" id="apellidosE" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-column col-md-6">
                            <div class="form-group">
                                <label for="direccion">Direccion</label>
                                <input type="text" name="direccion" id="direccionE" class="form-control">
                            </div>
                        </div>
                        <div class="form-column col-md-6">
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" id="telefonoE" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-column col-md-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="emailE" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="cmdEditarCliente" type="submit" class="btn btn-success">Guardar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>