<?php

// Trayendo todo del archivo person:
require_once '../controller/prueba.php';

// Trayendo todo lo que está en el modelo:
require_once '../model/prueba.php';
require_once '../db/db.php';

$data = isset($_GET['action']) ? $_GET['action'] : "No hay valores";


