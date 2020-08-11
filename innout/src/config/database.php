<!DOCTYPE html>
<meta charset="utf-8" />

<?php
header("Content-Type: text/html; charset=utf-8", true);
setlocale(LC_ALL, 'Brazil', 'pt_BR.utf-8', 'portuguese_brazilian', 'utf-8', 'utf8');

ini_set('default_charset', 'utf-8');
class Database {

    public static function getConnection() {
        ini_set('default_charset', 'utf-8');
		mysqli_set_charset($conn,"utf8");
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        $conn = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);
        $conn->set_charset("utf8");
        $conn->query("SET NAMES utf8");
        //$this->$conn->set_charset("utf8");
        mysqli_set_charset($conn,"utf8");


		
		/*mysqli_set_charset($conn, 'utf8');
        if (!$conn->set_charset("utf8")){
            printf("Error loading character set UTF8: %s\n", $conn->error);
        } else {
            printf("Current character set: %s\n", $conn->character_set_name());
        }
              
        mysqli_select_db($conn, 'nta');
        mysqli_query($conn,"SET NAMES 'utf8'");
        mysqli_query($conn,"SET character_set_connection=utf8");
        mysqli_query($conn,"SET character_set_client=utf8");
        mysqli_query($conn,"SET character_set_results=utf8");*/

        if($conn->connect_error) {
            die("Erro: " . $conn->connect_error);
        }

        return $conn;
    }

    public static function getResultFromQuery($sql) {
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    public static function executeSQL($sql) {
        $conn = self::getConnection();
        if(!mysqli_query($conn, $sql)) {
            throw new Exception(mysqli_error($conn));
        }
        $id = $conn->insert_id;
        $conn->close();
        return $id;
    }
}