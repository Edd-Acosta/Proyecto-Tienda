<?php
    include('config-login.php');
    session_start();

    if(isset($_post['login'])){
        $email =     $_POST['email'];
        $password =     $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $query = $connection->prepare("SELECT * FROM usuarios WHERE email=:email");
        $query->bindParam("email",$email, PDO::PARAM_STR);
        $query->execute();

        if($query->rowCount() >0){ //si existe un indice con ese correo
            echo '<p class="error">Ya existe este indice</p>'; 
        }
        if ($query->rowCount() == 0){
            $query = $connection->prepare("INSERT INTO usuarios(email,password) VALUES 
            (:password_hash,:email)");
           
            $query->bindParam("password", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();

            if ($result){
                echo '<p class="sucess">Registro completado!</p>';
            } else {
                echo '<p class="error">Algo salio mal:(</p>';
            }
        }

}

?>