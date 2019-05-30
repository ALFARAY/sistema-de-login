<?php
    include_once 'include/user.php';
    include_once 'include/usuariosession.php';

    $UserSeccion = new UserSeccion();//Inicializa el ambiente de sessiones y validar si hay sesiones, segundon eso redirigir al usuario
    $user = new User();

    if(isset($_SESSION['user'])){
        echo "Hay session";
    }else if(isset($_POST['username']) && isset($_POST['password'])){

        $userForm = $_POST['username'];
        $passForm = $_POST['password'];

        if($user->userExists($userForm, $passForm)){
            echo "Usuario validado";
        }else{
            echo "nombre de usuario incorrector";
        }

        echo "Validacion de Usuario";      
    }else{
        //echo "Login";
        require_once 'vistas/login.php';
    }
?>