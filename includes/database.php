<?php

$db = mysqli_connect('localhost', 'u971367685_admin', 'UchiUke33?', 'u971367685_appsalon');

$db->set_charset("utf8");

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}