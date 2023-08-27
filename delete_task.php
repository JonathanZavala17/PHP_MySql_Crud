<?php 
    //se inicia la conexion con la base de datos
    include('db.php');

    //se obtiene el id de la tarea a eliminar
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            die("Query Failed");
        }
        
        $_SESSION['message'] = 'Se ha eliminado con exito';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }
?>