<div class="container p-4">
    <div class="row">

        <!--Ingreso de datos-->
        <div class="col-md-4">

            <?php if(isset($_SESSION['message'])) {?>
                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" 
                        placeholder="Nombre de la Tarea" autofocus>
                    </div>&nbsp;
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" 
                        placeholder="Descripcion de la Tarea"></textarea>
                    </div>&nbsp;
                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                    </div>&nbsp;
                </form>
            </div>
        </div>

        <!--Tabla DATATABLE-->
        <div class="col-md-8">
            <table id="DTLista" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Fecha de Creacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM task ORDER BY title ASC";
                        $result_tasks = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_tasks)) { ?>
                            <tr>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                                        <i class="fas fa-marker"></i>
                                        <button class="btn btn-primary">
                                            <mat-icon class="mat-18">Editar</mat-icon>
                                        </button>
                                    </a>&nbsp;
                                    <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                        <button class="btn btn-danger">
                                            <mat-icon class="mat-18">Eliminar</mat-icon>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!--Espacio izquierdo-->
        <div class="col-md-4">

        </div>

        <!--Tabla normal-->
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Fecha de Creación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM task ORDER BY title ASC";
                        $result_tasks = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_tasks)) { ?>
                            <tr>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-primary">Editar</a>
                                    <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>