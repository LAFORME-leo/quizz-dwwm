<?php
// declare(strict_types=1);
// require_once dirname(_DIR_) .'/vendor/autoload.php';
// echo "salut";
// var_dump($_SERVER);
// var_dump($_GET);


declare(strict_types=1);
use App\MyQuizz\Quizz;
/** /public/index.php */
require_once dirname(__DIR__) .'/vendor/autoload.php';
$json = file_get_contents('quizzphp.json'); 
$json_data = json_decode($json,true); 
$quizz = Quizz::create($json_data );
