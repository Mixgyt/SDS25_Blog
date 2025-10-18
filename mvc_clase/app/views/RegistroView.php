<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Formulario de registro -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        <i class="fas fa-user-plus me-2"></i>
                        Registrar Tu Visita
                    </h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="/mvc_clase/public/registrar">
                        <div class="mb-3">
                            <label for="nombre_usuario" class="form-label">
                                <i class="fas fa-user me-1"></i>
                                Nombre de a registrar
                            </label>
                            <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i>
                            Registrar
                        </button>
                    </form>
                </div>
            </div>

            <!-- Cantidad de registros -->
            <div class="card mb-4">
                <div class="card-body text-center bg-light">
                    <h3 class="mb-0 text-primary">
                        <i class="fas fa-chart-bar me-2"></i>
                        Total de visitas registradas: 
                        <span class="badge bg-primary fs-4 ms-2"><?php echo count($usuarios ?? []); ?></span>
                    </h3>
                </div>
            </div>

            <!-- Tabla de usuarios registrados -->
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">
                        <i class="fas fa-list me-2"></i>
                        Visitas Registrados
                    </h4>
                </div>
                <div class="card-body">
                    <?php if (isset($usuarios) && !empty($usuarios)): ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">
                                            <i class="fas fa-hashtag me-1"></i>
                                            ID
                                        </th>
                                        <th scope="col">
                                            <i class="fas fa-user me-1"></i>
                                            Nombre de registrado
                                        </th>
                                        <th scope="col">
                                            <i class="fas fa-calendar me-1"></i>
                                            Fecha de Registro
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($usuarios as $index => $usuario): ?>
                                        <tr>
                                            <td><?php echo $index + 1; ?></td>
                                            <td>
                                                <i class="fas fa-user-circle me-1 text-primary"></i>
                                                <?php echo htmlspecialchars($usuario['nombre'] ?? $usuario); ?>
                                            </td>
                                            <td>
                                                <i class="fas fa-clock me-1 text-muted"></i>
                                                <?php echo $usuario['fecha_registro'] ?? date('Y-m-d H:i:s'); ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-4">
                            <i class="fas fa-users fa-3x text-muted mb-3"></i>
                            <p class="text-muted">No hay usuarios registrados aún.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>