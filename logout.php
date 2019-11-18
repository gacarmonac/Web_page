<?php

/* Funciones para Cerrar Sesion */

  session_start();

  session_unset();

  session_destroy();

  header('Location: /php-login');
?>
