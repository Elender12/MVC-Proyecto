<?php
namespace Core;

// Cargamos la configuracion para el acceso a la bd
require_once '../config/db.php';
use const Config\DSN;
use const Config\USER;
use const Config\PASSWORD;

//necesario para referirnos a ella
use PDO;

class Model
{


    protected static function db()
    {
        try {
            $db = new PDO(DSN, USER, PASSWORD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Ha ocurrido un error al conectar a la BD: ' . $e->getMessage();
        }
        return $db;
    }

    
}