<?php
    //conexion con la base de datos
    include("db.php");

    //verificacion del metodo para guardar
    if (isset($_POST['save_task'])){
        $title = $_POST['title'];
        $description = $_POST['description'];

        //verificacion de campos vacios
        if(empty($title) || empty($description)){
            $_SESSION['message'] = 'has dejado un espacio en blanco, por favor llenar todos los campos';
            $_SESSION['message_type'] = 'danger';
            header("Location: index.php");
            die();
        }
        //insertar datos en la base de datos
        else{
            $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
            $result = mysqli_query($conn, $query);
            $_SESSION['message'] = 'guardado con exito';
            $_SESSION['message_type'] = 'success';
            header("Location: index.php");
        }
        
        //verificacion de la consulta
        if (!$result){
            die("Query failed");
        }
    }
?>
