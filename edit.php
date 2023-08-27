<?php 
    //Se incluye la conexión a la base de datos    
    include('db.php');
    
    //Se valida si existe el id
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);

        // Se valida si existe el resultado
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $title = $row['title'];
            $description = $row['description'];
            echo $title;
            echo $description;
        }
    }

    //Se valida si existe la accion actualizar
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        //Se actualiza la tarea
        $query = "UPDATE task set title = '$title', description = '$description' WHERE id = $id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Tarea Actualizada';
        $_SESSION['message_type'] = 'warning';
        header("Location: index.php");
    }
?>

<?php include('includes/header.php'); ?>
<?php include('includes/modal_editar.php'); ?>
<?php include('includes/footer.php'); ?>
