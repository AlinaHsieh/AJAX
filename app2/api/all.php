<?php

$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=ajax_student','root','');
$students = $pdo->query("select * from students")->fetchAll();
foreach($students as $student){
    echo $student['name'] . '-' . $student['birthday'];
    echo "<br>";
}
