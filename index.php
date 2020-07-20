<?php
ini_set('display_errors',1);
@session_start();
define('ROOT', dirname(__FILE__));
define('DOMAIN', "mvckb");
/*
Этот комментарий добавлен для апробации залития изменений в удаленный репозиторий
*/
// define('ROOT', ".");

// echo "DIRECTORY_SEPARATOR = ".DIRECTORY_SEPARATOR;
// echo "<br>";
// // Тип операционной системы, где равзернут MVC - ориентация наклона слэша

// // define('OsType', "U");
// echo("zapros kontrol");
// // print_r(array_keys($_SERVER));
// print_r(isset($_SERVER['HTTP_X_REQUESTED_WITH']));
// print_r($_SERVER['HTTP_X_REQUESTED_WITH']);
// echo("<br><<<");
// if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
//  {
//     // Если запрос послан с xmlhttprequest, то есть это ajax запрос
//     echo 'Определен ajax запрос!';
//     exit;
// }
// //Если это другой запрос
// echo 'Определен другой запрос!';



// Необходим в первую очередь модель Администрироания
// в частности для загрузки всех компопнент и составляющих системы

$FilePath	= ROOT.'/components/Autoload.php';
// echo "FilePath = ".$FilePath;
// echo "<br>1>".intval(require_once($FilePath));
require_once($FilePath);
// echo "<br>2>".intval(require_once(Admin::setFilePath($FilePath, $OsType)));
// echo "<hr>";


// // print_r($_SERVER);
// foreach ($_SERVER as $key => $value) {
// 	# code...
// 	echo("<br>$key	=>");
// 	print_r($value);
// }
// echo phpinfo();
$router = new Router();
$router->run();
?>

