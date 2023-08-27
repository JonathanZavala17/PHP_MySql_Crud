<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" 
                        placeholder="Nombre de la Tarea" autofocus>
                    </div>&nbsp;
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" 
                        placeholder="Descripcion de la Tarea"><?php echo $description; ?></textarea>
                    </div>&nbsp;
                    <div class="form-group">
                        <button class="btn btn-success" name="update">
                            Actualizar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>