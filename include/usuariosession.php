<?php
    class UserSeccion{


        public function __construct(){ // Maneja las Seciones
            session_start();
        }

        public function set_current_user($user){ //Esta funcion va ayudar a poner un valor a la seccion
            $_SESSION['user'] = $user;
        }

        public function get_current_user($user){
            $_SESSION['user'] = $user;
        }

        public function closetSession(){
            session_unset(); //Borra los valores de la seciones
            session_destroy(); //Destruye las seciones
        }
    }
?>