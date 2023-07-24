<?php
header('Content-Type:application/json; charset=utf8');
$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=ajax_student','root','');
$students = $pdo->query("select * from students")->fetchAll();
// foreach($students as $student){
//     echo $student['name'] . '-' . $student['birthday'];
//     echo "<br>";
// }
echo json_encode($students); //編寫成json字串
