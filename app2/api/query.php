<?php
//處理查詢資料的請求
$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=ajax_student','root','');
$code = $_GET['classroom'];
$students = $pdo->query("select * from students where classroom = $code")->fetchAll();
foreach($students as $student){
    echo $student['name'] . '-' . $student['birthday'];
    echo "<br>";
}
