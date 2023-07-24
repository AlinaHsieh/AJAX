<?php
header("Access-Control-Allow-Origin: *"); //請求CORS
$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=ajax_student','root','');
$classes = $pdo->query("SELECT classroom FROM `students` group by classroom")->fetchAll(PDO::FETCH_ASSOC);

foreach($classes as $class){
    echo "<button class='btn btn-info m-3' onclick='query({$class['classroom']})'>"; //資料撈出後，會去執行query(101、102、103)班級 F12 Element
    
    echo $class['classroom'];
    echo "</button>";

}