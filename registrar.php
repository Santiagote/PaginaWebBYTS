</php 

include(conexion.php);


if(isset($_POST['register'])){
    if(
        strlen($_POST['username']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
        strlen($_POST['confirm_password']) >= 1 
        ){
             $usuario = trim($_POST['username']);
             $contraseña = trim($_POST['password']);  
             $confirmacion_contraseña = trim($_POST['confirm_password']);       
            $consulta = "INSERT INTO datos(username, password, confirm_password) VALUES ('$username','$password','$confirm_password')";
            $resultado = mysqli_connect($conex,$consulta);

            if($resultado){
                ?>
                <h3 class="succes">¡Te has registrado correctamente!</h3>
                <?php
            } else {
                ?>
                <h3 class="error">¡Ha ocurrido un error!</h3>
                <?php
            }
        } else {    
            ?>
            <h3 class="error">¡Por favor complete los campos!</h3>
            <?php
            }
}

?>