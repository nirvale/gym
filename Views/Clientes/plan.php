<?php include "Views/Templates/header.php"; ?>
<button class="btn btn-outline-info mb-2" type="button" data-toggle="modal" data-target="#modalPago">REGISTRAR PAGO</button>
<div class="card shadow-lg">
    <div class="card-body">
        <form id="formulario" onsubmit="registrarPlanCliente(event)">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="form-group mb-3">
                        <label for="select_cliente"><i class="fas fa-users"></i> BUSCAR CLIENTE</label>
                        <input type="hidden" id="id_cli" name="id_cli" required>
                        <input type="text" id="select_cliente" placeholder="Buscar..." class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="form-group mb-3">
                        <label for="buscar_planes"><i class="fas fa-lista"></i> BUSCAR PLAN</label>
                        <input type="hidden" id="id_plan" name="id_plan" required>
                        <input type="text" id="buscar_planes" class="form-control" placeholder="Buscar..." required>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="form-group mb-3">
                        <label for="precio_plan"><i class="fas fa-dollar-sign"></i> PRECION PLAN</label>
                        <input type="text" id="precio_plan" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="d-grid gap-2">
                        <label for="">ACCIÓN</label>
                        <button class="btn btn-outline-primary btn-block" type="submit"><i class="fas fa-sign-in-alt"></i><span id="btnAccion"> PROCESAR</span></button>
                    </div>
                </div>
            </div>
        </form>
        <div class="row mb-2">
            <div class="col-md-4">
                <label for="">DESDE</label>
                <input class="form-control" id="min" type="date" name="plan_min">
            </div>
            <div class="col-md-4">
                <label for="">HASTA</label>
                <input class="form-control" id="max" type="date" name="plan_max">
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped table-hover display responsive nowrap" id="tblPlanCli" style="width: 100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>REGISTRO</th>
                        <!-- <th>IDENTIFICAIÓN</th> -->
                        <th>CLIENTE</th>
                        <th>PLAN/MEMBRESÍA</th>
                        <th>PRECIO</th>
                        <th>VENCIMIENTO</th>
                        <!-- <th>BORRAR</th> -->
                        <th>ESTATUS</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">REGISTRAR PAGO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <input class="form-control" id="cliente" type="text" readonly>
                    <input type="hidden" id="id">
                    <label for="cliente" class="form-label">CLIENTE</label>
                </div>
                <div class="form-group mb-3">
                    <input class="form-control" id="plan" type="text" readonly>
                    <label for="plan" class="form-label">PLAN</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-outline-primary" onclick="generarPago();">PAGAR</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalPago" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">REGISTRAR PAGO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frmPago" onsubmit="registrarPago(event)" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <input type="hidden" id="id_planCliente" name="id_planCliente" required>
                                <label for="nombre_cliente"><i class="fas fa-users"></i> BUSCAR CLIENTE</label>
                                <input type="text" id="nombre_cliente" class="form-control" placeholder="Buscar..." required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="nombre_plan"><i class="fas fa-users"></i> PLAN/MEMBRESÍA</label>
                                <input type="text" id="nombre_plan" class="form-control" required readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="vencimiento"><i class="fas fa-users"></i> VENCE</label>
                                <input type="text" id="vencimiento" class="form-control" required readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="precio"><i class="fas fa-users"></i> PRECIO</label>
                                <input type="text" id="precio" class="form-control" required readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-primary" type="submit">REGISTRAR PAGO</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>
